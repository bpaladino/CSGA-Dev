<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		
 * @link	
 * @since		Version 2.0
 * @filesource
 */

// --------------------------------------------------------------------

/**
 * ExpressionEngine File Module
 *
 * @package		ExpressionEngine
 * @subpackage	Modules
 * @category	Modules
 * @author		EllisLab Dev Team
 * @link	
 */

class File_mcp {

	var $stats_cache	= array(); // Used by mod.stats.php

	/**
	  * Constructor
	  */
	public function __construct()
	{
		// Make a local reference to the ExpressionEngine super object
		$this->EE =& get_instance();
	}
}
// END CLASS

/* End of file mcp.file.php */
/* Location: ./system/expressionengine/modules/channel/mcp.file.php */