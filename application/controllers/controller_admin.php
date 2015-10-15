<?php

class Controller_Admin extends Controller
{
    public $link;
    
    public function __construct() 
    {
        $this->model = new Model_Admin();
        parent::__construct();
    }
    
    public function action_index()
    {
        if (!isset($_SESSION['user'])) {
            $this->view->generate('login_view.php');
        } else {
            if (empty($_GET)) {
                $data = 'Добро пожаловать '.$_SESSION['userName'];
                $this->view->generate('admin_view.php', $data, 'adminTemplateView.php');
            } else {
                $mykey = key($_GET);
                $fulUrl = explode('/', $mykey);
                if (empty($fulUrl[1])) {
                    var_dump($fulUrl[0]);
                    $data = $this->model->getContentOne($fulUrl[0]);
                    $this->view->generate('listResultAdmin_view.php', $data, 'adminTemplateView.php');
                } else {
                    if (!empty($_POST)){
                        var_dump($_POST);
                        var_dump($fulUrl[0]);
//                        $data = $this->model->updateContent();
//                        $this->view->generate('admin_view.php', $data, 'adminTemplateView.php');
                   } else {
                        var_dump($fulUrl[1]);
                        $data = $this->model->getContent($fulUrl[0], $fulUrl[1]);
                        $this->view->generate('editAdmin_view.php', $data, 'adminTemplateView.php');
                   }
                }   
            }
        }
    }
    
    public static function menu()
    {
        $test = 'privet';
        echo $test;
    }
}