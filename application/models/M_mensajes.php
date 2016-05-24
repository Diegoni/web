<?php 
class m_mensajes extends MY_Model {
		
	protected $_tablename	= 'mensajes';       // Nombre de la tabla
	protected $_id_table	= 'id_mensaje';     // Id de la tabla
	protected $_order		= 'id_mensaje';     // Orden de la tabla
	protected $_relation    =  '';
		
	function __construct(){
		parent::__construct(
			$tablename		= $this->_tablename, 
			$id_table		= $this->_id_table, 
			$order			= $this->_order,
			$relation		= $this->_relation
		);
	}
} 
?>