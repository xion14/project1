<?php
class MY_Controller extends CI_Controller {
	
	public $data = array();
	function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['messages'] = array();
		$this->data['site_name'] = ''.config_item('site_name').' | '.config_item('site_desc').'';
		$this->data['site_desc'] = ''.config_item('site_desc').'';
	}

	public function _unlink_file($files){
		foreach ($files as $file) {
			unlink($file);
		}
	}

}