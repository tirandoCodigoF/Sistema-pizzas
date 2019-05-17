<?php

class Usuario{
private $id;
private $usuario;
private $contraseña;
private $nombre;
private $appat;
private $telefono;
private $fk_pizzeria;
private $fk_direccion;
private $fk_tipo;

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getUsuario(){
    return $this->usuario;
}

public function setUsuario($usuario){
    $this->usuario = $usuario;
}

public function getContraseña(){
    return $this->contraseña;
}

public function setContraseña($contraseña){
    $this->contraseña = $contraseña;
}

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function getAppat(){
    return $this->appat;
}

public function setAppat($appat){
    $this->appat = $appat;
}

public function getTelefono(){
    return $this->telefono;
}

public function setTelefono($telefono){
    $this->telefono = $telefono;
}

public function getFk_pizzeria(){
    return $this->fk_pizzeria;
}

public function setFk_pizzeria($fk_pizzeria){
    $this->fk_pizzeria = $fk_pizzeria;
}

public function getFk_direccion(){
    return $this->fk_direccion;
}

public function setFk_direccion($fk_direccion){
    $this->fk_direccion = $fk_direccion;
}

public function getFk_tipo(){
    return $this->fk_tipo;
}

public function setFk_tipo($fk_tipo){
    $this->fk_tipo = $fk_tipo;
}
}

?>