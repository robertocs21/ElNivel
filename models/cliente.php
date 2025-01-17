<?php

namespace Model;

class Cliente extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'cliente';
    protected static $columnasDB = ['id','nombre','apellido','sapellido','telefono','email','fecha','folio'];
    public $id;
    public $nombre;
    public $apellido;
    public $sapellido;
    public $telefono;
    public $email;
    public $fecha;
    public $folio;
    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->folio = $args['folio'] ?? '';

    }
}