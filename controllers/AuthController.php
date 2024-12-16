<?php
require 'Controller.php';
require 'models/User.php';

class AuthController extends Controller
{
    public static function login()
    {
        if (count($_POST) > 0) {

            $username = $_POST["username"];
            $password = $_POST["password"];


            if (empty($username) || empty($password)) {
                $_SESSION['error'] = "All fields me be filled!";
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('Location: /login');
                return;
            }

           User::auth($username,$password);
        
        }

        return self::view("views/login.php");
    }

    public static function register()
    {
        if (count($_POST) > 0) {

            $username = htmlspecialchars($_POST["username"]);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $encryptedPassword = sha1($password);

            if ($username == '' || $password == '') {
                $_SESSION['error'] = "All fields me be filled!";
                $_SESSION['username'] = $username;
                header('location: /register');
                exit();
            }

            // $user = new User($username, $password, 1);
            // $user->registerUser();  
        }
        return self::view("views/register.php");
    }
}

if ($uri == '/login') {
    return AuthController::login();
} 
    
AuthController::register();


