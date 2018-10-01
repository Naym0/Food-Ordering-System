<?php
class Insertdata extends CI_Model 
{
	function saverecords($data)
	{
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
	$query="insert into users values('$i','$n','$e','$g','$p','$t','$s')";
	$this->db->query($query);

	echo "Records Inserted Successfully!";
	}
}