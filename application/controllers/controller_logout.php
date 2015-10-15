<?php

class Controller_Logout extends Controller
{
    public function __construct() 
    {
        $this->model = new Model_Logout();
        parent::__construct();
    }
    
    public function action_index()
    {
        $data = $this->model->logout();
        $this->view->generate('main_view.php');
    }
}