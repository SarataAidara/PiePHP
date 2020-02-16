<?php

namespace Model;
use Core\Database;
use PDO;
    
class UserModel extends Database
{

    public function __construct()
    {
        parent::__construct();
    }
      
    public function save($email, $password)
    {
        $insertuser = $this->pdo->prepare("INSERT INTO users (email, password) VALUES(?, ?)");
        $insertuser->execute(array($email, $password));
        $id = $this->pdo->lastinsertId();
        return $id;
    }

    public function login($email, $password)
    {
        $sql = "SELECT email, password FROM users WHERE email = '$email' AND password = '$password' ";
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $result = $req->fetch();
        return $result;
    } 


    public function recupid($email)
    {
        $sql = "SELECT id FROM users WHERE email = '$email'";
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $result = $req->fetch();
        return $result;
    } 

    public function update($email, $id)
    {
        $sql = "UPDATE users SET email = " . $email . " WHERE id = " . $id . "'";
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $result = $req->fetch();
        return $result;
    } 

    // public function delete($email)
    // {
        
    //       $mailconnect = htmlspecialchars($email);
          
    //           $requser = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
    //           $requser->execute(array( $mailconnect, $passwordconnect));
    //           $userexist = $requser->rowCount();

    //           if($userexist == 1)
    //           {
    //               $Userinfo = $requser->fetch();
    //               $_SESSION['id_person'] = $Userinfo['id_person'];
    //               $_SESSION['email'] = $Userinfo['email']; 
                    
              
    //        }

	
    // } 
}
