<?php

class Controller_Services extends Controller
{
    function __construct()
    {
        $this->model = new Model_Services();
        parent::__construct();
    }
    
    function action_index()
    {
        $data = $this->model->getData();
        $this->view->generate('services_view.php', $data);
    }
}
