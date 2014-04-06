<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include('simple_html_dom.php');

class Tiempo extends simple_html_dom {
	
	function __construct(){
		parent::__construct();
	}
	
	function recuperaTiempo(){
		$html = $this->load_file('http://www.tiempo.com/getwid/db9e0d5cf3b0d122c5fb4553268381cf');

		return $html->find('table.fondo',1);
	}	

}