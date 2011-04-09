<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Demonstrate the table common view
 */
class View_Demo_Common_Table extends View_Luthier_Table {

	protected $_sub_layout = "wide";

	public $header = "Demo Table";

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

	public function columns()
	{
		return array(
			array('title' => 'ID', 'col_class' => 'selected'),
			array('title' => 'Name'),
		);
	}

	public function rows()
	{
		return array(
			array(
				'cells' => array(
					array('contents' => '1'),
					array('contents' => 'Alice'),
				),
			),
			array(
				'row_class' => 'selected',
				'cells' => array(
					array('contents' => '2', 'cell_class' => 'selected'),
					array('contents' => 'Bob'),
				),
			),
		);
	}

}
