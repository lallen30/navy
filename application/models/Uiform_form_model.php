<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Uiform_form_model extends MY_Model
{
    protected  $table= 'uiform_form';
    protected  $primary_key = 'fmb_id';



    function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix . "uiform_form";
    }

    /**
     * model_forms::getListForms()
     * List form estimator
     *
     * @param int $per_page max number of form estimators
     * @param int $segment  Number of pagination
     *
     * @return array
     */
    function getListForms($per_page = '', $segment = '') {
        $query = sprintf('
            select c.*
            from %s c
            where c.flag_status=1
            ORDER BY c.updated_date desc
            ', $this->table);

        if ($per_page != '' || $segment != '') {
            $segment=(!empty($segment))?$segment:0;
            $query.=sprintf(' limit %s,%s', $segment, $per_page);
        }

        $query2 = $this->db->query($query);
        return $query2->result();
    }

    function getFormById($id) {
        $query = sprintf('
            select uf.*
            from %s uf
            where uf.fmb_id=%s
            ', $this->table, $id);

        $query2 = $this->db->query($query);

        return $query2->row();
    }

    function getAvailableFormById($id) {
        $query = sprintf('
            select uf.*
            from %s uf
            where 
            uf.flag_status=1 and
            uf.fmb_id=%s
            ', $this->table, $id);

        $query2 = $this->db->query($query);
        return $query2->row();
    }

    function getFormById_2($id) {
        $query = sprintf('
            select uf.fmb_data2,uf.fmb_name
            from %s uf
            where uf.fmb_id=%s
            ', $this->table, $id);

        $query2 = $this->db->query($query);
        return $query2->row();
    }

    function CountForms() {
        $query = sprintf('
            select COUNT(*) AS counted
            from %s c
            where c.flag_status=1 
            ORDER BY c.updated_date desc
            ', $this->table);
        $query2 = $this->db->query($query);

        $row = $query2->row();
        if (isset($row->counted)) {
            return $row->counted;
        } else {
            return 0;
        }
    }

    /**
     * model_forms::getFormDefault()
     * Get form estimator by default
     *
     * @return array
     */
    function getFormDefault()
    {
        $this->db->select('c.*');
        $this->db->from('uiform_form c');
        $this->db->where(array('c.fmb_default' => 0));
        $this->db->limit(1);
        return $this->db->get()->row();
    }


    /**
     * model_forms::getListActiveForms()
     * Get list active form estimators
     *
     * @return array
     */
    function getListActiveForms()
    {
        $this->db->select('c.fmb_id, c.fmb_name, c.updated_date, c.created_date, c.flag_status');
        $this->db->from('uiform_form c');
        $this->db->where(array('c.flag_status' => 1));
        $this->db->order_by('c.updated_date desc');
        return $this->db->get()->result();
    }

}
?>
