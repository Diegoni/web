<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_usuarios');	
	}

/*--------------------------------------------------------------------------------	
 			Login: carga de pantalla de login
 --------------------------------------------------------------------------------*/	

	function index(){
		if($this->session->userdata('logged_in')){
			redirect('/articulos/table','refresh');
		}else{
			$this->load->view('plantilla/head');
			$this->load->view('login/inicio');
		}
	}

/*--------------------------------------------------------------------------------	
 			Login: log out
 --------------------------------------------------------------------------------*/	

	function logout(){
		//$this->m_logs_usuarios->action('log out');
		$this->session->unset_userdata('logged_in');
	  	session_destroy();
	  	$this->index();
	}

/*--------------------------------------------------------------------------------	
 			Login: control de datos usuario y pass
 --------------------------------------------------------------------------------*/	
	
	function control(){
		$username  = $this->input->post('username');
        $password  = $this->input->post('password');
		
	  	$usuario = $this->check_database($username, $password);
	   
	   	if($usuario != 1){
	   		if($usuario == 0){
	   			$db['error'] = $this->lang->line('usuario_incorrecto');
	   		} else {
	   			log_message('DEBUG', 'Usuario '.$username.' esta intentendo hacer log in');
	   			$db['error'] = $this->lang->line('usuario_baja');
			}
		   
		    $this->load->view('plantilla/head.php', $db);
			$this->load->view('login/inicio');
	   	} else {
	   		
			$this->m_usuarios->log_login();
			//$this->m_logs_usuarios->action('log in');
			
			redirect('/articulos/table/','refresh');
	  	}
	}

/*--------------------------------------------------------------------------------	
 			Login: inicio de de session 
 --------------------------------------------------------------------------------*/	

	function check_database($username, $password){
		$result = $this->m_usuarios->login($username, $password);
	
		if($result){
			foreach($result as $row){
				$sess_array = array(
				    'id_usuario'   => $row->id_usuario,
				    'usuario' 	   => $row->usuario,
					'last_login'   => $row->last_login,
					'eliminado'    => $row->eliminado,
				);
			}
			
			if($sess_array['eliminado'] == 0){
				$ci = & get_instance(); 
				$this->session->unset_userdata('logged_in');
				$this->session->set_userdata('logged_in', $sess_array);
			    
				return 1;
			}else{
				return 2;
			}
		
		} else {
			return 0;
		}
	}
}
?>