<?php

include_once '/Cl_Conexion.php';

class DaoLogin {

    private $cone;

    public function DaoLogin() {

        try {
            $this->cone = new Cl_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
        public function Insertar($user) {
        try {
            $sql = "insert into usuarios values(null,'@username','@password','@tipo')";
            $sql = str_replace("@username", $user->getUsername(), $sql);
            $sql = str_replace("@password", $user->getPassword(), $sql);
            $sql = str_replace("@tipo", $user->getTipo_usuario(), $sql);
            return $this->cone->sqlOperaciones($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
        public function EliminarC($id) {
        try {
            $sql = "delete from usuarios where id_usuario=$id";
            return $this->cone->sqlOperaciones($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function obtenerUserFilas($user, $pass) {
        try {
        $sql ="SELECT * FROM USUARIOS WHERE username='$user' AND password='$pass'";
        return $this->cone->sqlOperaciones($sql);
                
        } catch (Exception $ex) {
            $ex->getTraceAsString();
        }
    }
    
    public function obtenerUser($user, $pass) {
        try {
        $sql ="SELECT * FROM USUARIOS WHERE username='$user' AND password='$pass'";
        return $this->cone->sqlSeleccion($sql);
                
        } catch (Exception $ex) {
            $ex->getTraceAsString();
        }
    }
    
    public function obtenerUserAll() {
        try {
        $sql ="SELECT * FROM USUARIOS";
        return $this->cone->sqlSeleccion($sql);
                
        } catch (Exception $ex) {
            $ex->getTraceAsString();
        }
    }

}
