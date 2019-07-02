<?php
class Chart_model extends CI_Model{

  //get data from database
  function get_data(){
	$this->db->select('project_ref, grant_amount, duration, status');
	$result = $this->db->get('projects_table');
	return $result;
    }
}