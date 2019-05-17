<?php include_once '../navar/head.php';
    include_once '../navar/navar.php';
    require_once '../../Datos/Conne.php';
     //require_once '../../Controlador/case.php';
    //
   // session_start();
   // 
   // 
   // 
        session_start();
    if (!isset($_SESSION['rol'])) {
      ?> 
                        <br>
                        <br>
                        <br>
                        <br>
                        <!DOCTYPE html>
                        <html lang="es">
                        <head>
                          <meta charset="UTF-8">
                          <title>acceso al sistema</title>
                        </head>
                        <body>
                        <div class="container">
                          <div class="row d-flex justify-content-around mt-5 form-control">
                            <div class="card cold-md-6 cold-md-offset-6">
                              <article class="card-body">
                                <h4 class="card-title mb-4 mt-1 text-center"> <B>LOGIN</B></h4>
                                <form action="POST" class="formulario_acceso">
                                  <div class="form-group">
                                    <label>Email: </label>
                                    <input type="email" name="email" class="form-control" require autofocus placeholder="Email">
                                  </div>  
                                  <div class="form-group">
                                    <label>Contraseña: </label>
                                    <input type="password" name="password" autofocus require placeholder="********" class="form-control">
                                  </div>
                                   <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                  </div>
                                  <div class="form-group" align="center">
                                    <button type="submit"  class="btn btn-success">Ingresar</button>
                                  </div>

                                </form>
                                <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                              </article>
                            </div>
                          </div>
                        </div>

                        <?php include_once '../navar/footer.php'; ?>

                        </body>
                        </html>
                         <?php
                           }
                            elseif (isset($_SESSION['rol'])) {

                                  switch ($_SESSION['rol']) {
                                    case 1:
                                     header('location: http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php');
                                     echo "hola2";
                                        //$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
                                        break;
                                    case 2:
                                    header('location: http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Cliente.php');
                                        echo "hola3";
                                        //$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Cliente.php';
                                        break;
                                    
                                    default:
                              
                                      
                                  }
                            } 
 ?>


