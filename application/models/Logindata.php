<?php
class Logindata extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    function checklogin($u,$p)
    {
        $this->load->database();
        //$u=$this->input->post("userId");
		//$p=$this->input->post("password");

        $this->db->where('ID', $u);
        $this->db->where('Password', $p);
        
        //run query
        $query = $this->db->get('users');

        //Select * from users where ID = '$u' and Password = '$p';

        if ($query->num_rows() == 1)
        {
            // $session_data = array(
            //     'userid' => $this->input->post("userId"),
            //     'is_logged_in' => true
            // );

            // $this->session->set_userdata($session_data);
            // echo "Successful login";
            return true;
        }
        else
        {
            return false;
            // echo "No such user";
        }
    }
}