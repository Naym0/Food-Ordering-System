<?php  
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('user/view');
			$this->load->view('templates/footer');
			//Communicates with the user model
			//Manual Loading the model
			// $this->load->model('user_model');

			// $data['results'] = $this->user_model->get_users();

			
			// $this->load->view('user_view',$data);

			// foreach ($result as $object) {
			// 	echo $object->id;
			// 	echo " ";
			// 	echo $object->username;
			// 	echo " ";
			// 	echo $object->password;
			// }
		}
	}
	

?>