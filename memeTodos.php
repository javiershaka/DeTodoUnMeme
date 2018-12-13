<?php
include './object/post.php';
include('conexion/controlador.php');

$error = false;

$listaPost = postControlador();
if (!$listaPost) {
    $error = true;
}
?>


    <?php if ($error) { ?>
        <h1> Aun no hay usuarios</h1>
        <?php
    } else {
        foreach ($listaPost as $key => $posteador):
            $posteador = (object) $posteador;
            ?>
            <!--$posteador->id;-->
            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top" src="<?php echo $posteador->imagen; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><?php echo $posteador->descripcion; ?> </p>
                        <a href="#" class="btn btn-primary"><?php echo $posteador->idUsuario; ?></a>
                        <a href="#" class="btn btn-secondary"><?php echo $posteador->etiqueta; ?></a>
                        <p class="card-text quote-text">- <?php echo $posteador->vistas; ?>, <a href="#"><?php echo $posteador->fecha; ?><</a></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>







    <?php } ?>


