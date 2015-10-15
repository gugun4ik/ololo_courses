<?php

class Model_Logout extends Model
{
    public function logout()
    {
        if ($_SESSION['user'] == true) {
            unset($_SESSION['user']);
            unset($_SESSION['userName']);
            header('location:/');
	} 
    }
}

