<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class form extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();

        
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();
        $this->load->model(array('Forms_model','User_model'));
       
        $this->check_access(implode("/",$url));
        $this->smartyci->assign('parent', 'Forms');
        $this->smartyci->assign('active_forms', 'active');

        
    }
    public function add_form(){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $this->smartyci->assign('title', 'Add Form');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/add_form.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function form_edit($id){
        $detail= $this->Forms_model->get($id);


        $this->smartyci->assign('detail', $detail);

        $this->smartyci->assign('title', 'Edit Form');
        $this->smartyci->assign('page', 'edit');


        // Set CSS plugins
        $css_plugin = array(
//            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
//            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
//            'chosen_v1.2.0/chosen.min.css'
        );
        $css_page = array(
            'jquery.datepick.css'
        );
        $this->smartyci->assign('list_css_page', $css_page);


        $this->smartyci->assign('list_css_plugin', $css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin', $js_plugin);

        // Set JS page
        $js_page = array(
            'navy.form.element.js',
            'jquery.plugin.min.js',
            'jquery.datepick.js'
        );
        $this->smartyci->assign('list_js_page', $js_page);
        // Set content page
        $this->smartyci->assign('body', 'contents/forms/add_form.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }
    public function form_management(){

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
        $form_list = $this->Forms_model->get_many_by(array('active'=>0));
        $trash_form_list = $this->Forms_model->get_many_by(array('active'=>1));
        $trash_count=count($trash_form_list);
        $this->smartyci->assign('trash_count', $trash_count);


        $this->smartyci->assign('form_list', $form_list);


        $this->smartyci->assign('title', 'Form Management');

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/form_list.php');

        // Set active menu
        $this->smartyci->assign('forms_management', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');  
    }
    public function create_form(){

        $this->form_validation->set_rules('name', 'Form Name', 'required|trim|is_unique[forms.name]');
        $this->form_validation->set_rules('code', 'Url', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim|is_unique[forms.slug]');


        $data=$_POST;
        $data['slug']= preg_replace('/\s+/', '_', $_POST['name']);

        if ($this->form_validation->run() == true && $this->Forms_model->insert($data)) {
            $success = array('result' => 'true');
            echo json_encode($success);

        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


            $success = array('result' => $this->data['message']);
            echo json_encode($success);


        }
    }
    public function trash($id=null){
        if($id==null){
            redirect($this->form_management());
            exit();
        }
        $this->Forms_model->update($id, array('active'=>1));
        $this->session->set_flashdata('message', "Form Trashed Successfully");
        redirect(base_url('form/form_management'));
        exit();
    }
    public function restore($id=null){
        if($id==null){
            redirect($this->form_management());
            exit();
        }
        $this->Forms_model->update($id, array('active'=>0));
        $this->session->set_flashdata('message', "Form Restored Successfully");
        redirect(base_url('form/trash_forms'));
        exit();    
    }
    public function empty_trash(){
        $this->Forms_model->delete_by(array('active'=>1));
        $this->session->set_flashdata('message', "Trash Empty Successfully");
        redirect(base_url('form/trash_forms'));
        exit();

    }
    public function trash_forms(){
        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
        $form_list = $this->Forms_model->get_many_by(array('active'=>1));
        $trash_form_list = $this->Forms_model->get_many_by(array('active'=>1));
        $trash_count=count($trash_form_list);
        $this->smartyci->assign('trash_count', $trash_count);
        $this->smartyci->assign('form_list', $form_list);


        $this->smartyci->assign('title', 'Form Management');

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/trash_forms.php');

        // Set active menu
        $this->smartyci->assign('forms_management', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function trash_multiple_forms(){

        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }

      
        $this->Forms_model->update_many($data, array('active'=>1));
        $this->session->set_flashdata('message', "Forms Trashed Successfully");
        redirect(base_url('form/form_management'));
        exit();   
    }
    public function update_form($id){
        $this->form_validation->set_rules('name', 'Form Name', 'required|trim');
        $this->form_validation->set_rules('code', 'Url', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');



        if ($this->form_validation->run() == true && $this->Forms_model->update($id, $_POST)) {
            $success = array('result' => 'true', 'edit' => 'true');
            echo json_encode($success);

        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


            $success = array('result' => $this->data['message']);
            echo json_encode($success);


        }
    }
    public function form_list_json(){

        $forms = $this->Forms_model->get_all();
//        Kint::dump($forms);
//        exit();
        $json = array();
        foreach ($forms as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<a style='text-decoration: none' href=" . base_url('form/form_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;&nbsp;$row->name</a>",
                $row->slug,
                "<a href=" . base_url('form/delete_form') . "/$row->id><button class='btn btn-danger btn-stroke' id=''><i class='a fa-trash' aria-hidden='true'></i> Delete</button></a>"

            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }
    public function delete_form($id=null){
        if($id==null){
            redirect(base_url('form/form_management'));
            exit();
        }
        $this->Forms_model->delete($id);
        $this->session->set_flashdata('message', "Form Deleted Successfully");
        redirect(base_url('form/trash_forms'));
    }
    public function delete_multiple_forms(){
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }

        $this->Forms_model->delete_many($data);
        $this->session->set_flashdata('message', "Form Deleted Successfully");
        redirect(base_url('form/trash_forms'));   
    }
    public function access_form($slug){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
        
    $form=$this->Forms_model->get_by(array('slug'=>$slug));
      
        $this->smartyci->assign('detail', $form);

        $this->smartyci->assign('title', $form->name);

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/form.php');

        // Set active menu
        $this->smartyci->assign('form_slug', $form->slug);

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function test(){

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/test.php');

        // Set active menu

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function qualification(){

            $message= $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }

            

            $this->smartyci->assign('title', 'Welder Performance Qualification');

            // Set CSS plugins
            $css_plugin = array(
                'datatables/css/dataTables.bootstrap.css',
                'datatables/css/datatables.responsive.css',
                'fuelux/dist/css/fuelux.min.css'
            );
            $this->smartyci->assign('list_css_plugin',$css_plugin);
            // Set CSS page
            $css_page = array(
                'datepicker.css'
            );
            $this->smartyci->assign('list_css_page',$css_page);

            // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

            // Set JS page
            $js_page = array(
                'bootstrap-datepicker.js',
                'navy.form.picker.js'
            );
            $this->smartyci->assign('list_js_page',$js_page);

            // Set content page
            $this->smartyci->assign('body', 'contents/forms/add_qualification.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        }
    public function form_184(){

        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        

        $this->smartyci->assign('title', 'Form 184');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/form_184.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }
    public function form_107(){

        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        

        $this->smartyci->assign('title', 'Form 107');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/form_107.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }


    public function pqr(){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }



        $this->smartyci->assign('title', 'Procedure Qualification Record');

        $css_plugin = array(
//            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
//            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
//            'chosen_v1.2.0/chosen.min.css'
        );
        $css_page = array(
            'jquery.datepick.css'
        );
        $this->smartyci->assign('list_css_page', $css_page);


        $this->smartyci->assign('list_css_plugin', $css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin', $js_plugin);

        // Set JS page
        $js_page = array(
            'jquery.plugin.min.js',
            'jquery.datepick.js'
        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/procedure_qualification_record.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function wps(){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }



        $this->smartyci->assign('title', 'WELDING PROCEDURE SPECIFICATION (WPS)');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);
        // Set CSS page
        $css_page = array(
            'datepicker.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
//        $js_plugin = array(
//            'datatables/js/jquery.dataTables.min.js',
//            'datatables/js/dataTables.bootstrap.js',
//            'datatables/js/datatables.responsive.js',
//            'fuelux/dist/js/fuelux.min.js'
//        );
//        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/forms/welding_procedure_specification.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }


}