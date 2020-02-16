<?php

namespace Controller;
use Core\Controller;
use Controller\FormerrorController;
use Model\UserModel;
// use Core\Router;

class UserController extends Controller
{
    public function addregisterAction()
    {
        echo '1';

        $usermodel = new UserModel;
        // var_dump($_POST);

        if (!empty($_POST['email']) && !empty($_POST['password']))
        {
            $formerror = new FormerrorController;

            if($formerror->errorAction() == true)
            {
                if($formerror->uniqueemailAction($_POST['email']) < 1)
                {
                $usermodel->save($_POST['email'], $_POST['password']);

                }

                else
                {
                    header('Location: registeraction');
                    exit();
                }
            }
            
            else
            {
                header('Location: registeraction');
                exit();

            }
        }
        
        else
        {
            header('Location: registeraction');
            exit();
        }

        header('Location: login');
        exit();

        
    }

    public function addloginAction()
    {
        $this->render("login");
        $login = new UserModel;
        if (isset($_POST['emailconnect']) && isset($_POST['passwordconnect']))
        {
            $connect = $_POST['emailconnect'];
            $password = $_POST['passwordconnect'];
            if ($login->Login($connect, $password) == true)
            {
                session_start();
                $_SESSSION['id'] = 
                $_SESSION['email'] = $connect;
                $_SESSION['password'] = $password;
                header('Location: compte');
                exit();            }
            else
            {
                echo "Mauvais email ou mot de passe !";
            }
        }
    }

    public function adddeconnectAction()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: login");
    }

    public function addupdateAction()
    {
        $update = new UserModel;
        $obj = $update->recupid($_SESSION['email']);
        $update->recupid($_SESSION['email']);
        $update->update($_SESSION['email'], $update[0]);
    }

    public function registerAction()
    {
        echo '2';
        $this->render('register');

    }

    public function loginAction()
    {
        echo '3';
        $this->render('login');

    }

    public function compteAction()
    {
        echo '4';
        $this->render('compte');
    }

    public function createAction()
    {
        $this->render('create');
    }

    public function deleteAction()
    {
        $this->render('delete');
    }

    public function updateAction()
    {
        $this->render('update');
    }

    public function readAction()
    {
        $this->render('read');
    }

    public function readallAction()
    {
        $this->render('readall');
    }

}