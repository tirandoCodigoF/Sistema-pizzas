<?php include_once '../navar/head.php';
    include_once '../navar/navar.php';
    require_once '../../Datos/Conne.php';
 ?>

<br>
<br>
<br>
<br>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>registro al sistema</title>
</head>
<body>
   <h4 class="card-title mb-5 mt-0 text-center"> <B>Formulario de Registro</B></h4>
<div class="container">
  <div class="row d-flex justify-content-around mt-1">

    <div class="card cold-md-6 cold-md-offset-6">
      <article class="card-body">
      
        <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
       
        <form action="POST" class="formulario_registro">
         <div class="form-group">
          <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-6">
              <div class="form-group">
            <label>Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" autofocus placeholder="Nombre" required require  onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras"  maxlength="30">
          </div> 
           <div class="form-group">
            <label>Apellidos: </label>
            <input type="text" name="apellido" id="apellido" class="form-control"  autofocus placeholder="Apellidos" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras" maxlength="30">
          </div> 
          <div class="form-group">
            <label>Edad: </label>
            <input type="number" name="edad" id="edad" class="form-control"  autofocus placeholder="edad" min="18" max="60" required require >
          </div> 
          <div class="form-group">
            <label>Sexo: </label>
           <select name="sexo" id="sexo" class="form-control" required require>
           <option selected>Seleccionar</option>
            <option value="F">Femenino</option>
           <option value="M">Masculino</option>
           </select>
          
          </div> 
            
            
           <div class="form-group">
            <label>Telefono: </label>
            <input type="tel" name="telefono" id="telefono" class="form-control" autofocus placeholder="(953)-121-54-12" required require pattern="[0-9]{3}[0-9]{7}" title="Formato correcto (953)-121-54-12,No puede ingresar Caracteres especiales (*/&.@-,%!) etc, Se requieren 10 digitos" minlength="10" maxlength="10">
          </div> 
          </div>
          <div class="col-md-6">
          <div class="form-group">
            <label>Direccion: </label>
            <input type="text" name="direccion" id="direccion" class="form-control" autofocus placeholder="Dirección" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{20,100}" title="Ingresa tu direccion completa: calle, numero, colonia" maxlength="100">
  
           <!--<select name="fk_direccion" id="fk_direccion">
             
             <?php /*
            $query ="SELECT * FROM direccion";
            $consulta= $con->prepare($query);
            $consulta->execute();
             foreach ($consulta as $fin) {
               echo "<option selected value=".$fin[0]." Calle: ".$fin[2]." N°: ".$fin[3]." Colonia: ".$fin[1].">".$fin[0]." Calle: ".$fin[2]." N°: ".$fin[3]." Colonia: ".$fin[1]."</option>";
             } */?>

           </select>-->

          </div> 
          
          <div class="form-group">
            <label>Ciudad: </label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" autofocus placeholder="Cuidad" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{5,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, Ciudad mayor a 10 letras y menor a 40"  maxlength="40" >
          </div> 
          <div class="form-group">
            <label>Estado: </label>
            <input type="text" name="estado" id="estado" class="form-control" autofocus placeholder="Estado" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{5,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, Estado mayor 5 letras y menor a 40"  maxlength="40">
          </div>
          <div class="form-group">
            <label>Email: </label>
            <input type="email" name="email" class="form-control" require autofocus placeholder="Email">
          </div>  
          <div class="form-group">
            <label>Contraseña: </label>
            <input type="password" name="password" autofocus require placeholder="********" class="form-control">
          </div>
           </div>
           </div>
           </div>
            </div>
            <br>
          <div class="form-group" align="center">
            <button type="submit"  class="btn btn-success">Registrar</button>
          </div>

         
        </form>
       
         
      </article>
    </div>
  </div>
</div>

<?php include_once '../navar/footer.php'; ?>

</body>
</html>
