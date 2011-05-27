<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------
 
/**
 * Revisions Hotfix Accessory
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Accessory
 * @author		Blis Web Agency
 * @link		http://blis.net.au
 */
 
class Revisions_hotfix_acc {
	
	public $name			= 'Revisions Hotfix';
	public $id				= 'revisions_hotfix';
	public $version			= '1.0';
	public $description		= 'Automatically checks the enable revisions box';
	public $sections		= array();
	
	/**
	 * Set Sections
	 */
	public function set_sections()
	{
		$this->EE =& get_instance();
		
		if(	$this->EE->input->get('D') == "cp" && 	$this->EE->input->get('C') == "content_publish" &&	$this->EE->input->get('M') == "entry_form"){
		$this->EE->cp->load_package_js('enable_versioning');
		}
		
		#$this->sections['Revisions'] = $EE->load->view('accessory_revisions', '', TRUE);
		
	}
	
	// ----------------------------------------------------------------
	
}
 
/* End of file acc.revisions_hotfix.php */
/* Location: /system/expressionengine/third_party/revisions_hotfix/acc.revisions_hotfix.php */