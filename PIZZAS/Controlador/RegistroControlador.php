<?php 
require_once "../Datos/Conne.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
	$array_devolver=[];
	$email= ($_POST['email']);
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$edad= $_POST['edad'];
	$sexo= $_POST['sexo'];
	$telefono= $_POST['telefono'];
	$direccion= $_POST['direccion'];
	$ciudad= $_POST['ciudad'];
	$estado= $_POST['estado'];
	$fk_tipo= $_POST['priv'];

	//comprobar si existe el usuario
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
		else{
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query="INSERT INTO usuario (email, password, nombre, apellidos, edad, sexo, telefono, direccion, ciudad, estado, fk_tipo) VALUES (:email, :password, :nombre, :apellido, :edad, :sexo,:telefono ,:direccion,:ciudad, :estado, :tipo)";

	$nusuario = $con->prepare($query);
	$nusuario -> bindParam(':email', $email, PDO::PARAM_STR);
	$nusuario -> bindParam(':password',$password, PDO::PARAM_STR);
	$nusuario -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
	$nusuario -> bindParam(':apellido', $apellido, PDO::PARAM_STR);
	$nusuario -> bindParam(':sexo',$sexo , PDO::PARAM_STR);
	$nusuario -> bindParam(':telefono',$telefono , PDO::PARAM_STR);
	$nusuario -> bindParam(':direccion',$direccion , PDO::PARAM_STR);
	$nusuario -> bindParam(':ciudad',$ciudad, PDO::PARAM_STR);
	$nusuario -> bindParam(':estado',$estado, PDO::PARAM_STR);
	$nusuario -> bindParam(':edad',$edad, PDO::PARAM_INT);
	$nusuario -> bindParam(':tipo',$fk_tipo, PDO::PARAM_INT);
	
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
 			$_SESSION['user_id'] = (int) $user_id;

 			//$array_devolver['redirect'] = 'http://localhost:8080/codigos/PIZZAS/Vista/TipoUsuario/Administrador.php';
 			$array_devolver['redirect']='http://localhost:8080/Sistema-pizzas/PIZZAS/Vista/login/Acceso.php';
			 $array_devolver['is_login'] = true;
			 $array_devolver['Registro exitoso']= true;


}
echo json_encode($array_devolver);
}else{
	exit("fuera del registro");
}

		 

 ?>