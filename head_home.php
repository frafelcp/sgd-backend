<div class="row">
    <?php
        include('menu.php');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Panel deControl</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Subir Archivo</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Digitalizar Factura</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
            </div>
        </div>

    <div class="alert alert-success" role="alert">
        <h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-4">
            <div class="btn-group-vertical">
            <a href="#" class="btn btn-primary">Digitalizar</a>
            <a href="#" class="btn btn-primary">Exportar</a>
            </div>
        </div>
        <div class="col-4">
            <div class="btn-group-vertical">
            <a href="#" class="btn btn-primary">Extraer</a>
            <a href="#" class="btn btn-primary">Mostrar</a>
            </div>
        </div>
        </div>
    </div>
    </main>
</div>