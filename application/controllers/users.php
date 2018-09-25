<?php  
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		public function show(){
			//Communicates with the user model
			//Manual Loading the model
			// $this->load->model('user_model');

			$data['results'] = $this->user_model->get_users();

			
			$this->load->view('user_view',$data);

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