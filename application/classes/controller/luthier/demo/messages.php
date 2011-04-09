<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Luthier_Demo_Messages extends Controller {

	public function action_index()
	{
		$this->response->body(new View_Demo_Messages);
	}

	public function action_error()
	{
		Luthier::message('This is a demo error message', Luthier::ERROR);
		$this->request->redirect('admin/demo/messages');
	}

	public function action_info()
	{
		Luthier::message('This is a demo info message', Luthier::INFO);
		$this->request->redirect('admin/demo/messages');
	}

}
