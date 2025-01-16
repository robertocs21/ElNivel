<?php

namespace Model;

class Clienteya extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'cursos_inscritos';
    protected static $columnasDB = ['id','nombre','apellido','sapellido','edad','telefono','email','fecha','folio'];
    public $id;
    public $nombre;
    public $apellido;
    public $sapellido;
    public $edad;
    public $telefono;
    public $email;
    public $fecha;
    public $folio;
    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->edad = $args['edad'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->folio = $args['folio'] ?? '';

    }
}