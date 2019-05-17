 <?//php include_once '../Controlador/AccesoControlador.php';
        // include 'con_mysqli.php';
        include_once '../Datos/Conne.php';
 session_start(); 
if (!isset($_SESSION['rol'])) {
  header("Location: login/Acceso.php");
}
// init_set(error_reporting('error_log(ingresa)'));

        ?>