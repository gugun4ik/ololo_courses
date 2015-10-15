<?php

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		parent::__construct();
	}
	
	function action_index()
	{
            if (empty($_GET)) {
                $data = $this->model->get_data();		
                $this->view->generate('portfolio_view.php',$data);
            } else {
                $mykey = key($_GET);
                $data = $this->model->getContentOneNews($mykey);
                $this->view->generate('single_view.php', $data);
            }
	}
}
