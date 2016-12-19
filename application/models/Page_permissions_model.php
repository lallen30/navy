<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Page_permissions_model extends MY_Model
{
    protected  $table= 'page_permissions';
    protected  $primary_key = 'id';


    public function get_pages($group_id){

        $this->db->like('group_ids', $group_id);
        $query = $this->db->get('page_permissions');
        return $query->result();


    }


}
