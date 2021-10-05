<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestión de usuario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= CONTEXT_PATH ?>/Usuario/Datos">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CONTEXT_PATH ?>/Equipo/verEquipo">Ver maquina</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= CONTEXT_PATH ?>/Session/cerrarSesion">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
