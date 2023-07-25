<?php
define('controladores','dev/controller/');
$control=isset($_GET['c'])? $_GET['c']:'';
$file=controladores.$control.'.php';
if(!empty($control) && file_exists($file)){
    include_once $file;
    $objeto=new $control();
    $metodo=isset($_GET['m'])?$_GET['m']:'';
    if(method_exists($objeto,$metodo) && !empty($metodo)){
        $objeto->$metodo();
    }
}else{
    require_once('dev/controller/DefaultController.php');
    $def=new DefaultController();
    $def->index();
}

?>