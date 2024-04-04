<?php
class Usuario extends EntidadBase{
    private $id;
    private $nombre;
    private $email;
    private $contrasena;
    
    public function __construct() {
        $table="usuarios";
        parent::__construct($table);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /*  public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
 */
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }


	
    public function save(){
		
		
		//verifico si el usuario se encuentra en la BD
		//sino es null entonces UPDATE
		//si es null entonces INSERT
		if($this->id){
			
			$query= "UPDATE usuarios set nombre = '$this->nombre',email = '$this->email' ,contrasena = ".$this->contrasena->getId(). " where id = $this->id";
			
			$save=$this->db()->query($query);
			//$this->db()->error;
			return $save;
			
		}
		else{
					
			$query= "INSERT INTO usuarios (id,nombre,email,contrasena)
					VALUES(NULL,
                            '".$this->nombre."',
                            '".$this->email."',
                            '".$this->contrasena."'
                            );";
			$save=$this->db()->query($query);
			//$this->db()->error;
			return $save;
		}	
    }

    public function buscar(){
        $usuarioExiste = $this->getBy('email',$_POST['email']);
        if(!empty($usuarioExiste)){
            return $usuarioExiste[0];
        } else{return NULL;}
}

}
?>