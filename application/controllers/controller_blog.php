<?php

class Controller_Blog extends Controller
{
    
    public function __construct() 
    {
        $this->model = new Model_Blog();
        parent::__construct();
    }
        
    public function action_index()
    {
        if (empty($_GET)) {
            $data = $this->model->getPosts();
            $this->view->generate('blog_view.php', $data);
        } else {
            $mykey = key($_GET);
            $data = $this->model->getContentOneNews($mykey);
            $this->view->generate('single_view.php', $data);
        }
        
    }

}