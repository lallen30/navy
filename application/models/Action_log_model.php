<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Action_log_model extends MY_Model
{
    protected  $table= 'action_logs';
    protected  $primary_key = 'id';


    public function action_list(){

        $this->db->select(['action_logs.id as action_id','action_logs.what as what','action_logs.user_table_id as user_id','action_logs.timestamp as time','u.id as by_whom','u.first_name as username','vision_tests.id as vision_id','vision_consents.id as vision_consent_id','groups.name as group_name']);
        $this->db->from('action_logs');
        $this->db->join('users u' , 'u.id=action_logs.user_id', 'left');
        $this->db->join('users u1', 'u1.id=action_logs.user_table_id', 'left');
        $this->db->join('users_groups', 'u1.id=users_groups.user_id', 'left');
        $this->db->join('groups', 'groups.id=users_groups.group_id', 'left');



//        $this->db->join('users', 'action_logs.user_table_id=users.id as which_user', 'left');

        $this->db->join('vision_tests', 'action_logs.vision_test_id=vision_tests.id', 'left');
        $this->db->join('vision_consents', 'action_logs.vision_consent_id=vision_consents.id', 'left');
        $this->db->order_by('action_id','dsc');
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
    public function get_5_record(){

        $this->db->select(['action_logs.id as action_id','action_logs.what as what','action_logs.user_table_id as user_id','action_logs.timestamp as time','u.id as by_whom','u.first_name as username','vision_tests.id as vision_id','vision_consents.id as vision_consent_id','groups.name as group_name']);
        $this->db->from('action_logs');
        $this->db->join('users u' , 'u.id=action_logs.user_id', 'left');
        $this->db->join('users u1', 'u1.id=action_logs.user_table_id', 'left');
        $this->db->join('users_groups', 'u1.id=users_groups.user_id', 'left');
        $this->db->join('groups', 'groups.id=users_groups.group_id', 'left');



//        $this->db->join('users', 'action_logs.user_table_id=users.id as which_user', 'left');

        $this->db->join('vision_tests', 'action_logs.vision_test_id=vision_tests.id', 'left');
        $this->db->join('vision_consents', 'action_logs.vision_consent_id=vision_consents.id', 'left');
        $this->db->order_by("action_id", "DESC");
        $this->db->limit(5);
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
