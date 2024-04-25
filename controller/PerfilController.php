<?php
class PerfilController extends ControladorBase{
    public $conectar;

	public function __construct()
	{
		parent::__construct();


	}

    Public function mostrarPerfil(){
        $idUsuario = $_POST["idSeleccionado"];
        $perfil = New Perfil();
        $perfilEncontrado = $perfil->buscar($idUsuario);
        if($perfilEncontrado == NULL){
            die("No se encontro el perfil");
        }
        $this->view("perfil",array());
    }
}


?>