   <?php 
  session_start(); 
if (!$_SESSION['rol']) {
    header("location: http://localhost:8080/Sistema-pizzas/PIZZAS/Controlador/case.php");
}else 
{ if ($_SESSION['rol'] != 1) {
     header("location: http://localhost:8080/Sistema-pizzas/PIZZAS/Controlador/case.php");
    }
}

  ?>