<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensajes extends MY_Controller {

	protected $_subject = 'mensajes';                 // Nombre con el que se va a identificar el modulo
    protected $_model   = 'm_mensajes';               // Modelo principal, la vista tabla automatica
    
    function __construct(){
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model'); // Linea obligatoria  
    } 
    
/*-------------------------------------------------------------------------------- 
            Ejemplo de abm
--------------------------------------------------------------------------------*/    
    
    function abm($id = NULL){                           
        $db['campos']   = array(
            array('asunto',    'onlyChar', 'required'), 
            array('mensaje',   'onlyChar', 'required'), 
            array('remitente', 'onlyChar', 'required'), 
            array('date_add',  'onlyChar', 'required'), 
            array('checkbox', 'visto'),                 
        );
        
        $this->armar_abm($id, $db);                     // Envia todo a la plantilla de la pagina
    }
}
?>