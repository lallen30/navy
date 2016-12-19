<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welding extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('Process_model', 'model_record', 'User_model', 'Welder_form_model',
            'Vision_test_model', 'Vision_consent_model', 'Action_log_model', 'Uiform_form_model',
            'Base_materials_model','Process_model','Shielding_gas_model','Test_assemblies_model',
            'Filler_material_diameter_model','Qualified_filler_groups_model',
            'Filler_material_grouping_model','Pipe_sizes_model','Form_184_model'));

        if($this->session->userdata('group_id')==3){
            $this->smartyci->assign('parent', 'Forms');

        }else{
            $this->smartyci->assign('parent', 'Welding');

        }
        $this->smartyci->assign('active_welding', 'active');


    }

    

    public function welder_list()
    {
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));

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
        $this->smartyci->assign('welder_list', 'active');

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
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",
                in_array('welding/edit_welder',$this->pages) ? " <a href=" . base_url('welding/edit_welder') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>  <a style='text-decoration: none' href=" . base_url('welding/welder_detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i></a>&nbsp;<a style='text-decoration: none;' href='".base_url('welding/form_management').'/'.$row->id."'> <i class='fa fa-file-text-o' aria-hidden='true'></i> </a> &nbsp;$row->badge_number " : "<a href=" . base_url('welder/detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number" ,
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
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));

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
        $this->smartyci->assign('welder_list', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function add_welder()
    {
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));

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
        $this->smartyci->assign('welder_list', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function welder_detail($id)
    {
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));
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
        $this->smartyci->assign('welder_list', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function delete_welder($id)
    {
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));
        if ($id != null) {
            $this->db->trans_start();

            $user_detail=$this->User_model->user_info($id);

            $this->User_model->delete_user($id);

                $data=array('user_id'=>$this->session->userdata('user_id'),
                    'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
                    'user_table_id'=>$id,
                );

                $this->action_log($data);



            $this->db->trans_complete();

            $this->session->set_flashdata('message', "Record Deleted Successfully");
            redirect(base_url('welding/welder_list'));
        } else {
            redirect(base_url('dashboard'));
        }
    }
    public function delete_multiple_welder()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->User_model->delete_multiple_user($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('welding/welder_list'));

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
        $this->smartyci->assign('vision_test_reports', 'active');

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
                "<input id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' id='delete_".$row->id."'  type='checkbox'> ",
                " <a href=" . base_url('welding/vision_report_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   <a style='text-decoration: none' href=" . base_url('welding/vision_report') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number </a>",
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

    public function vision_test($id = null)
    {
        if($_POST==null){
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
            
        }
        elseif ($id == null) {

            $this->db->trans_start();


            $u=$this->Vision_test_model->insert($_POST);


            if ($u) {
                $data=array('user_id'=>$this->session->userdata('user_id'),
                    'what'=>'Added Vision Test',
                    'vision_test_id'=>$u,
                );

                $this->action_log($data);

                $success = array('result' => 'true');
                echo json_encode($success);


            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }
            $this->db->trans_complete();
        } else {

            if ($this->Vision_test_model->update($id, $_POST)) {
                $success = array('result' => 'true','edit'=>'true');
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
            $this->smartyci->assign('vision_test_reports', 'active');

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
        $this->smartyci->assign('vision_test_reports', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');


    }

    public function delete_vision_test($id)
    {
        $this->db->trans_start();


        if( $this->Vision_test_model->delete($id)){
            $data=array('user_id'=>$this->session->userdata('user_id'),
                'what'=>'Deleted Vision Test ',
                'vision_test_id'=>$id,
            );
            $this->action_log($data);

        }

        $this->db->trans_complete();

        $this->session->set_flashdata('message', "Record Deleted Successfully");
        redirect(base_url('welding/vision_test_reports'));
    }
    public function delete_multiple_vision_reports(){
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Vision_test_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('welding/vision_test_reports'));
    }
//    public function vision_consent($id)
//    {
//        if ($id != null) {
//            $user = $this->ion_auth->user($id)->row();
////            Kint::dump($user);
////            exit();
//            $this->smartyci->assign('user', $user);
//
//            $message = $this->session->flashdata('message');
//            if(!empty($message))
//            {
//                $this->smartyci->assign('message', $message);
//
//
//            }
//
//
//            $this->smartyci->assign('title', 'Vision Consent');
//
//            // Set CSS plugins
//            $css_plugin = array(
////            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
////            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
////            'chosen_v1.2.0/chosen.min.css'
//            );
//            $css_page = array(
//                'jquery.datepick.css'
//            );
//            $this->smartyci->assign('list_css_page', $css_page);
//
//
//            $this->smartyci->assign('list_css_plugin', $css_plugin);
//
//            // Set JS plugins
//            $js_plugin = array(
//                'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
//                'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
//                'holderjs/holder.js',
//                'bootstrap-maxlength/bootstrap-maxlength.min.js',
//                'jquery-autosize/jquery.autosize.min.js',
//                'chosen_v1.2.0/chosen.jquery.min.js'
//            );
//            $this->smartyci->assign('list_js_plugin', $js_plugin);
//
//            // Set JS page
//            $js_page = array(
//                'jquery.plugin.min.js',
//                'jquery.datepick.js'
//            );
//            $this->smartyci->assign('list_js_page', $js_page);
//
//            // Set content page
//            $this->smartyci->assign('body', 'contents/welder/vision_consent_form.php');
//
//            // Set active menu
//            $this->smartyci->assign('active_tables', 'active');
//
//            // Render view on main layout
//            $this->smartyci->display('contents/layout.html');
//
//        } else {
//            redirect(base_url('dashboard'));
//        }
//    }

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
        $this->smartyci->assign('vision_consent_reports', 'active');

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
                "<input id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' id='delete_".$row->id."'  type='checkbox'> ",
                " <a href=" . base_url('welding/vision_consent_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   <a style='text-decoration: none' href=" . base_url('welding/vision_consent_report') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number </a>",
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
        $this->smartyci->assign('vision_consent_reports', 'active');

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
            $this->smartyci->assign('vision_consent_reports', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');

        } else {
            redirect(base_url('dashboard'));
        }
    }
    public function vision_consent($id = null)
    {   if($_POST==null){
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

    }
        elseif ($id == null) {

            $this->db->trans_start();


            $u=$this->Vision_consent_model->insert($_POST);
            if ($u) {

                $data=array('user_id'=>$this->session->userdata('user_id'),
                    'what'=>'Added Vision Consent',
                    'vision_consent_id'=>$u,
                );
                $this->action_log($data);
                $success = array('result' => 'true');
                echo json_encode($success);


            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }
            $this->db->trans_complete();

        } else {

            if ($this->Vision_consent_model->update($id, $_POST)) {
                $success = array('result' => 'true','edit'=>'true');

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

    public function delete_vision_consent($id)
    {
        $this->db->trans_start();




        if($this->Vision_consent_model->delete($id)){
            $data=array('user_id'=>$this->session->userdata('user_id'),
                'what'=>'Deleted Vision Consent ',
                'vision_consent_id'=>$id,
            );
            $this->action_log($data);

        }
        $this->db->trans_complete();
        $this->session->set_flashdata('message', "Record Deleted Successfully");
        redirect(base_url('welding/vision_consent_reports'));
    }
    public function delete_multiple_vision__consent_reports(){
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Vision_consent_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('welding/vision_consent_reports'));
    }
    public function form_management_f($id){
        foreach ($_POST['select'] as $row){
            $data[]=$row;
        }

       $data= implode(";",$data);
      

        $this->User_model->update($id, array('forms'=>$data));

        $this->session->set_flashdata('message', "Forms Permission updated Successfully");
        redirect(base_url('welding/form_management/'.$id));
    }
    public function form_management($welder_id=null){
        if($welder_id==null){
            redirect(base_url());

        }

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
        $welder_data=$this->User_model->get($welder_id);
        $welder_form=$welder_data->forms;
        $welder_form=explode(';',$welder_form);
        $this->smartyci->assign('welder_form', $welder_form);
        
        //$form_list = $this->Welder_form_model->get_many_by(array('welder_id'=>$welder_id));
        $form_list = $this->Welder_form_model->get_many_by(array('welder_id'=>$welder_id));
        
//        print_r($form_list);
//        exit();
        $this->smartyci->assign('welder_id', $welder_id);

        $this->smartyci->assign('form_list', $form_list);

//        $this->smartyci->assign('redirect_path', base_url($_SERVER[PATH_INFO]));

        $this->smartyci->assign('title', 'Form Management for '.$welder_data->first_name.' '.$welder_data->last_name.' '.$welder_data->badge_number);

        // Set content page
        $this->smartyci->assign('body', 'contents/welder/form_management.php');

        // Set active menu
        $this->smartyci->assign('welder_list', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }
    public function add_form($welder_id){
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
        $welder_data=$this->User_model->get($welder_id);

//        $uni_form=$this->Uiform_form_model->getListForms();

//        $welder_data=$this->User_model->get_all();

//        Kint::dump($welder_data);
//        exit();
//        $this->smartyci->assign('uni_form', $uni_form);

        $welder_form=$welder_data->forms;
        $welder_form=explode(';',$welder_form);
        $this->smartyci->assign('welder_id', $welder_id);


        $this->smartyci->assign('title', 'Add Form for '. $welder_data->first_name.' '.$welder_data->last_name.' '.$welder_data->badge_number);

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
        $this->smartyci->assign('body', 'contents/welder/add_form.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function save_form_in_welder($welder_id){

        $this->form_validation->set_rules('form_title', 'Form Name', 'required|trim');
        $this->form_validation->set_rules('form_name', 'Form', 'required|trim');
        $this->form_validation->set_rules('form_description', 'Description', 'trim');
        $this->form_validation->set_rules('welder_id', 'Welder ID', 'required|trim');
        





        if ($this->form_validation->run() == true && $this->Welder_form_model->insert($_POST)){
            $success = array('result' => 'true');
        echo json_encode($success);



    }else{
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


            $success = array('result' => $this->data['message']);
            echo json_encode($success);
        }
    }
    public function delete_form($form_id){

       $welder_info= $this->Welder_form_model->get($form_id);
        $this->Welder_form_model->delete($form_id);
        $this->session->set_flashdata('message', "Form Deleted Successfully From Welder Profile");
        redirect(base_url('welding/form_management/'.$welder_info->welder_id));
    }
    public function delete_welder_forms($welder_id){
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }


        $this->Welder_form_model->delete_many($data);
        $this->session->set_flashdata('message', "All Forms Deleted Successfully From Welder Profile");
        redirect(base_url('welding/form_management/'.$welder_id));
    }
    public function access_form($id){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $form=$this->Welder_form_model->get($id);
        $this->session->set_userdata('Submitted_form_id',$form->id);
        $this->smartyci->assign('welder_id', $form->welder_id);
        $welder_info=$this->User_model->get($form->welder_id);

        $this->smartyci->assign('welder_info', $welder_info);
        $this->smartyci->assign('form_id', $form->id);
        $this->smartyci->assign('title', $form->form_title);
        $shielding_gas1=$this->Shielding_gas_model->get_all();
        $this->smartyci->assign('shielding_gas1', $shielding_gas1);
        $weld_test_no1=$this->Test_assemblies_model->get_all();
        $this->smartyci->assign('weld_test_no1', $weld_test_no1);
        $diameters=$this->Filler_material_diameter_model->get_all();
        $this->smartyci->assign('diameters', $diameters);
        $base_materials=$this->Base_materials_model->get_all();
        $this->smartyci->assign('base_materials', $base_materials);
        $pipe_size=$this->Pipe_sizes_model->get_all();
        $this->smartyci->assign('pipe_size', $pipe_size);
        $welding_process=$this->Process_model->get_all();

        foreach ($welding_process as $key => $level):
            $p=$level->process_abr;
            $p=array_filter(explode("|",$p));
            $i=0;
            foreach ($p as $k =>$attribute):

                $welding_pro[] = array(
                    'id' => $level->id."_".$i,
                    'process_abr' => $attribute
                );
            $i++;
            endforeach;
        endforeach;

        
        $this->smartyci->assign('welding_process', $welding_pro);


        if($form->form_name=='form_184'){
            $this->form_184();
        }
        if($form->form_name=='form_107'){
            $this->form_107();
        }
        if($form->form_name=='pqr'){
            $this->pqr();
        }
        if($form->form_name=='wps'){
            $this->wps();
        }


    }
    public function access_from_edit($id)
    {
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));

        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $form=$this->Welder_form_model->get($id);
        $this->smartyci->assign('welder_id', $form->welder_id);
        $welder_info=$this->Form_184_model->get_by('form_id',$form->id);
if(!isset($welder_info)){
    $form=$this->Welder_form_model->get($id);
    $this->session->set_userdata('Submitted_form_id',$form->id);
    $this->smartyci->assign('welder_id', $form->welder_id);
    $welder_info=$this->User_model->get($form->welder_id);

    $this->smartyci->assign('welder_info', $welder_info);
}
        $this->smartyci->assign('welder_info', $welder_info);
        $this->smartyci->assign('form_id', $form->id);
        $this->smartyci->assign('title', $form->form_title);
        $shielding_gas1=$this->Shielding_gas_model->get_all();
        $this->smartyci->assign('shielding_gas1', $shielding_gas1);
        $weld_test_no1=$this->Test_assemblies_model->get_all();
        $this->smartyci->assign('weld_test_no1', $weld_test_no1);
        $diameters=$this->Filler_material_diameter_model->get_all();
        $this->smartyci->assign('diameters', $diameters);
        $base_materials=$this->Base_materials_model->get_all();
        $this->smartyci->assign('base_materials', $base_materials);
        $pipe_size=$this->Pipe_sizes_model->get_all();
        $this->smartyci->assign('pipe_size', $pipe_size);
        $welding_process=$this->Process_model->get_all();

        foreach ($welding_process as $key => $level):
            $p=$level->process_abr;
            $p=array_filter(explode("|",$p));

            $i=0;
            foreach ($p as $k =>$attribute):

                $welding_pro[] = array(
                    'id' => $level->id."_".$i,
                    'process_abr' => $attribute
                );
                $i++;
            endforeach;
        endforeach;


        $this->smartyci->assign('welding_process', $welding_pro);


        if($form->form_name=='form_184'){
            $this->form_184();
        }
        if($form->form_name=='form_107'){
            $this->form_107();
        }
        if($form->form_name=='pqr'){
            $this->pqr();
        }
        if($form->form_name=='wps'){
            $this->wps();
        }


    }
    public function save_form_184($id=null){
        $post=$_POST['array'];

        $this->form_validation->set_rules('array[form_id]', 'Welder Name', 'required|trim');
        $this->form_validation->set_rules('array[diameter]', 'Diameter', 'required|trim');

        $this->form_validation->set_rules('array[welder_id]', 'Welder Name', 'required|trim');
        $this->form_validation->set_rules('array[first_name]', 'Welder Name', 'required|trim');
        $this->form_validation->set_rules('array[badge_number]', 'Bardge number', 'required|trim');
        $this->form_validation->set_rules('array[department]' , 'Department', 'required|trim');
        $this->form_validation->set_rules('array[date_tested]', 'Date Tested', 'required|trim');
        $this->form_validation->set_rules('array[pipe_plate]', 'Pipe or Plate', 'required|trim');
        $this->form_validation->set_rules('array[groups1]' , 'Groups 1', 'trim');
        $this->form_validation->set_rules('array[welding_process_id]', 'Welding Process', 'required|trim');
        $this->form_validation->set_rules('array[weld_test_no_id]', 'Weld Test No', 'required|trim');
        $this->form_validation->set_rules('array[base_material_header]', 'Base Material ', 'required|trim');
        $this->form_validation->set_rules('array[base_material_specification]', 'Specification', 'required|trim');
        $this->form_validation->set_rules('array[groups2]' , 'Groups 2', 'required|trim');
        $this->form_validation->set_rules('array[base_material_header2]' , 'Base Material', 'trim');
        $this->form_validation->set_rules('array[base_material_specification2]', 'Specification', 'required|trim');
        $this->form_validation->set_rules('array[shielding_gas_id]', 'Torch Gas', 'required|trim');
        $this->form_validation->set_rules('array[weld_procedure_no]', 'Weld Procedure No', 'required|trim');
        $this->form_validation->set_rules('array[joint_design]', 'Joint Design', 'required|trim');
        $this->form_validation->set_rules('array[thickness_range_min]', 'Thickness Range Min', 'required|trim');
        $this->form_validation->set_rules('array[thickness_range_max]'  , 'Thickness range Max', 'trim');
        $this->form_validation->set_rules('array[restricted]' , 'Restricted', 'required|trim');
        $this->form_validation->set_rules('array[filler_material1]', 'Filler Material', 'required|trim');
        $this->form_validation->set_rules('array[specification_no]' , 'Specification f', 'required|trim');
        $this->form_validation->set_rules('array[electrode]' , 'Electrode', 'trim');
        $this->form_validation->set_rules('array[filler_group_welder_qualifies]' , 'Qualifies Groups', 'required|trim');

        if($post['pipe_plate']=='Plate'){
        $this->form_validation->set_rules('array[plate_size]' , 'Plate Size', 'required|trim');
        $this->form_validation->set_rules('array[plate_thickness]' , 'Plate Thickness', 'required|trim');
            $post['pipe_size']="";
            $post['pipe_schedule']="";
            $post['pipe_thickness']="";
            $post['pipe_size_copper']="";
            $post['pipe_schedule_copper']="";
            $post['pipe_thickness_copper']="";
            $post['pipe_grove_2g_vert_t']=$post['pipe_grove_1g_rolled_q']=
            $post['pipe_grove_1g_rolled_t']=$post['pipe_grove_2g_vert_q']=
            $post['pipe_grove_2g_horz_t']=$post['pipe_grove_2g_horz_q']=
            $post['pipe_grove_6g_inclined_t']=$post['pipe_grove_6g_inclined_q']=
            $post['pipe_grove_input_t']=$post['pipe_grove_input_q']=
            $post['pipe_grove_input' ]=$post['pipe_grove_all_positions_t']=
            $post['pipe_grove_all_positions_q']=
            $post['pipe_socket_1f_rotated_t']=$post['pipe_socket_1f_rotated_q']=
            $post['pipe_socket_2f_vert_rotated_t']=$post['pipe_socket_2f_vert_rotated_q']=
            $post['pipe_socket_2f_horz_t']=$post['pipe_socket_2f_horz_q']=
            $post['pipe_socket_4f_ovhd_t']=$post['pipe_socket_4f_ovhd_q']=
            $post['pipe_socket_5f_vert_t']=$post['pipe_socket_5f_vert_q']=
            $post['pipe_socket_all_positions_t']=$post['pipe_socket_all_positions_q']="";


        }
        elseif($post['pipe_plate']=='Pipe' && $post['groups1']=='26'){
            $this->form_validation->set_rules('array[pipe_size_copper]', 'Pipe Size Copper', 'required|trim');
            $this->form_validation->set_rules('array[pipe_schedule_copper]', 'Pipe Schedule Copper', 'required|trim');
            $this->form_validation->set_rules('array[pipe_thickness_copper]' , 'Pipe Thickness Copper', 'required|trim');
            $post['pipe_size']="";
            $post['pipe_schedule']="";
            $post['pipe_thickness']="";

            $post['plate_grove_1g_flat_t']=$post['plate_grove_1g_flat_q']=
            $post['palte_grove_2g_horz_t']=$post['palte_grove_2g_horz_q']=
            $post['plate_grove_3g_vert_t']=$post['plate_grove_3g_vert_q']=
            $post['plate_grove_4g_ovhd_t']=$post['plate_grove_4g_ovhd_q']=
            $post['plate_grove_input_t']=$post['plate_grove_input_q']=
            $post['plate_grove_input']=$post['plate_tack_input']=
            $post['plate_grove_all_positions_t']=$post['plate_grove_all_positions_q']=
            $post['plate_tack_1f_flat_t']=$post['plate_tack_1f_flat_q']=
            $post['plate_tack_2f_horz_t']=$post['plate_tack_2f_horz_q']=
            $post['plate_tack_3f_vert_t']=$post['plate_tack_3f_vert_q']=
            $post['plate_tack_4f_ovhd_t']=$post['plate_tack_4f_ovhd_q']=
            $post['plate_tack_input_t']=$post['plate_tack_input_q']=
            $post['plate_tack_all_positions_t']=$post['plate_tack_all_positions_q']=
            "";
        }
        elseif($post['pipe_plate']=='Pipe'){

            $this->form_validation->set_rules('array[pipe_size]', 'Pipe Size', 'required|trim');
            $this->form_validation->set_rules('array[pipe_schedule]', 'Pipe Schedule', 'required|trim');
            $this->form_validation->set_rules('array[pipe_thickness]' , 'Pipe Thickness', 'required|trim');
            $post['pipe_size_copper']="";
            $post['pipe_schedule_copper']="";
            $post['pipe_thickness_copper']="";
          
            $post['plate_grove_1g_flat_t']=$post['plate_grove_1g_flat_q']=
            $post['palte_grove_2g_horz_t']=$post['palte_grove_2g_horz_q']=
            $post['plate_grove_3g_vert_t']=$post['plate_grove_3g_vert_q']=
            $post['plate_grove_4g_ovhd_t']=$post['plate_grove_4g_ovhd_q']=
            $post['plate_grove_input_t']=$post['plate_grove_input_q']=
            $post['plate_grove_input']=$post['plate_tack_input']=
            $post['plate_grove_all_positions_t']=$post['plate_grove_all_positions_q']=
            $post['plate_tack_1f_flat_t']=$post['plate_tack_1f_flat_q']=
            $post['plate_tack_2f_horz_t']=$post['plate_tack_2f_horz_q']=
            $post['plate_tack_3f_vert_t']=$post['plate_tack_3f_vert_q']=
            $post['plate_tack_4f_ovhd_t']=$post['plate_tack_4f_ovhd_q']=
            $post['plate_tack_input_t']=$post['plate_tack_input_q']=
            $post['plate_tack_all_positions_t']=$post['plate_tack_all_positions_q']=
                "";
        }
        if(isset($post['diameter'])){
            $post['diameter']=  implode("|",$post['diameter']);
        }

        if($id==null){
//            $is_exit=$this->Form_184_model->get_by('form_id',$post['form_id']);
            if($this->Form_184_model->get_by('form_id',$post['form_id'])!=null){
//                $this->data['messages']="This form is already Filled You can't fill it again";
                $success = array('result' => "This form is already Filled You can't fill it again");
                echo json_encode($success);
            }elseif ($this->form_validation->run() == true && $this->Form_184_model->insert($post)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);



            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }else{
            if ($this->form_validation->run() == true && $this->Form_184_model->update($id,$post)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }
    public function info_record($form_id) {

        $id_rec = (isset($_GET['id_rec']) && $_GET['id_rec']) ? Uiform_Form_Helper::sanitizeInput($_GET['id_rec']) : 0;
        $name_fields = $this->model_record->getNameField($id_rec);
        $form_data = $this->model_record->getFormDataById($id_rec);

        $name_fields_check = array();
        foreach ($name_fields as $value) {
            $name_fields_check[$value->fmf_uniqueid] = $value->fieldname;
        }
        $data_record = $this->model_record->getRecordById($id_rec);
        $record_user = json_decode($data_record->fbh_data, true);
        $new_record_user = array();
        foreach ($record_user as $key => $value) {
            if (isset($name_fields_check[$key])) {
                $key = $name_fields_check[$key];
            }
            $new_record_user[] = array('field' => $key, 'value' => $value);
        }

        $data = array();
        $data2 = array();
        $data['record_id'] = $id_rec;
        $data['record_info'] = $data2['record_info'] = $new_record_user;
        $data['info_date'] = $data2['info_date'] = date("F j, Y, g:i a", strtotime($data_record->created_date));
        $data['info_ip'] = $data2['info_ip'] = $data_record->created_ip;
        require_once( APPPATH . '/helpers/clientsniffer.php' );
        $data['info_useragent'] = $data2['info_useragent'] = ClientSniffer::test(array($data_record->fbh_user_agent));
        $data['info_referer'] = $data2['info_referer'] = $data_record->fbh_referer;
        $data['form_name'] = $data2['form_name'] = $form_data->fmb_name;
        $data2['info_labels'] = array(
            'title' => __('Entry information', 'FRocket_admin'),
            'info_submitted' => __('Submitted form data', 'FRocket_admin'),
            'info_additional' => __('Additional info', 'FRocket_admin'),
            'info_date' => __('Date', 'FRocket_admin'),
            'info_ip' => __('IP', 'FRocket_admin'),
            'info_pc' => __('Client PC info', 'FRocket_admin'),
//            'info_frmurl' => __('Form URL', 'FRocket_admin'),
            'form_name' => __('Form name', 'FRocket_admin')
        );
        $data['info_export'] = Uiform_Form_Helper::base64url_encode(json_encode($data2));
//        $this->load->view('templates/contents/welder/info_record',$data);

//        Kint::dump( $data['record_info'] );
//        exit();
        $message= $this->session->flashdata('message');

        $form=$this->Welder_form_model->get($form_id);
        $welder_data=$this->User_model->get($form->welder_id);


        $this->smartyci->assign('title', $form->form_title.' form data for '.$welder_data->first_name .' '.$welder_data->badge_number);


        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('record_info', $data);

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


        $js_page = array(
            'bootstrap-datepicker.js',
            'navy.form.picker.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/welder/info_record.php');

        // Set active menu
//        $this->smartyci->assign('form_slug', $form->id);

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

//        $this->template->loadPartial('layout', 'records/info_record', $data);
    }
    public function form_184(){

        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }



        $this->smartyci->assign('title', ' Welder or Brazer Performance Qualification Test');

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



        $this->smartyci->assign('title', 'Welder or Brazer Performance Qualification Record');

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