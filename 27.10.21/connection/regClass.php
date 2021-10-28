<?php

class Registration
{
    public $login;
    public $password;
    public $passwordtwo;
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($login, $password, $passwordtwo, $firstName, $lastName, $age)
    {
        $this->login = $login;
        $this->password = $password;
        $this->passwordtwo = $passwordtwo;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function reg()
    {
        if ($this->password === $this->passwordtwo) {

            $this->password = md5($this->password);
            $hostname = "localhost";
            $user = "Kirill";
            $password = "6168";
            $dbname = "user";
            $connect = new mysqli($hostname, $user, $password, $dbname);
            mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`,`firstName`,`lastName`,`age`) VALUES (NULL, '$this->login', '$this->password', '$this->firstName', '$this->lastName', '$this->age')");
            $_SESSION['warning'] = 'Вы успешно зарегистрировались!';
            header('Location: ../auth2.0.php');
        } else {
            $_SESSION['warning'] = 'Пароли не совпадают';
            header('Location: ../reg.php');
        }
    }

}