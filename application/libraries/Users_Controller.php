<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Controller extends MY_Controller {

    public $pages =array();
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session','ion_auth','form_validation'));
        $this->load->helper(array('url','language','form'));
        $this->load->model(array('User_model','Welder_form_model','Page_permissions_model','Action_log_model','Forms_model'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');


        if (!$this->ion_auth->logged_in())
        {
        redirect('account/sign_in');
        }
        $this->load->model('User_model');

        $users_list=$this->User_model->user_info($this->session->userdata('user_id'));

        if($this->session->userdata('group_id')==3){
            $w_data=$this->Welder_form_model->get_many_by(array('welder_id'=>$this->session->userdata('user_id')));
           
            
          
            $this->data['w_form']=$w_data;
            
            $this->smartyci->assign('w_form', $this->data['w_form']);
            
        }else{
            $this->smartyci->assign('w_form', '');
        }
$this->session->set_userdata('user_name', $users_list[0]->first_name);
        $this->smartyci->assign('user_name', $users_list[0]->first_name);
        $this->smartyci->assign('user_role', $users_list[0]->role);
        $this->session->set_userdata('user_role', $users_list[0]->role);
        $this->smartyci->assign('user_id', $this->session->userdata('user_id'));
        $this->smartyci->assign('old_user_id', $this->session->userdata('old_user_id'));


        $this->smartyci->assign('group_id', $this->session->userdata('group_id'));
        $this->smartyci->assign('user_level', $this->session->userdata('level'));


        $page_list=$this->Page_permissions_model->get_pages($this->session->userdata('group_id'));

        $pages=array();
        foreach ($page_list as $key =>$value){
            $pages[]=$value->page_link;
            
        }
        $this->pages=$pages;
        $this->smartyci->assign('pages', $pages);
        
       $forms=$this->Forms_model->get_all();
        $this->smartyci->assign('forms', $forms);


//        if (!in_array($page_name, $pages) && $this->session->userdata('user_id')!=1)
//        {
//            redirect($this->no_access());
//
//        }

        

    }

    public function check_access($page_name)

    {    $page_list=$this->Page_permissions_model->get_pages($this->session->userdata('group_id'));

       
        foreach ($page_list as $key =>$value){
            $pages[]=$value->page_link;
        }

        if (!in_array($page_name, $pages) && $this->session->userdata('user_id')!=1)
        {
            redirect($this->no_access());

        }

    }
    


    public function no_access(){
        $this->smartyci->assign('title', 'Access Denied');

        // Set content page
        $this->smartyci->assign('body', 'contents/no_access.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function action_log($data){
        
        $this->Action_log_model->insert($data);

    }
}
