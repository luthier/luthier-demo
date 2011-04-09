<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Base class for demo layout views.
 */
abstract class View_Demo_Layout_Base extends Luthier_Layout {

	protected $_template = 'demo/lorem';

	public $header = 'Sub-Layouts';

	/**
	 * Add section navigation for the different sub-layout types
	 */
	public function __construct($template = NULL, array $partials = NULL)
	{
		parent::__construct($template, $partials);
		$this->_add_section_nav('Narrow', 'admin/demo/layouts/narrow', 'Layouts');
		$this->_add_section_nav('Wide', 'admin/demo/layouts/wide', 'Layouts');
		$this->_add_section_nav('Full', 'admin/demo/layouts/full', 'Layouts');
	}

}
