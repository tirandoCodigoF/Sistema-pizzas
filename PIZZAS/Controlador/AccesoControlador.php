<?php 
require_once "../Datos/Conne.php";
//require_once 'case.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	header("Content-Type: application/json");
    	$array_devolver=[];
    	$email = strtolower($_POST['email']);
    	$password = $_POST['password'];

   session_start();
   /* if (isset($_SESSION['rol'])) {
    	switch ($_SESSION['rol']) {
    		case 1:
    		echo "hola111";
    				$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
    				break;
    		case 2:
    				$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Cliente.php';
    				break;
    		
    		default:
    			
    	}
    
    }*/
 if (isset($email) && isset($password)) {
 
	//comprobar si existe el usuario
		$query=" SELECT * FROM usuario WHERE email='$email' LIMIT 1 ";
		$resultado = $con -> prepare($query);
		$resultado->bindParam(':email',$email,PDO::PARAM_STR);
		$resultado->execute();

	//si hay regsitro en la bdd
	if ($resultado->rowCount() == 1) {
		//existe
			$usuario = $resultado->fetch(PDO::FETCH_ASSOC);

			$usuario_id = (int) $usuario['user_id'];
			$usuario_tipo= (int) $usuario['fk_tipo'];
			$usuario_nom= $usuario['nombre'];
			$usuario_ap= $usuario['apellido'];

		//$usuario_id= (int) $usuario['fk_tipo']==1;
			$hash = (string) $usuario['password'];
		//verificaion de pass con hash
		 if (password_verify($password,$hash)){
		 		$_SESSION['rol']= $usuario_tipo;
		 		$_SESSION['user']=$usuario_nom;
		 		$_SESSION['ap']=$usuario_ap;
		 		$_SESSION['user_id']= $usuario_id;

		 	switch ($_SESSION['rol']) {
    				case 1:
    						$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
    						break;
    				case 2:
    						$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Cliente.php';
    						break;
    		
    				default:
    			
    	}
		 	//$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
		 	
		 }else{
				 			$array_devolver['error']='Los datos no son validos.';
	}
}else{
							$array_devolver['error']="La cuenta no existe. <a href='http://localhost:8080/codigos/PIZZAS/Vista/login/Registro.php'><b>Crear Cuenta</b></a>";
}
							echo json_encode($array_devolver);
} }
else{
							exit("fuera de aqui");

}


 ?>