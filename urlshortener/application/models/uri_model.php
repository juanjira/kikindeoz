<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uri_model extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	private function buscaUrl($url){
		$this->db->like('url_original', $url);	
		$query = $this->db->get("uris");
		if($query->num_rows() > 0) return $query->result();
		else return false; 
	}

	private function recuperaUrl($url){
		$this->db->where('url_nueva', $url);	
		$query = $this->db->get("uris");
		if($query->num_rows() > 0) return $query->result();
		else return false; 
	}

	function agregaUrl($data){
		$resp = $this->buscaUrl(trim($data['url']));	
		if($resp == false){
			$nueva_url = crc32($this->db->escape($data['url']));
			//$nueva_url = md5(uniqid(rand(), true));;
			$this->db->insert("uris",array("url_original"=>$data['url'],"url_nueva"=>$nueva_url));
			redirect( base_url()."uri/" );
		}else echo "<h1>Ya se registro con anterioridad</h1>";
	}

	function listaUris(){
		$query = $this->db->get("uris");
		if($query->num_rows() > 0) return $query->result();
		else return false; 
	}

	function actualizaContador($datos){
		$uri = $this->recuperaUrl($datos['id']);	
		
		if($uri):
			
			$qry = "UPDATE uris SET contador = contadorUri(".$this->db->escape($datos['id']).") 
					WHERE url_nueva =".$this->db->escape($datos['id']);
			
			$query = $this->db->query($qry);
		
			if($query) redirect( $uri[0]->url_original );
			
		endif;	

		if(!$uri) echo "No encontrado";
	}
}	