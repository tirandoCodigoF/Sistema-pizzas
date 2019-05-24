<?php 
require_once "../Datos/Conne.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
    $array_devolver=[];
    $imagen= $_POST['nombrep'];
	$nombre= $_POST['nombrep'];
	$ingredientes= $_POST['ingredientes'];
	$descripcion= $_POST['descripcion'];
	$tamaño= $_POST['tamaño'];
	$precio= $_POST['precio'];
	

	/*comprobar si existe el usuario
	$query=" SELECT * FROM usuario WHERE email='$email' LIMIT 1";
	$resultado = $con -> prepare($query);
	$resultado->bindParam(':email',$email,PDO::PARAM_STR);
	$resultado->execute();

	$query2=" SELECT * FROM usuario WHERE telefono='$telefono' LIMIT 1";
	$resultado2 = $con -> prepare($query2);
	$resultado2->bindParam(':telefono',$telefono,PDO::PARAM_STR);
	$resultado2->execute();
	//si hay regsitro en la bdd
	if ($resultado->rowCount() == 1) {
		$array_devolver['error']="Este correo ya existe";
		$array_devolver['is_login']=false;
		}elseif ($resultado2->rowCount() == 1) {
			$array_devolver['error']="el numero de telefono ya existe intente con uno nuevo";
			$array_devolver['is_login']=false;
		}
		else{*/
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query="INSERT INTO usuario (nombre, imagen, ingredientes, descripcion, fk_tamaño, fk_precio) VALUES (:nombre, :imagen, :ingredientes, :descripcion, :tamaño, :precio)";

	$npizza = $con->prepare($query);
	$npizza -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
	$npizza -> bindParam(':imagen',$imagen, PDO::PARAM_STR);
	$npizza -> bindParam(':ingredientes', $ingredientes, PDO::PARAM_STR);
	$npizza -> bindParam(':descripcion', $descripcion, PDO::PARAM_STR); 
	$npizza -> bindParam(':tamaño',$tamaño, PDO::PARAM_INT);
	$npizza -> bindParam(':precio',$precio, PDO::PARAM_INT);
	
	
 			$npizzas -> execute();

 			$user_id = $con->lastInsertId();
 			$_SESSION['user_id'] = (int) $user_id;

 			//$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
 			$array_devolver['redirect']='http://localhost:8080/Sistema-pizzas/PIZZAS/Vista/login/Acceso.php';
			 $array_devolver['is_login'] = true;
			 $array_devolver['Registro exitoso']= true;



echo json_encode($array_devolver);
}else{
	exit("fuera del registro");
}

		 

 ?>