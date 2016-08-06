<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Archivos extends MY_Controller 
{
    protected $_subject = 'archivos';                 // Nombre con el que se va a identificar el modulo
    protected $_model   = 'm_archivos';               // Modelo principal, la vista tabla automatica
    
    function __construct()
    {
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model'); // Linea obligatoria  
        $this->load->model('m_menus'); // Linea obligatoria  
    	$this->load->library('image_CRUD');
	}
	
	
/*---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Crud vista

-----------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/
	
	
	function _example_output($output = null)
	{
	    $db['menu']             = $this->m_menus->getRegistros();
        $db['subjet']           = ucwords($this->_subject);
            
	    $this->load->view('plantilla/head', $db);
        $this->load->view('plantilla/menu-top');
        $this->load->view('plantilla/menu-left');
		$this->load->view($this->_subject.'/abm', $output);	
        $this->load->view('plantilla/footer');
	}


/*---------------------------------------------------------------------------------
-----------------------------------------------------------------------------------

		Crud imagenes

-----------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/


	function abm()
	{
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id_archivo');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('archivo');
		$image_crud->set_table($this->_subject)
		->set_ordering_field('orden')
		->set_image_path($this->_subject.'/imagenes');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}	
}