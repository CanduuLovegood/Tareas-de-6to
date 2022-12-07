<?php
require_once "../config/database.php";
class modelo{
    public $db;
    private $producto;

    public function __construct()
    {
        $this->$db=Database::conexion();
        $this->$producto=array();
        $this -> $db -> conectar();
    }

    public static function mostrarProducto(){
        $arrayProductos=array();
        $sql="SELECT * FROM productos";
        $resultado= $this->db->query($sql);
        while ($i=$resultado->fetch_object()){
            array_push($arrayProductos,$i);
        }
        return $arrayProductos;
    }
    
}
?>