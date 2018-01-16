<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Model extends BaseModel {

	public $belongs_to = ['user'];
	public $has_many = ['comment'];

	public $_table = "forum_posts";

	public function __construct() {
		parent::__construct();
	}
}
