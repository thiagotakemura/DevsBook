<?php
namespace src\Handlers;

use \src\models\User;

class LoginHandler {

    public static function checkLogin(){
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $tojen)->one();
            if(count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->Email = $data['email'];
                $loggedUser->Name = $data['name'];

                return $loggedUser;
            }
        }

        return false;
    }
}