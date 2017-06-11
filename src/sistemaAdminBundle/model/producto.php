<?php

	class Producto extends ConexionConMysql{

		//private $codigo;
		private $nombre;
		private $descripcion;
		private $precio;
		private $imagen;
		private $categoria;
		private $descuentos = array();
		private $impuestos = array();
		CONST TABLA = "productos";

		public function crearTabla(){
			$cn = conexion::conectar();
			$query = 'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
			SET time_zone = "+00:00";
			CREATE TABLE `productos` (
			`codigo` bigint(20) NOT NULL,
			`nombre` varchar(80) NOT NULL,
			`descripcion` mediumtext NOT NULL,
			`precio` double NOT NULL,
			`imagen` varchar(100) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			ALTER TABLE `productos` ADD UNIQUE KEY `codigo` (`codigo`);
	  		ALTER TABLE `productos` MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT;';
  			$resultado = $cn->query($query);

		}

		public function subir($nombre, $descripcion, $precio, $imagen){

			$cn = conexion::conectar();
			$this->codigo = rand(0,1000);
			$query = "SELECT codigo FROM ".self::TABLA."WHERE codigo = ".$this->codigo;
			
			while($resultado = $cn->query($query)){
				$this->codigo = rand(0,1000);
			}

			$this->nombre = $nombre;
			$this->descripcion = $descripcion;
			$this->precio = $precio;
			$this->imagen = $imagen;

			$query = "INSERT INTO ".self::TABLA." (codigo,nombre,descripcion,precio,imagen) VALUES ('".$this->codigo."','".$this->nombre."','".$this->descripcion."', '".$this->precio."', '".$this->imagen."') ";
			$resultado = $cn->query($query);
			conexion::cerrar($cn);
			return $resultado;
		}

		public function eliminar(){

		}

		public function modificar(){

		}

		public function buscarPorCodigo($codigo){
			$cn = conexion::conectar();
			$query = "SELECT * FROM ".self::TABLA." WHERE codigo = ".$codigo;
			$resultado = $cn->query($query);
			$rows = HerramientasParaMysql::deObjetoSqlAVector($resultado);
			conexion::cerrar($cn);
			return $rows;
		}

		public function buscarPorNombre($nombre){
			$cn = conexion::conectar();
			$query = "SELECT * FROM ".self::TABLA." WHERE nombre = ".$nombre;
			$resultado = $cn->query($query);
			$rows = HerramientasParaMysql::deObjetoSqlAVector($resultado);
			conexion::cerrar($cn);
			return $rows;
		}

		public function buscarTodos(){
			$cn = conexion::conectar();
			$rows = array();
			$query = "SELECT * FROM ".self::TABLA." ORDER BY nombre ASC";
			$resultado = $cn->query($query);
			$rows = HerramientasParaMysql::deObjetoSqlAVector($resultado);
			conexion::cerrar($cn);
			return $rows;
		}

	    public function getCodigo()
	    {
	        return $this->codigo;
	    }

	    public function setCodigo($codigo)
	    {
	        $this->codigo = $codigo;
	    }

	    public function getNombre()
	    {
	        return $this->nombre;
	    }

	    public function setNombre($nombre)
	    {
	        $this->nombre = $nombre;
	    }

	    public function getDescripcion()
	    {
	        return $this->descripcion;
	    }

	    public function setDescripcion($descripcion)
	    {
	        $this->descripcion = $descripcion;
	    }

	    public function getPrecio()
	    {
	        return $this->precio;
	    }

	    public function setPrecio($precio)
	    {
	        $this->precio = $precio;
	    }

	    public function getImagen()
	    {
	        return $this->imagen;
	    }

	    public function setImagen($imagen)
	    {
	        $this->imagen = $imagen;
	    }

	    public function getCategoria()
	    {
	        return $this->categoria;
	    }

	    public function setCategoria($categoria)
	    {
	        $this->categoria = $categoria;
	    }

	    public function getDescuentos()
	    {
	        return $this->descuentos;
	    }

	    public function setDescuentos($descuentos)
	    {
	        $this->descuentos = $descuentos;
	    }

	    public function agregarDescuento($descuento){
	    	$this->descuentos[] = $descuento;
	    }

	    public function getImpuestos()
	    {
	        return $this->impuestos;
	    }

	    public function setImpuestos($impuestos)
	    {
	        $this->impuestos[] = $impuestos;
	    }

	    public function agregarImpuesto($impuesto){
	    	$this->impuestos[] = $impuesto;
	    }
}