<?php

class Usuario{

	private $id;
	private $nombre;
	private $usuario;
	private $cadena;
	private $password;
	private $privilegio;
	private $fecha_registro;

		public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getCadena(){
		return $this->cadena;
	}

	public function setCadena($cadena){
		$this->cadena = $cadena;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPrivilegio(){
		return $this->privilegio;
	}

	public function setPrivilegio($privilegio){
		$this->privilegio = $privilegio;
	}

	public function getFecha_registro(){
		return $this->fecha_registro;
	}

	public function setFecha_registro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}
}