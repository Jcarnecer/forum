<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}


	public function main_page(
		$view, 
		$data = [], 
		$title = "PayakApps"
	) {
		$user = $this->current_user();
		$sidebar['user'] = $user;
		$sidebar['project'] = $data['project'];
		foreach ($this->member->with('project')->get_many_by(["user_id" => $user->id]) as $project) {
			unset($project['project']['admin']);
			unset($project['project']['company_id']);
			$sidebar['projects'][] = $project['project'];
		}
		$this->load->view("partials/header", ["title" => $title]);
		$this->load->view("partials/sidebar", $sidebar);
		$this->load->view($view, $data);
		$this->load->view("partials/footer");
	}


	public function login_page() 
	{
		$this->load->view("partials/header");
		$this->load->view("users/login");
		$this->load->view("partials/footer");
	}


	public function guest_page(
		$view, 
		$data = [], 
		$title = "PayakApps"
	) {
		$this->load->view("partials/header", ["title" => $title]);
		$this->load->view($view, $data);
		$this->load->view("partials/footer");
	}


	public function current_user()
	{
		$user = $this->session->userdata("user");
		if ($user) {
			$user->permissions = [];
			foreach ($this->role_permission->get_many_by("role_id", $user->role) as $permission) {
				$user->permissions[] = $permission["permission_id"];
			}
		}
		return $user;
	}


	public function can_user($permission)
	{
		$current_user = $this->current_user();
		return $current_user and in_array($permission, $current_user->permissions);
	}
}
