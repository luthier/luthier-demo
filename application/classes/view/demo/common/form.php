<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Demonstrates the form common view
 */
class View_Demo_Common_Form extends View_Luthier_Form {

	protected $_sub_layout = 'narrow';

	public $header = 'Demo Form';

	public $submit = 'save';

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

	public function fields()
	{
		return array(
			array(
				'field' => 'id',
				'label' => 'ID',
				'input' => '<input name="id" type="text" value="12"/>',
			),
			array(
				'error' => 'Password must not be blank',
				'field' => 'name',
				'label' => 'Name',
				'input' => '<input name="name" type="text" />',
			),
		);
	}

}
