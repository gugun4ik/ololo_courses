<?php

class Controller_Login extends Controller
{
    public $link;
    
    public function __construct() 
    {
        $this->model = new Model_Login();
        parent::__construct();
    }
    
    public function action_index()
    {
        if (!isset($_SESSION['user'])) {
            if ((isset($_POST['username'])) && (isset($_POST['password']))) {
                
                $data = $this->model->autoriz($_POST['username'], $_POST['password']);
                $this->view->generate('admin_view.php', $data);
            }
             $this->view->generate('login_view.php');
        } else {
            header('location:/admin');
        }
    }
}