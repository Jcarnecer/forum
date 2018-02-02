<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaction_Model extends BaseModel {

	public $belongs_to = [
		'user' => ['model' => 'User_Model', 'primary_key' => 'user_id'],
		'reply' => ['model' => 'Reply_Model', 'primary_key' => 'reply_id']
	];

	public $before_create = ['created_at', 'updated_at'];
	public $before_update =['updated_at'];

	public $_table = "forum_reactions";

	public function __construct() {
		parent::__construct();
	}
}
