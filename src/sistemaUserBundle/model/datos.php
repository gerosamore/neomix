<?php

	class Datos{

			private $id;
			private $id_user
			private $nombre_facturacion;
			private $codigo_postal;
			private $calle;
			private $altura;
			private $aclaracion;
			private $telefono;
			private $celular;
			CONST TABLA = "datos_usuario";



	
    public function getId()
    {
        return $this->id;
    }

    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombreFacturacion()
    {
        return $this->nombre_facturacion;
    }

    private function setNombreFacturacion($nombre_facturacion)
    {
        $this->nombre_facturacion = $nombre_facturacion;

        return $this;
    }

    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    private function setCodigoPostal($codigo_postal)
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    private function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    private function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getAclaracion()
    {
        return $this->aclaracion;
    }

    private function setAclaracion($aclaracion)
    {
        $this->aclaracion = $aclaracion;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    private function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    private function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }
}