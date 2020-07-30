<div class="row">
    <?php
        include('menu.php');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div>
            <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
            <form enctype="multipart/form-data" action="upload.php" method="POST">
                <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
                Enviar este fichero: <input name="file" type="file" />
                <input type="submit" value="Enviar fichero" />
            </form>
        </div>
    </div>
    </main>
</div>