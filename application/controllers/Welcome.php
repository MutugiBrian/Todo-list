<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->helper('url');
		$this->load->model('queries');

    }
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
		$projects = $this->queries->getUsers();
		$this->load->view('users', ['projects'=>$projects]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($email){
		$this->load->model('queries');
		$project = $this->queries->getSingleUser($email);
		$this->load->view('update', ['project'=>$project]);
	}

	public function save(){
		$this->form_validation->set_rules('type', 'User Type', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		//$this->form_validation->set_rules('skills', 'Skills', 'required');
		$this->form_validation->set_rules('image', 'Profile Image', 'required');
		$this->form_validation->set_rules('password', 'User Password', 'required');
		$this->form_validation->set_rules('reg_lat', 'Registration Location', 'required');
		$this->form_validation->set_rules('reg_long', 'Registration Location', 'required');
		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addUsers($data)){
				$this->session->set_flashdata('msg', 'User Registered Successfully');
				$rep = ['msg','Registered User Successfully'];
				$rep = array_values($rep);
                $rep = json_encode($rep);
				return $rep;
			}
			else{
				$this->session->set_flashdata('msg', 'Failed to Registered User');
				$rep = ['msg','Failed to Registered User'];
				$rep = array_values($rep);
                 $rep = json_encode($rep);
				$this->load->view('view', ['data'=>$rep]);
			}
			///return redirect('welcome');
		}
		else
		{
			    $rep ='Fill in all details';
				//$rep = array_values($rep);
               //  $rep = json_encode($rep);
               /*  return $rep;*/
				$this->load->view('data', ['status'=>'error','data'=>$rep,'form'=>$data = $this->input->post()]);
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

	public function view($email){
		$this->load->model('queries');
		$user = $this->queries->getSingleUser($email);
		$this->load->view('view', ['user'=>$user]);
	}

	public function login($email,$pass){
		$this->load->model('queries');
		$user = $this->queries->getSingleUserLogin($email,$pass);
		$this->load->view('data', ['user'=>$user]);
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

	public function chart(){
		//$data['title'] = 'Funding Trends';
		$this->load->model('queries');
		$data = $this->queries->get_data()->result();
		$data['charts'] = json_encode($data);
		$this->load->view('charts', $data);
	  }
}