<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');
	}
	{
		function validar()
	{	
		//echo "Hola<br>";
		//aqui  estoy creando una funcion  para  el  controlador  para  guardar  datos recolectados 

		$name = $this->input->post('phpalicia');
		$lastname = $this->input->post('segundoapellido');
		$DirecciondeEmail = $this->input->post('ingresacorreo');
		echo "Nombre: ".$name."  Apellido: ".$lastname."correo" .$DirecciondeEmail;


	}
}
