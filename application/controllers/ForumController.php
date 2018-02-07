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
        	
        	$comment['likes'] = $this->reaction->count_by(['reply_id' => $comment['id'], 'like' => 1]);
        	$comment['dislikes'] = $this->reaction->count_by(['reply_id' => $comment['id'], 'like' => 2]);
        	$comment['react'] = $this->reaction->get_by(['reply_id' => $comment['id'], 'user_id' => parent::current_user()->id])['like'];
        	// return print_r($comment);
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
			'title' => strip_tags($this->input->post('title')),
			'body' => strip_tags($this->input->post('body')),
			'user_id' => parent::current_user()->id,
			'project_id' => $id
		];
		$id = $this->thread->insert($data);

		return redirect("post/view/" . $id);
	}

	public function delete() {

		$this->thread->delete($this->input->post('id'));

		return redirect("post");
	}

	public function create_reply($id) {

		$data = [
			'body' => strip_tags($this->input->post('body')),
			'user_id' => parent::current_user()->id,
			'thread_id' => $id
		];
		$this->reply->insert($data);

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


	public function react(){

		$reply_id = $this->input->post('reply_id');
		$like = $this->input->post('like');
		$user_id = parent::current_user()->id;
		$check = $this->reaction->get_by(['reply_id' => $reply_id, 'user_id' => $user_id]);

		if(isset($check)) {
			if($check['like'] == $like)
				$data['status'] = $this->reaction->delete($check['id']);
			else
				$data['status'] = $this->reaction->update($check['id'], ['like' => $like]);
		} else {

			$data = [
				'reply_id'	=> $reply_id,
				'user_id'	=> $user_id,
				'like'		=> $like
			];
			$data['status'] = $this->reaction->insert($data);
		}

		$data['like_count'] 	= count($this->reaction->get_many_by(['reply_id' => $reply_id, 'like' => 1]));
		$data['dislike_count'] 	= count($this->reaction->get_many_by(['reply_id' => $reply_id, 'like' => 2]));

		echo json_encode($data);
	}
}
