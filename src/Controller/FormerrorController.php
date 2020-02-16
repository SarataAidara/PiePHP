<?php

namespace Controller;
use Core\Database;

class FormerrorController extends Database
{
    
    public static function errorAction()
    {
        if(!isset($_POST["forminscription"]))
        {
            echo " Tous les champs doivent être completés" . PHP_EOL;
            return false;
        }
        
        if (empty($_POST['email'])
            OR empty($_POST['password']))
        {

        echo " Veuillez remplir tous les champs";
        return false;
        }

    return true;

    }

    public function uniqueemailAction($email)
    {
        $mailreq = $this->pdo->prepare("SELECT * FROM users WHERE email = '" . $email . "'");
        $mailreq->execute();
        return ($mailreq->rowCount());
    }


}
