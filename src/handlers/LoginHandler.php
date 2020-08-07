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

    public static function verifyLogin($email, $password) {
        $user = User::select()->where('email', $email)->one();

        if($user) {
            if(\password_verify($password, $user['password'])) {
                $token = md5(time().rand(0,9999).time());

                User::update()->set('token')->where('id', $user['id'])->execute();
                return $token;
            }
        }

        return false;
    }
}