<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends MY_Model
{
    protected  $table= 'users';
    protected  $primary_key = 'id';

    public function user_list(){
        $this->db->select('users.*,groups.name as user_role,groups.level,groups.id as group_id')->from('users')
            ->join('users_groups', 'users_groups.user_id = users.id', 'LEFT')
            ->join('groups', 'groups.id = users_groups.group_id', 'LEFT')
            ->group_by('users.id')
            ->where('users.id!=', 1);
        $query=$this->db->get();
        return $query->result();
    }
    public function welder_list(){
        $this->db->select('users.id,users.badge_number,users.last_name,users.first_name,users.email,users.date_of_birth,groups.name')->from('users')
            ->join('users_groups', 'users_groups.user_id = users.id', 'LEFT')
            ->join('groups', 'groups.id = users_groups.group_id', 'LEFT')
            ->group_by('users.id')
            ->where('users_groups.group_id', 3)

        ->where('users.id!=', 1);
        $query=$this->db->get();
        return $query->result();
    }
    public function user_info($id){
        $this->db->Select('users.*,groups.name as role,groups.id as group_id,groups.level as level')->from('users')
            ->join('users_groups', 'users_groups.user_id = users.id', 'LEFT')
            ->join('groups', 'groups.id = users_groups.group_id', 'LEFT')
            ->group_by('users.id')
        ->where('users.id', $id);
        $query=$this->db->get();
        return $query->result();
    }
    public function delete_user($id){
        if($id!=1) {
    $this->db->where('id', $id);
    $this->db->delete('users');
    $this->db->where('user_id', $id);
    $this->db->delete('users_groups');
}
    }
    public function delete_multiple_user($array){

            if (($key = array_search('1', $array)) !== false) {
                unset($array[$key]);
            }
            $this->db->where_in('id', $array);
            $this->db->delete('users');
            $this->db->where_in('user_id', $array);
            $this->db->delete('users_groups');

    }
    public function update_user_group($id,$role){

        $this->db->where('user_id', $id);
        $this->db->update('users_groups',array('group_id'=>$role));


    }
    public function get_user_group($id){
        $this->db->select('users_groups.group_id');
        $this->db->from('users_groups');
        $this->db->join('users','users.id=users_groups.user_id','right');
        $this->db->where('user_id', $id);
        $query=$this->db->get();
        $query->row();
        return $query->result();


    }
    public function user_roles(){
        $this->db->select('*');
        $this->db->from('groups');
         $query=$this->db->get();
        return $query->result();


    }
    public function page_permissions(){

        $this->db->select('*');
        $this->db->where('is_function',0);
        $this->db->from('page_permissions');
        $query=$this->db->get();
        return $query->result();


    }
    public function update_permission($data){

        $this->db->set('group_ids',"null",false);
        $this->db->where( array('is_function'=>0));

        $this->db->update('page_permissions');

        $this->db->update_batch('page_permissions', $data,'id');
//        $query=$this->db->query();
//        print_r($query);


    }
    public function function_permissions(){

        $this->db->select('*');
        $this->db->where('is_function',1);
        $this->db->from('page_permissions');
        $query=$this->db->get();
        return $query->result();


    }
    public function update_f_permission($data){

        $this->db->set('group_ids',"null",false);
        $this->db->where( array('is_function'=>1));

        $this->db->update('page_permissions');

        $this->db->update_batch('page_permissions', $data,'id');
//        $query=$this->db->query();
//        print_r($query);


    }

    
}

/* End of file '/User_model.php' */
/* Location: ./application/models//User_model.php */