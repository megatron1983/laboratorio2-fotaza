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
		//Cargamos la vista index y le pasamos valores
		$this->view(
			"inicio",
			array()
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
			$save = $usuario->save();
			echo '<pre>';
			var_dump($save);
			print_r($save);
			echo '</pre>';
			// $usuario->deleteById()
			
			$listaIntereses = new ListaInteres();
			// $listaIntereses->setCategoriaId($_POST["id"]);
			$listaIntereses->setCategoriaId(5);
			// $listaIntereses->setUsuarioId($save);
			$listaIntereses->setUsuarioId(5);
			// $listaIntereses->save();

		}
			// $this->redirect("Usuario", "inicio");
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
		$usuario = $usuario->buscar();
		if($usuario != NULL){
			if($usuario->contrasena == $_POST['contrasena']){ 
				session_start();
				$_SESSION['nombre'] = $usuario->nombre;
				$_SESSION['email'] = $usuario->email;
				// localhost/fotaza/index.php?controller=usuario&action=index
				$this->redirect('usuario','index');
			}
		}
	}

	// localhost/fotaza/index.php?controller=usuario&action=login
	public function login(){
		$this->view("iniciarsesion", array());
	}

}
?>