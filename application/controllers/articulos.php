<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos extends MY_Controller {

	protected $_subject = 'articulos';              
    protected $_model   = 'm_articulos';            
    
    function __construct(){
        parent::__construct(
            $subject    = $this->_subject,
            $model      = $this->_model 
        );
        
        $this->load->model($this->_model, 'model');   
    } 
    
/*-------------------------------------------------------------------------------- 
            Ejemplo de abm
--------------------------------------------------------------------------------*/    
  
    function abm($id = NULL){                         
        $db['campos']   = array(
            array('menu',     'onlyChar', 'required'), 
            array('articulo', '',       'required'),
            array('orden',    'onlyInt', 'required'),
        );
        
        $this->armar_abm($id, $db); 
    }
}
?>