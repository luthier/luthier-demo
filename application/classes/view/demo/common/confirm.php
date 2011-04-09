<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Demonstrate the confirm common view
 */
class View_Demo_Common_Confirm extends View_Luthier_Confirm {

	protected $_sub_layout = 'narrow';

	public $header = 'Demo Confirmation Page';

	public $note = "This action cannot be undone.";

	/**
	 * Add section navigation for the different common views
	 */
	public function __construct($template = NULL, array $partials = NULL)
	{
		parent::__construct($template, $partials);
		$this->_add_section_nav('Table', 'admin/demo/views/table', 'Views');
		$this->_add_section_nav('Form', 'admin/demo/views/form', 'Views');
		$this->_add_section_nav('Confirm', 'admin/demo/views/confirm', 'Views');
	}

}
