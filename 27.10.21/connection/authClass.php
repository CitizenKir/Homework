<?php
class Auth {
    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = md5($password);
    }

    public function connect() {

        $hostname = "localhost";
        $user = "Kirill";
        $password = "6168";
        $dbname = "user";
        $connect = new mysqli($hostname, $user, $password, $dbname);
        $check =mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$this->login' AND `password` = '$this->password'");
        if(mysqli_num_rows($check) > 0){
            $_SESSION['login'] = $this->login;
            header('Location: ../index.php');
        }
        else{
            $_SESSION['warning'] = 'Не верный логин или пароль';
            header('Location: ../auth2.0.php');
        }



    }

}
