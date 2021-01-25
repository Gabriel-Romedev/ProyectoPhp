<?php

class EMensajes
{
    const CORRECTO = "CORECTO";
    const ERROR = "ERROR";
    const INSERCION_EXITOSA = "INSERSION_EXITOSA";
    const INSERT_ERROR = "INSERT_ERROR";
    const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
    const UPDATE_ERROR = "UPDATE_ERROR";
    const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
    const DELETE_ERROR = "DELETE_ERROR";

    public static function getMensaje($codigo)
    {
        switch ($codigo) {
            case EMensajes::CORRECTO:
                return new Respuesta(1, "Se ha realizado la operacion de manera correcta.");
            case EMensajes::INSERCION_EXITOSA:
                return new Respuesta(1, "Se ha insertado el registro con éxito.");
            case EMensajes::ACTUALIZACION_EXITOSA:
                return new Respuesta(1, "Se ha actualizado  el registro con éxito.");
            case EMensajes::ELIMINACION_EXITOSA:
                return new Respuesta(1, "Se ha eliminado  el registro con éxito.");
            case EMensajes::DELETE_ERROR:
                return new Respuesta(1, "Se ha  producido un error al realizar el delete.");
            case EMensajes::ERROR:
                return new Respuesta(-1, "Se ha producido un error al realizar la operación.");
            case EMensajes::INSERT_ERROR:
                return new Respuesta(-1, "Se ha producido un error al realizar el insert.");
            case EMensajes::UPDATE_ERROR:
                return new Respuesta(-1, "Se ha producido un error al realizar el update.");
        }
    }
}
