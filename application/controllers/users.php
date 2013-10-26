<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
	}

	public function signin(){
		$this->load->view('signin');
	}

	public function signup(){
		$this->load->view('signup');
	}

	public function register(){
		$name = $this->input->post('name');
		$username = $this->input->post('username');

		$user = array(
			'name' => $name,
			'username' => $username,
			'password' => md5($this->input->post('password'))
			);

		if($this->blog_model->insert('users', $user)){
			$session = array(
				'name' => $name,
				'username' => $username,
				'is_logged_in' => TRUE,				
				);
			$this->session->set_userdata($session);

			redirect(base_url());
		}

	}

	public function validate(){		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if($user = $this->blog_model->validate_credentials($username, $password)){
			$session = array(
				'name' => $user->name,
				'username' => $username,
				'is_logged_in' => TRUE,				
				);
			$this->session->set_userdata($session);

			redirect(base_url());
		}
		else{
			$this->load->view('signin', array('error'=>TRUE));
		}

	}

	public function logout(){
		if($this->session->userdata('is_logged_in'))
			$this->session->sess_destroy();		
		redirect(base_url());			
	}

}