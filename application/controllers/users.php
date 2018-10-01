<?php  

	class users extends CI_Controller
	{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('user/login');
			$this->load->view('templates/footer');
		}

		public function register(){
			$this->load->view('templates/header');
			$this->load->view('user/register');
			$this->load->view('templates/footer');
		}
	
		public function __construct()
		{
			//call CodeIgniter's default Constructor
			parent::__construct();
	
			//load database library manually
			$this->load->database();
	
			//load Model
			$this->load->model('Insertdata');
		}
 
		public function form_validation()
		{
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));


			$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]', array("required"=>"minimum length is 8 characters"));
			$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[pass]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('ID', 'School ID number', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				//$this->load->view('register');
				echo "error";
			}
				
			else
			{
				$this->load->model('Insertdata');
				$data = array (
					$i=$this->input->post('ID'),
					$n=$this->input->post('name'),
					$e=$this->input->post('email'),
					$g=$this->input->post('sex'),
					$uPass=$this->input->post('pass'),
					$t="User",
					$s="0",
					$p=password_hash($uPass, PASSWORD_BCRYPT)
				);

				$this->Insertdata->saverecords($data);	

			}
		}

		public function login()
		{
			$u=$this->input->post("userId");
			$p=$this->input->post("password");

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array ('ID' => $u));
			$query = $this->db->get();

			$user = $query ->row();
				if ($user)
				{
					if(password_verify($_POST['password'], $user->Password))
					{
						echo "Successful Login";
						$_SESSION['user_logged'] = TRUE;
						// $_SESSION['userID'] = $user->username;
						// redirect("user/regiter")
					}
					else
					{
						echo "Invalid Password";
					}

				}
				else {
					echo "Sorry. No login";
				}

		}

		public function logout()
		{
			unset($_SESSION);
		}

	}
?>