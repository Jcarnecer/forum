<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		foreach ($this->post->with('user')->get_many_by(["company_id" => parent::current_user()->company_id]) as $post) {
			$post["author"] = $post["user"]["first_name"] . ' ' . $post["user"]["last_name"];
			unset($post["user_id"]);
			unset($post["deleted"]);
			unset($post["company_id"]);
			unset($post["user"]);
			$data['posts'][] = $post;
		}
		if (parent::current_user()) {
			parent::main_page("dashboard");
			redirect('post');
		} else {
			if (ENVIRONMENT === "production")
				redirect('http://payakapps.com');
			else
				redirect('http://localhost/main');
		}
	}
}
