<?php
class Chart extends CI_Controller{
    function __construct(){
      parent::__construct();
      //load chart_model from model
      $this->load->model('chart_model');
    }

    function chart(){
      $data = $this->chart_model->get_data()->result();
      $x['data'] = json_encode($data);
      $this->load->view('charts',$x);
    }
}