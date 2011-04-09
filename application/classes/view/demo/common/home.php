<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Home view for demonstrating common views
 */
class View_Demo_Common_Home extends Luthier_Layout {

	protected $_template = 'demo/views';

	protected $_sub_layout = 'narrow';

	public $header = 'Common Views';

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
