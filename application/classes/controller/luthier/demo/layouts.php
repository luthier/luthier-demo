<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Luthier_Demo_Layouts extends Controller {

	public function action_index()
	{
		$this->request->redirect('admin/demo/layouts/narrow');
	}

	public function action_narrow()
	{
		$this->response->body(new View_Demo_Layout_Narrow);
	}

	public function action_wide()
	{
		$this->response->body(new View_Demo_Layout_Wide);
	}

	public function action_full()
	{
		$this->response->body(new View_Demo_Layout_Full);
	}

}
