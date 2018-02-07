<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForumController extends BaseController
{

	public function __construct() {

		parent::__construct();
	}


	public function project($id) {

		foreach ($this->thread->with('reply')->get_many_by(["project_id" => $id]) as $thread) {
			
			unset($thread['project_id']);
			unset($thread['deleted']);
			$data['threads'][]=$thread;
		}
		$project = $this->project->get($id);
		$this->session->set_userdata(['project' => $project]);

		return parent::main_page("post/index", $data ?? null);
	}
    

    public function view($id=null) {
    	
    	if($id==null)
    		return parent::main_page("post/index");

        $data['thread'] = $this->thread->with('user')->with('reply')->get($id);
        $data['thread']['author'] = $data['thread']['user']['first_name'] . " " . $data['thread']['user']['last_name'];
        $data['thread']['avatar_url'] = $data['thread']['user']['avatar_url'];
        unset($data['thread']['user_id']);
		unset($data['thread']['deleted']);
		unset($data['thread']['project_id']);
        unset($data['thread']['user']);
        
        foreach ($data['thread']['reply'] as $key => $comment) {
        
        	$author = $this->user->get($comment['user_id']);
        	$comment['author'] = $author['first_name'] . " " . $author['last_name'];
        	unset($comment['user_id']);
        	unset($comment['deleted']);
        	unset($comment['thread_id']);
        	$data['thread']['reply'][$key] = $comment;
        }

        return parent::main_page("post/view", $data);
	}

	public function create_page($id) {
		
		$data['project_id'] = $id;

		return parent::main_page("post/create", $data);
	}

	public function create($id) {
		
		$data = [
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'user_id' => parent::current_user()->id,
			'project_id' => $id
		];
		$ref = $this->thread->insert($data);
		
		parent::log_activity(parent::current_user()->id, 'created a new thread', $ref, $this->thread->get($ref)['created_at']);
		
		return redirect("post/view/" . $ref);
	}

	public function delete() {

		$this->thread->delete($this->input->post('id'));

		return redirect("post");
	}

	public function create_reply($id) {

		$data = [
			'body' => $this->input->post('body'),
			'user_id' => parent::current_user()->id,
			'thread_id' => $id
		];
		
		$ref = $this->reply->insert($data);

		parent::log_activity(parent::current_user()->id, 'replied to a thread', $ref, $this->reply->get($ref)['created_at']);
		
		return redirect("post/view/$id");
	}

	public function get_company_posts()	{
		
		$data = [];
		$current_user = parent::current_user();

		foreach ($this->thread->get_many_by(["company_id" => $current_user->company_id]) as $post) {
		
			$post["author"] = $current_user->first_name . ' ' . $current_user->last_name;
			unset($post["user_id"]);
			unset($post["deleted"]);
			$data[] = $post;
		}
		
		return $this->output->set_output(json_encode(['data' => $data]));
	}
}
