<?php
include './object/usuario.php';
include('conexion/controlador.php');

$error = false;

$listaUsuarios = usuariosControlador();
if (!$listaUsuarios) {
    $error = true;
}
?>
<div class="box-body table-responsive no-padding">

    <?php if ($error) { ?>
        <h1> Aun no hay usuarios</h1>
    <?php } else { ?>

        <table class="table table-hover">
            <tbody><tr>
<!--                    <th>ID</th>-->
                    <th>Nombre</th>
                    <th>edad</th>
                    <th>sexo</th>
                    <th>correo</th>
                    <!--<th>contrasena</th>-->
                    <th></th>
                    <th>

                    </th>
                </tr>

                <?php
                foreach ($listaUsuarios as $key => $user):
                    $user = (object) $user;
                    ?>



                    <tr>
                        <!--<td><?php echo $user->id; ?></td>-->
                        <td><?php echo $user->nombre; ?></td>
                        <td><?php echo $user->correo; ?></td>
                        <td><?php echo $user->sexo; ?></td>
                        <td><?php echo $user->edad; ?></td>
                        <!--<td><?php echo $user->contrasena; ?></td>-->
                        <!--<td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>-->
                    </tr>

                <?php endforeach; ?>






            </tbody></table>
    <?php } ?>
</div>

