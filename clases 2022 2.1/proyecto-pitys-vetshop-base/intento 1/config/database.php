<?php

    class Database{
        public static function conexion(){
            $conexion= new mysqli("localhost","root","","pitys_vetshop_bd2");
            if (mysqli_connect_errno()){
                echo "Error en la conexion".mysqli_connect_errno();
            }else{
                echo "Conexion exitosa";
            }
            return $conexion;
        }
         
/* 
        function conectar(){
            $dbhost = "localhost";
         $database = "pitys_vetshop_bd2";
         $username = "root";
         $password = "root";
         $charset = "utf8";
            try{
            $conexion= "mysql:host= " . $this->dbhost . "; dbname= " . $this->database . "; charset= "
            . $this->charset ;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion, $this->$username, $this->$password, $options);
            return $pdo;


        } catch(PDOException $e){
            echo 'Error conexion ' . $e->getMessage();
        }
        }   */      
    }
    

?>