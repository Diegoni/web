<?php
/*--------------------------------------------------------------------------------  
            Comienzo del contenido
 --------------------------------------------------------------------------------*/
 
$cabeceras = array(
    lang('asunto'),
    lang('mensaje'),
    lang('remitente'),
    lang('date_add'),
    lang('visto'),
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
            $row->asunto,
            $row->mensaje,
            $row->remitente,
            $row->date_add,
            setSpan($row->visto),
            table_upd($subjet, $row->id_mensaje),
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