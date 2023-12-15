<?php

namespace App;

class Doctor{

    //BASE DE DATOS

    protected static $db;
    
    public $id;
    public $nombre;
    public $apellido;
    public $especialidad;
    public $horario;
    public $creado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->especialidad = $args['especialidad'] ?? '';
        $this->horario = $args['horario'] ?? '';
        $this->creado = date('Y/m/d');

    } 

    public function guardar(){
        $query = "INSERT INTO tbl_medicos (nombre,apellido,especialidad,horario) VALUES('$this->nombre', '$this->apellido', '$this->especialidad', '$this->horario')";
    }

    //DEFINIR LA CONEXION A LA BASE DE DATOS

    public static function setDB($database){
        self::$db = $database;
    }
}

?>