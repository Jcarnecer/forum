<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		return parent::main_page("post/index");
	}

	public function create() {
		$post_details = [
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'user_id' => parent::current_user()->id,
			'company_id' => parent::current_user()->company_id
		];
		$this->post->insert($post_details);
		// echo("Successfully created");
		return redirect("post");
	}

	public function delete() {
		$this->post->delete($this->input->post('id'));
		// echo("Successfully deleted!");
		return redirect("post");
	}

	public function get_company_posts()
	{
		$data = [];
		if (parent::can_user("USER_LIST")) {
			$current_user = parent::current_user();
			foreach ($this->post->get_many_by(["company_id" => $current_user->company_id]) as $post) {
				$post["author"] = $current_user->first_name . ' ' . $current_user->last_name;
				unset($post["user_id"]);
				unset($post["deleted"]);
				$data[] = $post;
			}
		} else {
			$data["error"] = [
				"message" => "Requires authentication"
			];
		}
		return $this->output->set_output(json_encode(['data' => $data]));
	}
}
