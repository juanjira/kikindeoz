<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uri extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('uri_model',"urim");
	}

	public function index()
	{		
		$data['uris'] = $this->urim->listaUris();	
		$this->load->view('url/uri_view',$data);
	}


	public function agrega(){
		$data = array("url"=>$this->input->post('url'));	

		if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$data['url'])) $this->urim->agregaUrl($data);

		else echo "<h1>No hay url</h1>";	
	}

}
