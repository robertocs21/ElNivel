<?php

namespace Model;

class cursos_inscritos extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'cursos_inscritos';
    protected static $columnasDB = ['id','cliente_id','curso_id','debe'];
    public $id;
    public $cliente_id;
    public $curso_id;
    public $debe;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->cliente_id = $args['cliente_id'] ?? '';
        $this->curso_id = $args['curso_id'] ?? '';
        $this->debe = $args['debe'] ?? '0';
    }

    public function registrado(){
        $query = "SELECT * FROM " . self::$tabla . " WHERE cliente_id= '". $this->cliente_id ."' AND curso_id = '". $this->curso_id ."' LIMIT 1";
    }
    
}