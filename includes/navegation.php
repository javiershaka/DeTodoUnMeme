
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary">
    <div class="container">

        <!-- Company name shown on mobile -->
        <a class="navbar-brand" href="index.php"><span>DeTodo</span>UnMeme</a>

        <!-- Mobile menu toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main navigation items -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index-one-page.php">Tendencias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="usuariosresgit.php">Usuarios gistrados</a>
                </li>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu navbar-dark bg-primary">
                            <a class="dropdown-item" href="examples.php">finales del semestre</a>
                            <a class="dropdown-item" href="three-column.php">clasicos</a>
                            <a class="dropdown-item" href="one-column.php">ISW</a>
                        </div>
                    </li>
                <?php
                if (!isset($_POST['btns'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="login.php">Iniciar session</a>

                    </li>
                    <?php
                } else {
                    ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perfil</a>
                        <div class="dropdown-menu navbar-dark bg-primary">
                            <a class="dropdown-item" href="examples.php">Style Examples</a>
                            <a class="dropdown-item" href="three-column.php">Three Column</a>
                            <a class="dropdown-item" href="one-column.php">One column / no sidebar</a>
                            <a class="dropdown-item"  href="text.php">Text / left sidebar</a>
                        </div>
                    </li>

                <?php } ?>


            </ul>
        </div>
    </div>
</nav>
