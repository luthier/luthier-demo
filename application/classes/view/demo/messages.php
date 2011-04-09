<?php defined('SYSPATH') or die('No direct script access.');

/**
 * View for demonstrating flash/session user messages
 */
class View_Demo_Messages extends Luthier_Layout {

	protected $_template = 'demo/messages';

	protected $_sub_layout = 'narrow';

	public $header = 'Flash Messages';

	/**
	 * Add section navigation for the different message types
	 */
	public function __construct($template = NULL, array $partials = NULL)
	{
		parent::__construct($template, $partials);
		$this->_add_section_nav('Info Message', 'admin/demo/messages/info', 'Messages');
		$this->_add_section_nav('Error Message', 'admin/demo/messages/error', 'Messages');
	}

}
