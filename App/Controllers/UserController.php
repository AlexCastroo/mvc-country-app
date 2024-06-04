<?php

require_once(__DIR__ . '/../Models/User.php');

class UserController extends Controller {

    private $userModel;

    public function __construct(PDO $coneccion)
    {
        $this->userModel = new User($coneccion);
    }

    public function home()
    {
        $this->render('login',[],'site');
    }

    public function login()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $usuario = (isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : null;
            $pass = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;

            $user = $this->userModel->getUser($usuario);
            var_dump($user['password']);
            
            if(password_verify($pass, $user['password']))
            {
                session_start();
                $_SESSION['usuario'] = $user['nombre_usuario'];
                $_SESSION['cart'] = [];
                $this->render('product',[],'site');
            }
            else
            {
                echo 'Fallo de inicio de sesion';
                $this->render('login',[],'site');
            }  
        }
    }

    public function registro()
    {
        $errores = Array();
        $usuario = (isset($_REQUEST['usuario'])) ? $_REQUEST['usuario'] : null;
        $email = (isset($_REQUEST['email'])) ? htmlspecialchars($_REQUEST['email']) : null;
        $pass = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;
        $pass_repeat = (isset($_REQUEST['password_repeat'])) ? $_REQUEST['password_repeat'] : null;


        if(empty($usuario))
        {
            $errores['nombres'] = "Debe introducir un nombre";
        }
        if(empty($email))
        {
            $errores['email'] = "Debe introducir un email";
        }
        if(empty($pass))
        {
            $errores['password'] = "Debe introducir una contraseña";
        }

        if(empty($pass_repeat))
        {
            $errores['pass_repeat'] = "Debe confirmar su contraseña";
        }
            else if($pass != $pass_repeat)
            {
                $errores['pass_repeat'] = "Las contraseñas no coinciden";
            }
            

        if(empty($errores))
        {
            $password_crypt = password_hash($pass, PASSWORD_DEFAULT);
            $this->userModel->insert([
                'nombre_usuario' => $usuario,
                'correo_electronico' => $email,
                'password' => $password_crypt
            ]);

            echo 'Registro completado';
            $this->render('login', [], 'site');
        }
        else
        {
            echo "Verifica los campos";
        }
    }


}