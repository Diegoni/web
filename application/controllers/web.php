<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    
	public function index(){
	    $this->load->model('m_articulos');
        
	    $db['articulos'] = $this->m_articulos->getRegistros();
		$this->load->view('web', $db);
	}
}
