<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welding extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Process_model', 'User_model', 'Vision_test_model', 'Vision_consent_model'));
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));
        $this->smartyci->assign('parent', 'Welding');


    }

    public function process()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Process List');

        // Set content page
        $this->smartyci->assign('body', 'contents/process/list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function process_list_json()
    {


        $process = $this->Process_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<a href=" . base_url('welding/process_detail') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i> <i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->process_name</a>",
                $row->process_abr,
                $row->type,
                $row->transfer_mode
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }

    public function process_edit($id)
    {

        $detail = $this->Process_model->get($id);

        $this->smartyci->assign('detail', $detail);

        $this->smartyci->assign('title', 'Edit User');
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
        $this->smartyci->assign('body', 'contents/process/add.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function add_process()
    {

        // Set title page
        $this->smartyci->assign('title', 'Add Procedure');
//        $this->smartyci->assign('page', 'add');


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
        $this->smartyci->assign('body', 'contents/process/add.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function process_detail($id)
    {

        $detail = $this->Process_model->get($id);

        $this->smartyci->assign('detail', $detail);

        $this->smartyci->assign('title', 'Process Detail');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
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
            'jquery.confirm.js'

        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/process/detail.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function delete_process($id)
    {

        $this->Process_model->delete($id);
        $this->session->set_flashdata('message', "Record Deleted Successfully");
        redirect(base_url('welding/process'));
    }

    public function create_process()
    {


        $this->form_validation->set_rules('process_name', 'Process Name', 'required|trim');
        $this->form_validation->set_rules('process_abr', 'Process ABR', 'required|trim');
        $this->form_validation->set_rules('type', 'Type', 'required|trim');
        $this->form_validation->set_rules('transfer_mode', 'Transfer Mode', 'required|trim');


        if ($this->form_validation->run() == true && $this->Process_model->insert($_POST)) {
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

    public function update_process($id)
    {

        $this->form_validation->set_rules('process_name', 'Process Name', 'required|trim');
        $this->form_validation->set_rules('process_abr', 'Process ABR', 'required|trim');
        $this->form_validation->set_rules('type', 'Type', 'required|trim');
        $this->form_validation->set_rules('transfer_mode', 'Transfer Mode', 'required|trim');


        if ($this->form_validation->run() == true && $this->Process_model->update($id, $_POST)) {
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

    public function welder_list()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Welder List');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin', $css_plugin);


        // Set content page
        $this->smartyci->assign('body', 'contents/welder/welder_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function welder_list_json()
    {


        $welder_list = $this->User_model->welder_list();
        $json = array();
        foreach ($welder_list as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<a href=" . base_url('welding/welder_detail') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i> <i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number </a>",
                $row->first_name,
                $row->last_name,
                $row->email,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }

    public function edit_welder($id)
    {


        $user_detail = $this->User_model->user_info($id);
        $this->smartyci->assign('user_detail', $user_detail);

        $this->smartyci->assign('title', 'Edit Welder');
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
        $this->smartyci->assign('body', 'contents/welder/add_welder.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function add_welder()
    {


        $this->smartyci->assign('title', 'Add Welder');
        $this->smartyci->assign('page', 'add');

        $css_page = array(
            'jquery.datepick.css'
        );
        $this->smartyci->assign('list_css_page', $css_page);
        $this->smartyci->assign('list_css_page', $css_page);


        // Set JS page
        $js_page = array(
            'navy.form.element.js',
            'jquery.plugin.min.js',
            'jquery.datepick.js'
        );
        $this->smartyci->assign('list_js_page', $js_page);


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
        $this->smartyci->assign('body', 'contents/welder/add_welder.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function welder_detail($id)
    {

        $user_detail = $this->User_model->user_info($id);

        $this->smartyci->assign('user_detail', $user_detail);
        $this->smartyci->assign('page', 'detail');

        $this->smartyci->assign('title', 'Welder Detail');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
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
            'jquery.confirm.js'

        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/welder/welder_detail.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function delete_welder($id)
    {
        if ($id != null) {
            $this->User_model->delete_user($id);
            $this->session->set_flashdata('message', "Record Deleted Successfully");
            redirect(base_url('welding/welder_list'));
        } else {
            redirect(base_url('dashboard'));
        }
    }

    public function vision_test($id)
    {
        if ($id != null) {
            $user = $this->ion_auth->user($id)->row();

            $this->smartyci->assign('user', $user);

            $message = $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }


            $this->smartyci->assign('title', 'Vision test');
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
                'jquery.plugin.min.js',
                'jquery.datepick.js'
            );
            $this->smartyci->assign('list_js_page', $js_page);


            // Set content page
            $this->smartyci->assign('body', 'contents/welder/vision_test.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        } else {
            redirect(base_url('dashboard'));
        }
    }

    public function vision_test_reports()
    {

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Vision Test Reports');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin', $css_plugin);


        // Set content page
        $this->smartyci->assign('body', 'contents/welder/vision_test_reports.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function vision_test_json_list()
    {


        $vision_reports = $this->Vision_test_model->get_all();
        $json = array();
        foreach ($vision_reports as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<a href=" . base_url('welding/vision_report') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i> <i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->employee_no </a>",
                $row->name,
                $row->ss_no,
                $row->date_tested,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);

    }

    public function save_vision_test($id = null)
    {
        if ($id == null) {
            if ($this->Vision_test_model->insert($_POST)) {
                $success = array('result' => 'true');
                echo json_encode($success);


            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }
        } else {

            if ($this->Vision_test_model->update($id, $_POST)) {
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


    }

    public function vision_report_edit($id)
    {
        if ($id != null) {
            $user = $this->Vision_test_model->get($id);

            $this->smartyci->assign('user', $user);

            $message = $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }


            $this->smartyci->assign('title', 'Vision Test Edit');
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
                'jquery.plugin.min.js',
                'jquery.datepick.js'
            );
            $this->smartyci->assign('list_js_page', $js_page);


            // Set content page
            $this->smartyci->assign('body', 'contents/welder/vision_test.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        } else {
            redirect(base_url('dashboard'));
        }
    }

    public function vision_report($id)
    {
        $user = $this->Vision_test_model->get($id);

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('page', 'detail');

        $this->smartyci->assign('title', 'Vision Report');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
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
            'jquery.confirm.js'

        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/welder/vision_report_detail.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');


    }

    public function delete_vision_test($id)
    {

        $this->Vision_test_model->delete($id);
        $this->session->set_flashdata('message', "Record Deleted Successfully");
        redirect(base_url('welding/vision_test_reports'));
    }

    public function vision_consent($id)
    {
        if ($id != null) {
            $user = $this->ion_auth->user($id)->row();
//            Kint::dump($user);
//            exit();
            $this->smartyci->assign('user', $user);

            $message = $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }


            $this->smartyci->assign('title', 'Vision Consent');

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
                'jquery.plugin.min.js',
                'jquery.datepick.js'
            );
            $this->smartyci->assign('list_js_page', $js_page);

            // Set content page
            $this->smartyci->assign('body', 'contents/welder/vision_consent_form.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        } else {
            redirect(base_url('dashboard'));
        }
    }

    public function vision_consent_reports()
    {
        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Vision Consent Reports');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin', $css_plugin);


        // Set content page
        $this->smartyci->assign('body', 'contents/welder/vision_consent_reports.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function vision_consent_json_list()
    {

        $vision_reports = $this->Vision_consent_model->get_all();
        $json = array();
        foreach ($vision_reports as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<a href=" . base_url('welding/vision_consent_report') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i> <i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->employee_no </a>",
                $row->name,
                $row->test_no,
                $row->date,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);

    }

    public function vision_consent_report($id)
    {
        $user = $this->Vision_consent_model->get($id);

        $this->smartyci->assign('user', $user);
        $this->smartyci->assign('page', 'detail');

        $this->smartyci->assign('title', 'Vision Consent Report');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
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
            'jquery.confirm.js'

        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/welder/vision_consent_detail.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');


    }

    public function vision_consent_edit($id)
    {
        if ($id != null) {
            $user = $this->Vision_consent_model->get($id);

            $this->smartyci->assign('user', $user);

            $message = $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }


            $this->smartyci->assign('title', 'Vision Consent Edit');
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
                'jquery.plugin.min.js',
                'jquery.datepick.js'
            );
            $this->smartyci->assign('list_js_page', $js_page);


            // Set content page
            $this->smartyci->assign('body', 'contents/welder/vision_consent_form.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        } else {
            redirect(base_url('dashboard'));
        }
    }


    public function delete_vision_consent($id)
    {

        $this->Vision_consent_model->delete($id);
        $this->session->set_flashdata('message', "Record Deleted Successfully");
        redirect(base_url('welding/vision_consent_reports'));
    }
}