<?php
class Publicacion extends EntidadBase{

    private $id;
    private $imagen;
    private $titulo;
    private $categoriaId;
    private $fecha;
    private $derechoId;
    private $etiqueta1;
    private $etiqueta2;
    private $etiqueta3;
    private $privacidad;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of categoriaId
     */ 
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set the value of categoriaId
     *
     * @return  self
     */ 
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of derechoId
     */ 
    public function getDerechoId()
    {
        return $this->derechoId;
    }

    /**
     * Set the value of derechoId
     *
     * @return  self
     */ 
    public function setDerechoId($derechoId)
    {
        $this->derechoId = $derechoId;

        return $this;
    }

    /**
     * Get the value of etiqueta1
     */ 
    public function getEtiqueta1()
    {
        return $this->etiqueta1;
    }

    /**
     * Set the value of etiqueta1
     *
     * @return  self
     */ 
    public function setEtiqueta1($etiqueta1)
    {
        $this->etiqueta1 = $etiqueta1;

        return $this;
    }

    /**
     * Get the value of etiqueta2
     */ 
    public function getEtiqueta2()
    {
        return $this->etiqueta2;
    }

    /**
     * Set the value of etiqueta2
     *
     * @return  self
     */ 
    public function setEtiqueta2($etiqueta2)
    {
        $this->etiqueta2 = $etiqueta2;

        return $this;
    }

    /**
     * Get the value of etiqueta3
     */ 
    public function getEtiqueta3()
    {
        return $this->etiqueta3;
    }

    /**
     * Set the value of etiqueta3
     *
     * @return  self
     */ 
    public function setEtiqueta3($etiqueta3)
    {
        $this->etiqueta3 = $etiqueta3;

        return $this;
    }

    /**
     * Get the value of privacidad
     */ 
    public function getPrivacidad()
    {
        return $this->privacidad;
    }

    /**
     * Set the value of privacidad
     *
     * @return  self
     */ 
    public function setPrivacidad($privacidad)
    {
        $this->privacidad = $privacidad;

        return $this;
    }
 }

 ?>