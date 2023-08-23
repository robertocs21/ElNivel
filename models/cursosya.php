<?php

namespace Model;

class cursosya extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'cursos_inscritos';
    protected static $columnasDB = ['id','nombre','cupo','fecha','precio','marca','maestro','eliminado','hora','debe','curso_id','cliente_id'];
    public $id;
    public $nombre;
    public $cupo;
    public $fecha;
    public $precio;
    public $marca;
    public $maestro;
    public $eliminado;
    public $hora;
    public $debe;
    public $curso_id;
    public $cliente_id;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cupo = $args['cupo'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->marca = $args['marca'] ?? '0';
        $this->maestro = $args['maestro'] ?? '';
        $this->eliminado = $args['eliminado'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->debe = $args['debe'] ?? '';
        $this->curso_id = $args['curso_id'] ?? '';
        $this->cliente_id = $args['cliente_id'] ?? '';
    }

 
    
}