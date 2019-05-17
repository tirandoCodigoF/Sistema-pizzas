<?php  
//require_once "../Datos/Conne.php";
 //require_once '../Vista/seguridad.php';
// require_once 'AccesoControlador.php';
/*echo "hola";
 session_start();
    if (isset($_SESSION['rol'])) {
    	switch ($_SESSION['rol']) {
    		case 1:
    		 header('location: ../Vista/TipoUsuario/Administrador.php');
    		 echo "hola2";
    				//$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
    				break;
    		case 2:
    		header('location: ../Vista/TipoUsuario/Cliente.php');
    				echo "hola3";
    				//$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Cliente.php';
    				break;
    		
    		default: header("Location: login/Acceso.php");
    		break;
    			
    	}



    }else{

    		header('../Vista/login/Acceso.php');

    	}*/

session_start();
    if (!isset($_SESSION['rol'])) {

    	header('location: http://localhost:8080/codigos/PIZZAS/Vista/login/Acceso.php');
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