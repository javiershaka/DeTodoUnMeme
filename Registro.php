

<!doctype html>
<html lang="en">
    <head>
        <title>DeTodoUnMeme</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Main CSS --> 
        <link rel="stylesheet" href="css/style.css">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>


    <body

        <!-- Main navigation -->

        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary">
            <div class="container">

                <!-- Company name shown on mobile -->
                <a class="navbar-brand" href="index.php"><span>DeTodo</span>UnMeme</a>

                <!-- Mobile menu toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Main navigation items -->

            </div>
        </nav>
        <?php
        $p = $_POST;


        if (isset($p['btn'])) {

            include ('./conexion/conexionRegistros.php');
            Registrar($p['nombre'], $p['edad'], $p['sexo'], $p['correo'], $p['contrasena']);
            
        } else {
            ?>
            <div class="text-center padded-box pb-0">
                <h2>Registro</h2>
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="post"  >
                                <div class="form-group">
                                    <label  >Nombre</label>

                                    <input placeholder="Nombre(S), Apellido Paterno, Apellido Materno" name="nombre" class="form-control txtForm">

                                </div>
                                <div class="form-group">
                                    <label>edad</label>
                                    <input placeholder="22 años" class="form-control txtForm" name="edad">


                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <input  placeholder="Hombre/Mujer" class="form-control txtForm" name="sexo">


                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input  placeholder="nombre@ejemplo.com" class="form-control txtForm " name="correo">


                                </div>
                                <div class="form-group">
                                    <label>Pasword</label>
                                    <input type="password" class="form-control txtForm" name="contrasena">

                                    <p>*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*</p>

                                </div>
                                <!--<button value="ok" name="btnr" data-toggle="modal" data-target="#myModal"  class="btn btn-lg btn-success btn-block" >Registrarse</button>-->
                                <!--<a href=""  class="btn btn-lg btn-success btn-block" data-dismiss="modal" >Iniciar session</a>-->
                                <button type="submit" name="btn" value="ok"   class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModal"  >Registrar</button  >

                            </form>


                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>