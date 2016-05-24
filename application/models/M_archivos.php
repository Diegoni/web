<?php 
class m_archivos extends MY_Model {
		
	protected $_tablename	= 'archivos';        // Nombre de la tabla
	protected $_id_table	= 'id_archivo';     // Id de la tabla
	protected $_order		= 'orden';        // Orden de la tabla
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