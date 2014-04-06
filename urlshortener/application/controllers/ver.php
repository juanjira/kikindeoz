<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ver extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('uri_model',"urim");
	}

	public function pag()
	{	
		$id = $this->uri->segment(2,'No es valido');
		if(!empty($id)){

			$datos = array("id"=>$id);
			$this->urim->actualizaContador($datos);

		}else redirect( base_url()."uri/" );
	}

}