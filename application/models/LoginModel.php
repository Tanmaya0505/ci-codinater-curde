<?php
class LoginModel extends CI_Model{
	public function __construct() {
        parent::__construct();
		$this->load->database();
    }
		// Read data using username and password
		public function Login($data) {
			$md_password = md5($data['password']);
			$email = $data['email'];
			//$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('formregistration');
			$this->db->where("(email = '$email')");
			//$this->db->where('username', $data['username'] OR 'email' = $data['username']);
			$this->db->where('password', $md_password);
			//$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->result();
			} else {
			return false;
			}
		}


		function display_record(){
			$query=$this->db->query("select * from formregistration order by date(dob) desc");
			return $query->result();
		}

		function edite_record($id){
			$query=$this->db->query("select * from formregistration where id='".$id."'");
			return $query->row();
		}
		function deleterecords($id){
			$query=$this->db->query("delete from formregistration where id='".$id."'");
			//$this->db->delete('formregistration', array('id' => $id)); 
		}

}