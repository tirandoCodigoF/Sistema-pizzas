<?php include_once '../navar/head.php';
		include_once '../navar/navar.php';
        include_once '../../Datos/Conne.php';
        require '../../Controlador/SegAdmin.php';
        include_once '../MenuAdmin/modaladd.php';
 ?>


<!DOCTYPE html>
<html lang="es">

<body>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-6 col-md-offset-6">
                <article class="card-body">
                    <h1>Bienvenido a mi ADMIN</h1>
                        <?php                               
                            echo "<li class=dropdown>
                                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['user'].' '.$_SESSION['ap']."</a>
                                        <ul class='dropdown-menu'>
                                            <li><a href='../../Controlador/CerrarSesion.php'>Cerrar Sesión</a></li>
                                
                                        </ul>
                                    </li>";
                        ?>
                <!--<li><a href="../../Controlador/CerrarSesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a></li>-->
                        
                </article>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addusuarios">Agregar Usuarios
</button>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addpizzas">Agregar Pizza
</button>

    <?php include_once '../navar/footer.php'; ?>
</body>
</html>