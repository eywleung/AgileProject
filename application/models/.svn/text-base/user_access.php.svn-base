<?php

class User_access extends CI_Model {

	var $computing_id = '';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();

        $this->load->library('cas');
		$this->cas->force_auth();
    	$user = $this->cas->user();
    	$this->computing_id = $user->userlogin;
    }

    function canAccess(){

		$query = $this->db->get_where('users',array('computing_id' => $this->computing_id), 1);
		$rowcount =  $query->num_rows();
		if( $rowcount > 0 ){
			return TRUE;
		}
		else {
			return FALSE;
		}
    }

}