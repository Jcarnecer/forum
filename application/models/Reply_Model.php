<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reply_Model extends BaseModel {

	public $_table = "forum_replies";

	public $before_create = ['created_at', 'updated_at'];
	public $before_update =['updated_at'];
	
	protected $soft_delete = TRUE;

	public function __construct() {
		parent::__construct();
	}
}
