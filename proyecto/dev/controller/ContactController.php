<?php
class ContactController
{
    private $vista;

    public function contact()
    {
        $vista = "dev/view/contact/contact-view.php";
        include_once("dev/View/index-sin-log.php");
    }
}
