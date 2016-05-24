<?php
/*--------------------------------------------------------------------------------  
            Comienzo del contenido
 --------------------------------------------------------------------------------*/
 
$cabeceras = array(
    /*      ---- cabecera de la tabla
    lang('nombre'),
    lang('apellido'),
    lang('opciones'),
    */ 
);

$html = start_content();

if(isset($mensaje)){
    $html .= setMensaje($mensaje);
}

/*--------------------------------------------------------------------------------  
            Tabla
 --------------------------------------------------------------------------------*/
 
$html .= getExportsButtons($cabeceras, table_add($subjet));

$html .= start_table($cabeceras);

if($registros){
    foreach ($registros as $row) {
        $registro = array(
            /*          ---- Array con los valores de la fila
            $row->nombre,
            $row->apellido,
            table_upd($subjet, $row->id_usuario),
            */
        );
        
        $html .= setTableContent($registro);    
    }
}
            
$html .= end_table($cabeceras);         
$html .= setDatatables();           

/*--------------------------------------------------------------------------------  
            Fin del contenido
 --------------------------------------------------------------------------------*/
 
$html .= end_content();

echo $html;
?>