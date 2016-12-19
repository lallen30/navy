<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Qualified_filler_groups_model extends MY_Model
{
    protected  $table= 'qualified_filler_groups';
    protected  $primary_key = 'id';

    public function get_qualified_filler_process(){

    $this->db->select(['processes.process_name','qualified_filler_groups.id','qualified_filler_groups.filler_metal_group'
    ,'qualified_filler_groups.filler_group_welder_qualifies']);
    $this->db->from('qualified_filler_groups');
    $this->db->join('processes', 'processes.id=qualified_filler_groups.process_id ');

    $query = $this->db->get();
        return $query->result();
    }

}
