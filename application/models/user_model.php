<?php  
	/**
	 * 
	 */
	class User_model extends CI_Model
	{
		
		public function get_users(){
			$sql = "SELECT * FROM users";
			$query = $this->db->query($sql);
			return $query->num_fields(); //This will give me the columns

			// return $query->num_rows(); This will give me the rows

			// $query = $this->db->get('users');
			// return $query->result();

			// $config['hostname'] = 'localhost';
			// $config['username'] = 'root';
			// $config['password'] = 'Isaamille2017';
			// $config['database'] = 'errand_db';

			// $connection = $this->load->database();

		}
	}


?>