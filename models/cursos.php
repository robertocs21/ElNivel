<?php

namespace Model;

class Cursos extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'Cursos';
    protected static $columnasDB = ['id','fecha','cupo','nombre','precio','marca','maestro','hora','eliminado'];
    public $id;
    public $fecha;
    public $cupo;
    public $nombre;
    public $precio;
    public $marca;
    public $maestro;
    public $hora;
    public $eliminado;


    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->cupo = $args['cupo'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->marca = $args['marca'] ?? '';
        $this->maestro = $args['maestro'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->eliminado = $args['eliminado'] ?? '0';
    }
}