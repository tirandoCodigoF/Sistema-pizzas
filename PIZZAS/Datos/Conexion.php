<?php 
class Conexion {
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO(
                'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=propizzeria', 
                'chanty', 'samuragi23');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);    
        }catch (PDOException $e){
            echo "No hemos podido conectar con la base de datos.";
            exit;
        }
    }
    public static function getConn(){
        if(!self::$con){
            new Conexion();
        }
        return self::$con;
    }
}
?>