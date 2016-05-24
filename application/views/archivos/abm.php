<?php
$html = start_content();
 
foreach($css_files as $file){
    $html .= '<link type="text/css" rel="stylesheet" href="'.$file.'" />';
}

foreach($js_files as $file){
    $html .= '<script src="'.$file.'"></script>';
}


$html .= $output;
$html .= end_content(); 


echo $html; 
?>