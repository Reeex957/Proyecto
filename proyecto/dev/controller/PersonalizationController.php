<?php
class PersonalizationController
{
    private $vista;

    public function personalization()
    {
        $vista = "dev/view/personalization/personalization-view.php";
        include_once("dev/view/index-sin-log.php");
    }
}
