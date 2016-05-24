<?php
/*--------------------------------------------------------------------------------  
            Comienzo del contenido
 --------------------------------------------------------------------------------*/
 
$cabeceras = array(
    lang('asunto'),
    lang('mensaje'),
    lang('remitente'),
    lang('date_add'),
    lang('opciones'),
);

$html = start_content();

if(isset($mensaje)){
    $html .= setMensaje($mensaje);
}

/*--------------------------------------------------------------------------------  
            Tabla
 --------------------------------------------------------------------------------*/
 
$html .= getExportsButtons($cabeceras);

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