<?php

class Model_Login extends Model
{
    public function autoriz($login, $pass)
    {
        $errAutoriz = 'Не верные пара логин и пароль.';
        $trueAutoriz = 'Добро пожаловать';
        $login_1 = trim($login);
        $login_2 = stripslashes($login_1);
        $login_3 = strip_tags($login_2);
        $login_4 = htmlspecialchars($login_3);
        $loginFin = mb_strtolower($login_4, 'UTF-8');
        $heshPass=md5($pass);
        $dbLogin = $this->connect()->query("SELECT login, password FROM manager_user WHERE login='$loginFin' AND password='$heshPass'");
        $loginDB = mysqli_fetch_assoc($dbLogin);
        if ($loginDB != null)
        {
            $_SESSION['user'] = true;
            $_SESSION['userName'] = $loginDB['login'];
            header('location:/admin');
            return $trueAutoriz;
        } else {
            return $errAutoriz;
        }
        
    }
}

