<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
require_once APPPATH."/libraries/codigos/Codigos.php";

class Codigo_6200 extends Codigos {
	protected $_formato = array(
		'nro_ente'			=> array('start' => 0,	'size' => 4, 	'control' => 'int', 'value' =>'6200'),
		'forma_pago'		=> array('start' => 4,	'size' => 1, 	'control' => 'int', 'value' => '1'),
		'cod_ente'			=> array('start' => 5,	'size' => 4, 	'control' => 'int'),
		'cod_afiliado'		=> array('start' => 9,	'size' => 8, 	'control' => 'int'),
		'digito_ver'		=> array('start' => 17,	'size' => 1, 	'control' => 'int'),
	);
	
	protected $_size_linea = 18;
	
	function __construct() {
    	parent::__construct(
			$formato		= $this->_formato,
			$size_linea		= $this->_size_linea
		);
    }
}