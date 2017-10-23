<?php 
defined('BASEPATH') OR exit('No se permite un acceso directo');

/**
* 
*/
class form_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();//esta  linea  siempre  debe  ir 

	}
   //esta  funcion  es la  que  guarda  la  base  de  datos de  eval3
	function guardar($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 'direciondeemail'=>$data['correo'] ));

		if ($this->db->affected_rows() > 0) 
		{
			echo "Guardados con éxito";
		}
		else
		{
			echo "Algo salio mal";
		}
	}
}

 
 ?>