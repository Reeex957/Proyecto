<?php
class DefaultController
{
    private $vista;
    public function index()
    {
        $vista = "dev/view/HomeView.php";
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            include_once("dev/View/index-con-log.php");
        } else {
            include_once("dev/View/index-sin-log.php");
        }
    }
}
