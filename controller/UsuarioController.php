<?php
class UsuarioController extends ControladorBase
{
	public $conectar;

	public function __construct()
	{
		parent::__construct();


	}

	//Listar todos los Usuarios	
	public function index()
	{

		//Creamos el objeto usuario
		$usuario = new Usuario();

		//Conseguimos todos los usuarios
		$allusers = $usuario->getAll();

		//Cargamos la vista index y le pasamos valores
		$this->view(
			"inicio",
			array(
				"allusers" => $allusers,
				"UnaVariableDeLaVista" => "Valor de la Vista"
			)
		);
	}

	//Muestra el formulario de inserción
	public function insertar()
	{

		//Cargamos la vista para mostrar formulario de insert
		$this->view("registrar", array());

	}

	//Procesa los datos del formulario de inserción
	public function crear()
	{
		if (isset ($_POST["nombre"])) {

			//Creamos un usuario
			$usuario = new Usuario();
			$usuario->setNombre($_POST["nombre"]);
			$usuario->setEmail($_POST["email"]);
			$usuario->setContrasena($_POST["contrasena"]);

			//al constructor de provincia le paso el id

			$usuario->setContrasena($_POST["contrasena"]);
			$save = $usuario->save();
		}
		$this->redirect("Usuario", "inicio");
	}

	//Procesa el borrado de unUsuario
	public function borrar()
	{
		if (isset ($_GET["id"])) {
			$id = (int) $_GET["id"];

			$usuario = new Usuario();
			$usuario->deleteById($id);
		}
		$this->redirect();
	}


	//Muestra el formulario de Actualizacion
	public function editar()
	{
		if (isset ($_GET["id"])) {
			$id = (int) $_GET["id"];
			//Conseguimos todos los usuarios
			//traemos todos los datos del usuario para mostrarlos en el formulario
			$usuario = new Usuario();
			$usuario = $usuario->getById($id);
			//Cargamos la vista para mostrar formulario de insert
			$this->view(
				"editar",
				array(
					"usuario" => $usuario
				)
			);
		}
	}
	//Procesa los datos del formulario de edición
	public function actualizar()
	{
		if (isset ($_POST["nombre"])) {

			//Creamos un usuario
			$usuario = new Usuario();
			$usuario->setId($_POST["id"]);
			$usuario->setNombre($_POST["nombre"]);
			$usuario->setEmail($_POST["email"]);
			$usuario->setContrasena($_POST["contrasena"]);

		

			$save = $usuario->save();
		}
		$this->redirect("Usuario", "inicio");
	}

	public function autenticacion(){
		$usuario = new Usuario();
		$usuario->buscar();

	}

	public function login(){
		$this->view("iniciarsesion", array());
	}

}
?>