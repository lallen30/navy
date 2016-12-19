<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Welder_form_model extends MY_Model
{
    protected  $table= 'welder_forms';
    protected  $primary_key = 'id';

//    public function getWelderForm($data){
//    	$query=$this->db->query('select wf.*,uf.fmb_name FROM welder_forms wf inner join uiform_form uf ON wf.form_id = uf.fmb_id where wf.welder_id='.$data["welder_id"]);
//        return $query->result();
//    }
}
