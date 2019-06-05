<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class ChartController extends CI_Controller {
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    } 
  
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function projectChart()
    {
        $query = $this->db->query("SELECT SUM(grant_amount) as count FROM projects_table 
            GROUP BY YEAR(end_date) ORDER BY end_date"); 
        $data['grant'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT SUM(first_disbursement) as count FROM projects_table 
            GROUP BY YEAR(dates_from_gcf) ORDER BY dates_from_gcf"); 
        $data['disbursement'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('my_chart', $data);
    }
}