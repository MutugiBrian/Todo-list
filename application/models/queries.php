<?php
    class queries extends CI_Model{
        /*public function __construct() {
            parent::__construct();
        }*/

        public function getProjects(){
            $query = $this->db->get('projects_table');
            if ($query->num_rows() > 0 ){
                return $query->result();
            }
        }

        public function addPost($data){
            return $this->db->insert('projects_table', $data);
        }

        public function getSingleProjects($project_id){
            $query = $this->db->get_where('projects_table', array('project_id' => $project_id));
            if ($query->num_rows() > 0 ){
                return $query->row();
            }
        }

        public function updatePost($data, $project_id){
            return $this->db->where('project_id', $project_id)->update('projects_table', $data);
        }

        public function deleteProjects($project_id){
            return $this->db->delete('projects_table', ['project_id'=>$project_id]);
        }

        public function get_total()
        {
            return $this->db->count_all("projects_table");
        }
        
        public function get_current_page_records($limit, $start)
            {
                $this->db->limit($limit, $start);
                $query = $this->db->get("projects_table");
            
                if ($query->num_rows() > 0)
                {
                    foreach ($query->result() as $row)
                    {
                        $data[] = $row;
                    }
                    
                    return $data;
                }
            
                return false;
            }

            //chart data
	    public function get_data(){
		    $this->db->select('project_ref,grant_amount,duration,status');
		    $result = $this->db->get('projects_table');
		    return $result;
            }
    }
?>