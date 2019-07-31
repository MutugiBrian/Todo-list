<?php
    class queries extends CI_Model{
        /*public function __construct() {
            parent::__construct();
        }*/

        public function getUsers(){
            $query = $this->db->get('users');
            if ($query->num_rows() > 0 ){
                return $query->result();
            }
        }

        public function addUsers($data){
            return $this->db->insert('users', $data);
        }

        public function getSingleUser($email){
            $query = $this->db->get_where('users', array('email' => $email));
            if ($query->num_rows() > 0 ){
                return $query->row();
            }
        }

        public function updateUser($data, $email){
            return $this->db->where('users', $email)->update('users', $data);
        }

        public function deleteUser($email){
            return $this->db->delete('users', ['email'=>$email]);
        }

        public function get_total()
        {
            return $this->db->count_all("users");
        }
        
        public function get_current_page_records($limit, $start)
            {
                $this->db->limit($limit, $start);
                $query = $this->db->get("users");
            
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
		    $this->db->select('email,type,id,rating');
		    $result = $this->db->get('users');
		    return $result;
            }
    }
?>