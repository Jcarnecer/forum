<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_Model extends BaseModel {

	public $_table = "forum_comments";

	public function __construct() {
		parent::__construct();
	}
}
