<?php
class ModelsController
{
    private $vista;

    public function models()
    {
        $vista = "dev/view/models/models-view.php";
        include_once("dev/View/index-sin-log.php");
    }
}
