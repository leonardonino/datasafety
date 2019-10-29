<?php

class Usuario {
    private $id;
    private $nombre;
    private $telefono;
    private $email;
    private $t_documento;
    private $documento;
    private $password;
    
    public function __construct($id, $nombre, $telefono, $email, $t_documento, $documento, $password) {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> telefono = $telefono;
        $this -> t_documento = $t_documento;
        $this -> password = $password;
        $this -> documento = $documento;
    }
    
    public function obtener_id() {
        return $this-> id;
    } 
    
    public function obtener_nombre() {
        return $this-> nombre;
    } 
    public function obtener_telefono() {
        return $this-> telefono;
    } 
    public function obtener_email() {
        return $this-> email;
    } 
    public function obtener_t_documento() {
        return $this-> t_documento;
    } 
    public function obtener_documento() {
        return $this-> documento;
    } 
    public function obtener_password() {
        return $this-> password;
    } 
}