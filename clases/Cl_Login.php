<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_Login
 *
 * @author DUOC
 */
class Cl_Login {
    //put your code here
    
    private $id_usuarios;
    private $username;
    private $password;
    private $tipo_usuario;
    
    function __construct() {
        
    }

    function getId_usuarios() {
        return $this->id_usuarios;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getTipo_usuario() {
        return $this->tipo_usuario;
    }

    function setId_usuarios($id_usuarios) {
        $this->id_usuarios = $id_usuarios;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setTipo_usuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }


}
