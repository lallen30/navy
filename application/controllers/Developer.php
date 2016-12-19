<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->smartyci->assign('parent', 'Developer');
  

    }

    public function function_permissions(){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $page_permissions= $this->User_model->function_permissions();



        $this->smartyci->assign('page_permissions', $page_permissions);

        $this->smartyci->assign('title', 'Function Permissions');



        // Set CSS plugins
        $css_plugin = array(
//            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
//            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
//            'chosen_v1.2.0/chosen.min.css'
        );
        $css_page=array(
            'jquery.datepick.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);


        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'navy.form.element.js',
            'jquery.plugin.min.js',
            'jquery.datepick.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);
        // Set content page
        $this->smartyci->assign('body', 'contents/developer/page_permissions.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function update_permissions(){

        $access=$_POST;
        $a=array();
        foreach($access as $key => $value){


            array_push($a,array('id'=>substr($key,7),'group_ids'=>implode("|",$value)));
        }

        $this->User_model->update_f_permission($a);

        $this->session->set_flashdata('message',"Roles Updated Successfully");
        redirect(base_url('developer/function_permissions'));

    }
    public function php(){
        phpinfo();
    }
}