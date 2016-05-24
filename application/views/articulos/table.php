<?php
/*--------------------------------------------------------------------------------  
            Comienzo del contenido
 --------------------------------------------------------------------------------*/
 
$cabeceras = array(
    lang('menu'),
    lang('articulo'),
    lang('orden'),
    lang('opciones'),
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
            $row->menu,
            $row->articulo,
            $row->orden,
            table_upd($subjet, $row->id_articulo),
            
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