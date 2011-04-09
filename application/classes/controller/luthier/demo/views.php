<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Luthier_Demo_Views extends Controller {

	public function action_index()
	{
		$this->response->body(new View_Demo_Common_Home);
	}

	public function action_table()
	{
		$this->response->body(new View_Demo_Common_Table);
	}

	public function action_form()
	{
		$this->response->body(new View_Demo_Common_Form);
	}

	public function action_confirm()
	{
		$this->response->body(new View_Demo_Common_Confirm);
	}

}
