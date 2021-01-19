<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "<pre>";
		print_r("hello");
	}

	public function login()
	{
		$userData = $this->session->userdata('user_data');
		if (!empty($userData)) {
			return redirect(base_url());
		}
		// echo password_hash('admin', PASSWORD_DEFAULT);
		$this->load->view('auth/login');
	}

	public function execLogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users', ['email' => $email])->row();

			if (!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}


			if (!password_verify($password, $user->password)) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

			$data = array(
				'user_id' => $user->user_id,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'email' => $user->email,
			);


			$this->session->set_userdata('user_data', $data);

			redirect(base_url()); // redirect to home
			exit;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect(base_url('auth/login'));
	}
}
