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
		foreach ($this->post->with('user')->get_many_by(["company_id" => parent::current_user()->company_id]) as $post) {
			$post["author"] = $post["user"]["first_name"] . ' ' . $post["user"]["last_name"];
			unset($post["user_id"]);
			unset($post["deleted"]);
			unset($post["company_id"]);
			unset($post["user"]);
			$data['threads'][] = $post;
		}
		$data['project'] = "Project";
		return parent::main_page("post/index", $data);
	}
    
    public function view($post_id=null) {
    	if($post_id==null)
    		return parent::main_page("post/index");
        $data['thread'] = $this->post->with('user')->with('comment')->get($post_id);
        // print_r($data);
        $data['thread']['author'] = $data['thread']['user']['first_name'] . " " . $data['thread']['user']['last_name'];
        $data['thread']['avatar_url'] = $data['thread']['user']['avatar_url'];
        unset($data["user_id"]);
		unset($data["deleted"]);
		unset($data["company_id"]);
        unset($data['user']);

        foreach ($data['thread']['comment'] as $key => $comment) {
        	$author = $this->user->get($comment['user_id']);
        	$comment['author'] = $author['first_name'] . " " . $author['last_name'];
        	unset($comment['user_id']);
        	$data['thread']['comment'][$key] = $comment;
        }

        return parent::main_page("post/view", $data);
	}

	public function create_page() {

		return parent::main_page("post/create");
	}

	public function create() {
		$data = [
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'user_id' => parent::current_user()->id,
			'company_id' => parent::current_user()->company_id
		];
		$id = $this->post->insert($data);
		// echo("Successfully created");
		return redirect("post/view/" . $id);
	}

	public function delete() {
		$this->post->delete($this->input->post('id'));
		// echo("Successfully deleted!");
		return redirect("post");
	}

	public function create_reply($id) {
		$data = [
			'body' => $this->input->post('body'),
			'user_id' => parent::current_user()->id,
			'thread_id' => $id
		];
		$this->comment->insert($data);

		return redirect("post/view/$id");
	}

	public function get_company_posts()
	{
		$data = [];
		$current_user = parent::current_user();
		foreach ($this->post->get_many_by(["company_id" => $current_user->company_id]) as $post) {
			$post["author"] = $current_user->first_name . ' ' . $current_user->last_name;
			unset($post["user_id"]);
			unset($post["deleted"]);
			$data[] = $post;
		}
		return $this->output->set_output(json_encode(['data' => $data]));
	}
}
