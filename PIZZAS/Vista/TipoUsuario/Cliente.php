<?php echo "hola todo bien aca"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once '../navar/head.php';
		include_once '../navar/navar.php';
        include_once '../../Datos/Conne.php';
         require '../../Controlador/SegCliente.php';

 ?>

<body>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-6 col-md-offset-6">
                <article class="card-body">
                    <h1>Bienvenido a mi cliente</h1>
                     <!--<li><a href="../../Controlador/CerrarSesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a></li>-->
                        <?php                               
                            echo "<li class=dropdown>
                                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['user'].' '.$_SESSION['ap']."</a>
                                        <ul class='dropdown-menu'>
                                            <li><a href='../../Controlador/CerrarSesion.php'>Cerrar Sesión</a></li>
                                
                                        </ul>
                                    </li>";
                        ?>

                </article>
            </div>
        </div>
    </div>
    <?php include_once '../navar/footer.php'; ?>
</body>
</html>