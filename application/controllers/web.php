<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller 
{
	
	
/*---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Carga el contenido del articulos

-----------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/

	
	public function articulo($id_articulo = NULL)
	{
		if($this->input->post('message')){
			$this->load->library('email');
			$this->load->model('m_mensajes');
			
			$registro = array(
				'nombre'	=> $this->input->post('name'),
				'asunto'	=> $this->input->post('subject'),
				'mensaje'	=> $this->input->post('message'),
				'remitente'	=> $this->input->post('email'),
				'date_add'	=> date('Y-m-d H:i:s'),
				'visto'		=> 0,
			);

			$this->email->from($registro['remitente'], $registro['nombre']);
			$this->email->to('cintiazacaria@czcosultoria.com.ar'); 
			$this->email->cc('diego_nieto_1@hotmail.com'); 
			//$this->email->cc('another@another-example.com'); 
			//$this->email->bcc('them@their-example.com'); 
			
			$this->email->subject($registro['asunto']);
			$this->email->message($registro['mensaje']);	
			
			$this->email->send();
			
			$registro['debugger'] = $this->email->print_debugger();
			
			$this->m_mensajes->insert($registro);
			
			$db['message'] = 
			'<div class="alert alert-success alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>OK!</strong> Gracias por comunicarse con nosotros, nos estaremos comunicando a la brevedad
			</div>';
		}
		
	    $this->load->model('m_articulos');
  
	    $db['menus'] = $this->m_articulos->getRegistros();
		if($id_articulo != NULL){
			$db['articulos'] = $this->m_articulos->getRegistros($id_articulo);
			$db['id_articulo'] = $id_articulo;
		}else{
			$db['articulos'] = FALSE;
			$db['id_articulo'] = FALSE;
		}
		
	    $db['base_url'] =  base_url().'web/';
		$db['base_menu'] =  base_url();
		
		$this->load->view('head', $db);
		$this->load->view('menu');
		$this->load->view('web');
	}
}
