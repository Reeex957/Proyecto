<?php
class LoginController
{
    private $vista;

    public function login()
    {
        $vista = "dev/view/login-register/login-view.php";
        include_once("dev/View/index-sin-log.php");
    }
}
