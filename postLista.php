<?php
include './object/post.php';
include('conexion/controlador.php');

$error = false;

$listaPost = postControlador();
if (!$listaPost) {
    $error = true;
}
?>
<div class="box-body table-responsive no-padding">

    <?php if ($error) { ?>
        <h1> Aun no hay usuarios</h1>
    <?php } else { ?>

        <table class="table table-hover">
            <tbody><tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>edad</th>
                    <th>sexo</th>
                    <th>correo</th>
                    <th>aa</th>
                    <th>contrasena</th>
                    <th></th>
                    <th>

                    </th>
                </tr>

                <?php
                foreach ($listaPost as $key => $posteador):
                    $posteador = (object) $posteador;
                    ?>



                    <tr>
                        <td><?php echo $posteador->id; ?></td>
                        <td><?php echo $posteador->idUsuario; ?></td>
                        <td><?php echo $posteador->descripcion; ?></td>
                        <td><?php echo $posteador->imagen; ?></td>
                        <td><?php echo $posteador->fecha; ?></td>
                        <td><?php echo $posteador->etiqueta; ?></td>
                        <td><?php echo $posteador->vistas; ?></td>
                        <td><a class="badge bg-green"> 	<i class="fa fa-search"></i> VER</a></td>
                    </tr>

                <?php endforeach; ?>






            </tbody></table>
    <?php } ?>
</div>

