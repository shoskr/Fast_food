<?php

class Cl_Conexion {
    private $host="localhost";
    private $usuario="root";
    private $password="";
    private $base="fast_food";
    
    private $cone; // objeto de tipo conexion
    
    public function Cl_Conexion() {
        try {
            $this->cone= mysqli_connect($this->host, $this->usuario, $this->password, $this->base);
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
    
    //metodos para insertar-eliminar-modificar
    public function sqlOperaciones($sql) {
        try {
            $resp= mysqli_query($this->cone, $sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
    public function sqlSeleccion($sql){
        try {
            $resp= mysqli_query($this->cone, $sql);
            return $resp;
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
}
