<?php
#echo "..BaseDatos..";

require_once "config.php";

class BaseDatos
{
    public $conexion;
    
    public function conectar()        
    {
        $this->conexion = mysqli_connect(HOST,USER,PASS,DBNAME); 
        if (!$this->conexion)             
            DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        else
            return true;

    }

    public function desconectar()
    {
        
        if ($this->conexion){                  
            $this->conexion = mysqli_close($this->conexion);
            return $thi->conexion;            
        }        
        return false;

    }
}