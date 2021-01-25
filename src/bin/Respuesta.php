<?php

class Respuesta
{
    public $codigo;
    public $mensaje;
    public $datos;

    public function __construct($codigo=null, $mensaje=null, $datos=null)
    {
        //Obtener la respuesta por defecto por codigo.
        if (isset($codigo) && empty($mensaje)) {
            $respuesta = Emensajes::getMensaje($codigo);
            $this->codigo = $respuesta->codigo;
            $this->mensaje = $respuesta->mensaje;
            $this->datos=$respuesta->datos;
            return;
        }
        if (is_string($codigo)) {
            $temp=Emensajes::getMensaje($codigo);
            $codigo=$temp->codigo;
        }
        $this->codigo=$codigo;
        $this->mensaje=$mensaje;
        $this->datos=$datos;
    }
    public function json($obj=null)
    {
        header('Content-Type: application/json');
        if (is_array($obj) || is_object($obj)) {
            return json_encode($obj);
        }
        return json_encode($this);
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
    public function getDatos()
    {
        return $this->datos;
    }
    public function setCodigo($codigo)
    {
        $this->codigo=$codigo;
    }
    public function setMensaje($mensaje)
    {
        $this->mensaje=$mensaje;
    }
    public function setDatos($datos)
    {
        $this->datos=$datos;
    }
}
