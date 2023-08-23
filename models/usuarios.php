<?php

namespace Model;

class Usuarios extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','email','password'];
    public $id;
    public $nombre;
    public $email;
    public $password;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function hashPassword(){
        $this-> password = password_hash($this-> password, PASSWORD_BCRYPT);
    }
    public function comprobarPasswordAndVerificado($password){
        $resultado = password_verify($password, $this->password);
        if(!$resultado){
            self::$alertas['error'][]='Contraseña incorrecta';
        }else{
            return true;
        }
    }
}