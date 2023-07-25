<?php
class MapsController
{
    private $vista;

    public function maps()
    {
        $vista = "dev/view/maps/maps-view.php";
        include_once("dev/View/index-sin-log.php");
    }
}
