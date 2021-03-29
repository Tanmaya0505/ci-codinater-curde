<?php
class RegistationModel extends CI_Model 
{
	public function __construct() {
        parent::__construct();
		$this->load->database();
    }
	function IsSaved($data)
	{
          if ($this->db->insert('formregistration', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
	}
	
}