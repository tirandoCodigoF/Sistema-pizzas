 <?php 
session_start(); 
if (!$_SESSION['rol']) {
    header("location: http://localhost:8080/codigos/PIZZAS/Controlador/case.php");
}else 
{
  if ($_SESSION['rol'] != 2) {
   header("location: http://localhost:8080/codigos/PIZZAS/Controlador/case.php");
    }
} 
  ?>