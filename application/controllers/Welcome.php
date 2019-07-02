<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 **/
	public function index()
	{
		$this->load->model('queries');
		$projects = $this->queries->getProjects();
		$this->load->view('welcome_message', ['projects'=>$projects]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($project_id){
		$this->load->model('queries');
		$project = $this->queries->getSingleProjects($project_id);
		$this->load->view('update', ['project'=>$project]);
	}

	public function save(){
		$this->form_validation->set_rules('project_id', 'Project ID', 'required');
		$this->form_validation->set_rules('project_ref', 'Project Ref', 'required');
		$this->form_validation->set_rules('country_id', 'Country ID', 'required');
		$this->form_validation->set_rules('grant_amount', 'Grant Amount', 'required');
		$this->form_validation->set_rules('dates_from_gcf', 'Dates from GCF', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		$this->form_validation->set_rules('duration', 'Duration', 'required');
		$this->form_validation->set_rules('readiness_type', 'Readiness Type', 'required');
		$this->form_validation->set_rules('first_disbursment', 'First Disbursment Amount', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addPost($data)){
				$this->session->set_flashdata('msg', 'Project Saved Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Failed to Save Project');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($project_id){
		echo $project_id;
		$this->form_validation->set_rules('project_id', 'Project ID', 'required');
		$this->form_validation->set_rules('project_ref', 'Project Ref', 'required');
		$this->form_validation->set_rules('country_id', 'Country ID', 'required');
		$this->form_validation->set_rules('grant_amount', 'Grant Amount', 'required');
		$this->form_validation->set_rules('dates_from_gcf', 'Dates from GCF', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		$this->form_validation->set_rules('duration', 'Duration', 'required');
		$this->form_validation->set_rules('readiness_type', 'Readiness Type', 'required');
		$this->form_validation->set_rules('first_disbursment', 'First Disbursment Amount', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updatePost($data, $project_id)){
				$this->session->set_flashdata('msg', 'Project Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Failed to Update Project');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function view($project_id){
		$this->load->model('queries');
		$project = $this->queries->getSingleProjects($project_id);
		$this->load->view('view', ['project'=>$project]);
	}

	/*public function api(){
		$sql = $this->db->query("SELECT * FROM projects_table")->result();
		echo json_encode($sql);
	}*/

	public function delete($project_id){
		$this->load->model('queries');
		if($this->queries->deleteProjects($project_id)){
			$this->session->set_flashdata('msg', 'Project Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to Delete Project');
		}
		return redirect('welcome');
	}		

	/* public function chart(){
		$this->load->model('queries');
		$data = $this->queries->get_data()->result();
		$x['data'] = json_encode($data);
		$this->load->view('charts',$x);
	  }*/
}