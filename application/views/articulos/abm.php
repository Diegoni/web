<?php
$html = css_libreria('plugins/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css');
$html .= js_libreria('plugins/bootstrap-switch-master/dist/js/bootstrap-switch.js');

/*--------------------------------------------------------------------------------  
            Carga de array necesarios
 --------------------------------------------------------------------------------*/ 
    
if($fields){
    foreach ($fields as $field) {
        $registro_values[$field] = '';
    }
}
        
if($registro){
    foreach ($registro as $row) {
        $registro_values = (array) $row;
    }
}

/*--------------------------------------------------------------------------------  
            Comienzo del contenido
 --------------------------------------------------------------------------------*/ 

$html .= start_content();

if(isset($mensaje)){
    $html .= setMensaje($mensaje);
}

$textArea = 
'<div class="form-group">'.setLabel(lang('articulo')).'
    <div class="col-sm-11">
        <textarea class="form-control" id="articulo" name="articulo">'.$registro_values['articulo'].'</textarea>
    </div>
</div>';

/*--------------------------------------------------------------------------------  
            Formulario
 --------------------------------------------------------------------------------*/ 
 
$html .= '<form action="#" method="post" class="form-horizontal">';
$html .= $textArea;
$html .= setForm($campos, $registro_values, $registro, $id_table);
$html .= '</form>';

/*--------------------------------------------------------------------------------  
            Mensajes de alerta
 --------------------------------------------------------------------------------*/ 

$html .= '<div class="alert alert-danger alert-dismissable divider" id="alert_form" style="display: none;">';
$html .= '<div id="mensaje_error"></div>';
$html .= '</div>';

/*--------------------------------------------------------------------------------  
            Fin del contenido y js
 --------------------------------------------------------------------------------*/ 
 
$html .= end_content();

echo $html;
?>

<script>
$("[data-inputmask]").inputmask();
$(".checkbox").bootstrapSwitch();
$(function () {
    CKEDITOR.replace('articulo');
});
</script>
