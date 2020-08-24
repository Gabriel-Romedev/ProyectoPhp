<?php

class ControladorUsuarios
{
    public function __construct()
    {
    }


    public function insertarUsuario($usuario)
    {
        $usuarioModel = new Usuarios();
        $id = $usuarioModel->insert($usuario);
        $v=($id>0);
        $respuesta = new Respuesta($v ? Emensajes::INSERCION_EXITOSA : Emensajes::INSERT_ERROR);
        $respuesta->setDatos($id);
        return $respuesta;
    }

    public function listarUsuarios(){
        $usuarioModel =  new Usuarios();
        $lista = $usuarioModel->get();
        $v = (count($lista));
        $respuesta = new Respuesta($v ? Emensajes::CORRECTO : Emensajes::ERROR);
        $respuesta->setDatos($lista);
        return $respuesta;

    }

    public function actualizarUsuario($usuario){

        $usuarioModel = New Usuarios();
        $actualizados = $usuarioModel -> where("id", "=", $usuario["idUsuario"])->update($usuario);
        $v=($actualizados>0);
        $respuesta = new Respuesta($v ? Emensajes::ACTUALIZACION_EXITOSA : Emensajes::UPDATE_ERROR);
        $respuesta->setDatos($actualizados);
        return $respuesta;
    
    }

    public function eliminarUsuario($idUsuario){
        $usuarioModel = new Usuarios();
        $eliminados = $usuarioModel -> where("id", "=", $idUsuario)->delete();
        $v=($eliminados>0);
        $respuesta = new Respuesta($v ? Emensajes::ELIMINACION_EXITOSA : Emensajes::DELETE_ERROR);
        $respuesta->setDatos($eliminados);
        return $respuesta;
    
    }

    public function buscarUsuarioPorId($idUsuario){
        $usuarioModel = new Usuarios();
        $usuario=$usuarioModel->where("id", "=", $idUsuario)->first();
        $v=($usuario!=null);
        $respuesta = new Respuesta($v ? Emensajes::CORRECTO : Emensajes::ERROR);
        $respuesta->setDatos($usuario);
        return $respuesta;
    
    }


}
?>