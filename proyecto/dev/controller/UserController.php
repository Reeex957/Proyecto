<?php
include_once("app/Model/UserModel.php");
class UserController
{
    private $vista;
    private $modelo;

    public function index()
    {

        $modelo = new UserModel();
        $datos = $modelo->getAll();
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = 'app/View/admin/users/IndexUserView.php';
            include_once("app/View/admin/PlantillaView.php");
        } else {
            $vista = 'app/View/admin/HomeView.php';
            include_once("app/View/admin/Plantilla2View.php");
        }
    }

    public function CallFormAdd()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = 'app/View/admin/users/AddUserView.php';
            include_once('app/view/admin/PlantillaView.php');
        } else {
            $vista = 'app/View/admin/HomeView.php';
            include_once('app/view/admin/Plantilla2View.php');
        }
    }

    public function CallFormLogin()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "app/View/admin/LoginView.php";
            include_once("app/View/admin/PlantillaView.php");
        } else {
            $vista = "app/View/admin/LoginView.php";
            include_once("app/View/admin/Plantilla2View.php");
        }
    }

    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = array(
                'Nombre' => $_POST['nombre'],
                'ApPaterno' => $_POST['apaterno'],
                'ApMaterno' => $_POST['amaterno'],
                'Usuario' => $_POST['user'],
                'Password' => $_POST['password'],
                'Sexo' => $_POST['sexo'],
                'FchNacimiento' => $_POST['fchnac']
            );

            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['avatar']['name'];
                $tipoArchivo = $_FILES['avatar']['type'];
                $tamanoArchivo = $_FILES['avatar']['size'];
                $rutaTemporal = $_FILES['avatar']['tmp_name'];
                $extenciones = array('jpg', 'jpeg', 'png');
                $extencion = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array($extencion, $extenciones)) {
                    echo "El fomato de la imagen no es valido";

                    exit;
                }
                $tamanomax = 2 * 1024 * 1024;
                if ($tamanoArchivo > $tamanomax) {
                    echo "ya mejor sube un video o una lona no mms";
                    exit;
                }
                $nombreArchivo = uniqid('Avatar_') . '.' . $extencion;
                $rutadestino = "app/src/img/avatars/" . $nombreArchivo;

                if (!move_uploaded_file($rutaTemporal, $rutadestino)) {
                    echo "Error al momento de cargar la imagen al servidor";
                    exit;
                }
                $datos['Avatar'] = $nombreArchivo;
            }

            $modelo = new UserModel();
            $res = $modelo->insert($datos);
            header("Location:http://localhost/php3a/?c=UserController&m=index");
        }
    }

    public function CallFormEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $modelo = new UserModel();
            $datos = $modelo->getById($id);
            session_start();
            if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
                $vista = 'app/View/admin/users/EditUserView.php';
                include_once('app/view/admin/PlantillaView.php');
            } else {
                $vista = 'app/View/admin/HomeView.php';
                include_once('app/view/admin/Plantilla2View.php');
            }
        }
    }
    public function Edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = array(
                'IdUser' => $_POST['id'], 
                'Nombre' => $_POST['nombre'],
                'ApPaterno' => $_POST['apaterno'],
                'ApMaterno' => $_POST['amaterno'],
                'Usuario' => $_POST['user'],
                'Password' => $_POST['password'],
                'Sexo' => $_POST['sexo'],
                'FchNacimiento' => $_POST['fchnac'],
                'Avatar' => $_POST['ava']
            );

            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['avatar']['name'];
                $tipoArchivo = $_FILES['avatar']['type'];
                $tamanoArchivo = $_FILES['avatar']['size'];
                $rutaTemporal = $_FILES['avatar']['tmp_name'];
                $extenciones = array('jpg', 'jpeg', 'png');
                $extencion = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array($extencion, $extenciones)) {
                    echo "El fomato de la imagen no es valido";
                    exit;
                }
                $tamanomax = 2 * 1024 * 1024;
                if ($tamanoArchivo > $tamanomax) {
                    echo "ya mejor sube un video o una lona no mms";
                    exit;
                }
                $nombreArchivo = uniqid('Avatar_') . '.' . $extencion;
                $rutadestino = "app/src/img/avatars/" . $nombreArchivo;
                if (!move_uploaded_file($rutaTemporal, $rutadestino)) {
                    echo "Error al momento de cargar la imagen al servidor";
                    exit;
                }
                $this->modelo = new UserModel();
                $anterior = $this->modelo->getById($_POST['id']);
                if (!empty($anterior['Avatar'])) {
                    unlink('app/src/img/avatars/' . $anterior['Avatar']);
                }
                $datos['Avatar'] = $nombreArchivo;
            } else {
                $datos['Avatar'] = $_POST['ava'];
            }

            $modelo = new UserModel();
            $res = $modelo->update($datos);
            header("Location:http://localhost/php3a/?c=UserController&m=index");
        }
    }

    public function Delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];

            $this->modelo = new UserModel();
            $anterior = $this->modelo->getById($id);

            $modelo = new UserModel();
            $modelo->delete($id);
            if (!empty($anterior['Avatar'])) {
                unlink('app/src/img/avatars/' . $anterior['Avatar']);
            }
            header("Location:http://localhost/php3a/?c=UserController&m=index");
        }
    }

    public function Login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->modelo = new UserModel();
            $usuario = $this->modelo->getCredentials($_POST['user'], $_POST['password']);
            if ($usuario == false) {
                $vista = 'app/View/admin/LoginView.php';
                include_once("app/View/admin/Plantilla2View.php");
            } else {
                session_start();
                $_SESSION['logedin'] = true;
                $_SESSION['avatar'] = $usuario['Avatar'];
                $_SESSION['nombre'] = $usuario['Nombre'] . ' ' . $usuario['ApPaterno'] . ' ' . $usuario['ApMaterno'];
                $vista = "app/View/admin/homeView.php";
                include_once("app/View/admin/PlantillaView.php");
            }
        }
    }
}
