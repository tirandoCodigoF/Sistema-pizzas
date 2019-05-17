<?php 
session_start();


session_destroy();
session_unset();

echo "<meta http-equiv='refresh' content='0';>";
echo "<script type='text/javascript'> alert('La Sesion Fue Cerrada Correctamente'); window.location='../Vista/login/Acceso.php';
</script>";

 ?>