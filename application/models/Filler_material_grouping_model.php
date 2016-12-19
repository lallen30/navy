<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Filler_material_grouping_model extends MY_Model
{
    protected  $table= 'filler_material_groupings';
    protected  $primary_key = 'id';

    public function get_Filler_material_grouping(){

        $this->db->select(['qualified_filler_groups.filler_metal_group','filler_material_groupings.id','filler_material_groupings.specification_no'
            ,'filler_material_groupings.electrode']);
        $this->db->from('filler_material_groupings');
        $this->db->join('qualified_filler_groups', 'qualified_filler_groups.id=filler_material_groupings.qualified_filler_group_id ');

        $query = $this->db->get();
        return $query->result();
    }

}
