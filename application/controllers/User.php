<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();
        $this->check_access(implode("/", $url));
        $this->load->model(array('User_model','Groups_model'));

        $this->smartyci->assign('parent', 'Users');
        $this->smartyci->assign('parent', 'Users');
        $this->smartyci->assign('active_user', 'active');


    }

    public function index()
    {

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $users_list = $this->User_model->user_list();

        $this->smartyci->assign('user_list', $users_list);

        // Set title page
        $this->smartyci->assign('page', 'list');

        $this->smartyci->assign('title', 'Users List');

        // Set content page
        $this->smartyci->assign('body', 'contents/users/user_list.php');

        // Set active menu
        $this->smartyci->assign('user_list', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function user_list_json()
    {

        $users_list = $this->User_model->user_list();
        $json = array();
        foreach ($users_list as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            if($this->session->userdata('level')>=$row->level){
                if($row->group_id!=1 || $this->session->userdata('user_id')>=1) { $checkbox= "<input id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' id='delete_".$row->id."'  type='checkbox'>";}
                else{
                    $checkbox= "<input disabled  type='checkbox'>";
                }

                $edit=  "  <a href=" . base_url('user/edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> ";
            }else{
                $edit=null;
                $checkbox= "<input disabled  type='checkbox'>";

            }
            $json[] = array(

                $checkbox,
                in_array('user/edit',$this->pages) ? $edit."<a style='text-decoration: none'
 href=" . base_url('user/detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number " : "<a href=" . base_url('user/detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number" ,
                $row->first_name,
                $row->last_name,
                $row->email,
                $row->user_role
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }

    public function edit($id)
    {



        $user_detail = $this->User_model->user_info($id);
        $roles=$this->Groups_model->get_all();
        $this->smartyci->assign('roles', $roles);
        if($this->session->userdata('level')>=$user_detail[0]->level  ){

        }else{
            redirect($this->no_access());
            exit();
        }


        $this->smartyci->assign('user_detail', $user_detail);

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
        $this->smartyci->assign('body', 'contents/users/add_user.php');

        // Set active menu
        $this->smartyci->assign('user_list', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function add()
    {
        // Set title page
        $this->smartyci->assign('title', 'Add User');
        $this->smartyci->assign('page', 'add');
        $roles=$this->Groups_model->get_all();
        $this->smartyci->assign('roles', $roles);


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
        $this->smartyci->assign('body', 'contents/users/add_user.php');

        // Set active menu
        $this->smartyci->assign('add_user', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function detail($id)
    {

        $user_detail = $this->User_model->user_info($id);
        if($user_detail==null){
            redirect(base_url('dashboard'));
            exit();
        }

        $this->smartyci->assign('user_detail', $user_detail);
        $this->smartyci->assign('page', 'detail');

        $this->smartyci->assign('title', 'User Detail');

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
        $this->smartyci->assign('body', 'contents/users/detail_user.php');

        // Set active menu
        $this->smartyci->assign('user_list', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function delete_user($id)
    {

        $this->db->trans_start();
        $user_detail=$this->User_model->user_info($id);

        $this->User_model->delete_user($id);
        $this->session->set_flashdata('message', "Record Deleted Successfully");
        $data=array('user_id'=>$this->session->userdata('user_id'),
            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
            'user_table_id'=>$id,
        );
        $this->action_log($data);

        $this->db->trans_complete();

        redirect(base_url('user'));

    }
    public function delete_multiple_user()
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

        redirect(base_url('user'));

    }

    public function create_user()
    {


        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        if ($identity_column !== 'email') {
            $this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'required|trim|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        } else {
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|trim|valid_email|is_unique[' . $tables['users'] . '.email]');
        }
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');

        $this->form_validation->set_rules('middle_name', 'Mi', 'required|trim');


        $this->form_validation->set_rules('user_role', 'User Role', 'required|trim');
        $this->form_validation->set_rules('badge_number', 'Barge Number ', 'required|trim|is_unique[' . $tables['users'] . '.' . 'badge_number' . ']');
        $this->form_validation->set_rules('department', 'Department', 'required|trim');
        $this->form_validation->set_rules('street_address', 'Street Address', 'required|trim');
        $this->form_validation->set_rules('primary_phone', 'Primary Phone', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('ss_no', 'SS No', 'required|trim');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required|trim');
        $this->form_validation->set_rules('emergency_contact_person', 'Emergency Contact Person', 'required|trim');
        $this->form_validation->set_rules('emergency_contact_number', 'Emergency Contact Number', 'required|trim');


        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|trim|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true) {
            $email = strtolower($this->input->post('email'));
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'middle_name' => $this->input->post('middle_name'),
                'badge_number' => $this->input->post('badge_number'),
                'department' => $this->input->post('department'),
                'street_address' => $this->input->post('street_address'),
                'primary_phone' => $this->input->post('primary_phone'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'ss_no' => $this->input->post('ss_no'),
                'zip_code' => $this->input->post('zip_code'),
                'emergency_contact_person' => $this->input->post('emergency_contact_person'),
                'emergency_contact_number' => $this->input->post('emergency_contact_number')


            );
//            $password= substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',8)),0,8);

            $group_ids = array($this->input->post('user_role'));

        }


        if ($this->form_validation->run() == true ) {
            $this->db->trans_start();


            $u= $this->ion_auth->register($identity, $password, $email, $additional_data, $group_ids);
            $user_detail=$this->User_model->user_info($u);
            $data=array('user_id'=>$this->session->userdata('user_id'),
                'what'=>' Created '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
                'user_table_id'=>$u,
            );
            $this->action_log($data);
            $user_detail=null;
            $this->db->trans_complete();

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

    public function edit_user($id)
    {
        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;
        $user = $this->ion_auth->user($id)->row();
//        Kint::dump($user);
//        exit();
        $groups = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();

//        Kint::dump($currentGroups);
//        exit();
        // validate form input

        $info=$this->User_model->get($id);
        if($info->email!=$this->input->post('email')){
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|trim|valid_email|is_unique[' . $tables['users'] . '.email]');
        }else{
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        }

            $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');

            $this->form_validation->set_rules('middle_name', 'Mi', 'required|trim');


            $this->form_validation->set_rules('user_role', 'User Role', 'trim');
        if($info->badge_number!=$this->input->post('badge_number')){
            $this->form_validation->set_rules('badge_number', 'Badge Number', 'required|trim|is_unique[' . $tables['users'] . '.badge_number]');
        }else{
            $this->form_validation->set_rules('badge_number', 'Badge Number', 'required|trim');

        }
            $this->form_validation->set_rules('department', 'Department', 'required|trim');
            $this->form_validation->set_rules('street_address', 'Street Address', 'required|trim');
            $this->form_validation->set_rules('primary_phone', 'Primary Phone', 'required|trim');
            $this->form_validation->set_rules('city', 'City', 'required|trim');
            $this->form_validation->set_rules('state', 'State', 'required|trim');
            $this->form_validation->set_rules('ss_no', 'SS No', 'required|trim');
            $this->form_validation->set_rules('zip_code', 'Zip Code', 'required|trim');
            $this->form_validation->set_rules('emergency_contact_person', 'Emergency Contact Person', 'required|trim');
            $this->form_validation->set_rules('emergency_contact_number', 'Emergency Contact Number', 'required|trim');


if (isset($_POST) && !empty($_POST)) {
            // do we have a valid request?


            // update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'email' => $this->input->post('email'),
                    'last_name' => $this->input->post('last_name'),
                    'middle_name' => $this->input->post('middle_name'),
                    'badge_number' => $this->input->post('badge_number'),
                    'department' => $this->input->post('department'),
                    'street_address' => $this->input->post('street_address'),
                    'primary_phone' => $this->input->post('primary_phone'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'zip_code' => $this->input->post('zip_code'),
                    'ss_no' => $this->input->post('ss_no'),
                    'emergency_contact_person' => $this->input->post('emergency_contact_person'),
                    'emergency_contact_number' => $this->input->post('emergency_contact_number')


                );

                // update the password if it was posted
                if ($this->input->post('password')) {
                    $data['password'] = $this->input->post('password');
                }


                // Only allow updating groups if user is admin

                //Update the groups user belongs to
                $groupData = $this->input->post('user_role');

                if (($currentGroups[0]->id != $groupData) && !empty($groupData)) {
                    $this->User_model->update_user_group($id, $groupData);
//                        $this->ion_auth->remove_from_group('', $id);
//
//                        foreach ($groupData as $grp) {
//                            $this->ion_auth->add_to_group($grp, $id);
//                        }


                }

                // check to see if we are updating the user
                if ($this->ion_auth->update($user->id, $data)) {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    /*                    $this->session->set_flashdata('message', $this->ion_auth->messages() );*/

                    $success = array('result' => 'true', 'edit' => 'true');
                    echo json_encode($success);
                } else {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->set_flashdata('message', $this->ion_auth->errors());

                    $success = array('result' => $this->session->set_flashdata('message', $this->ion_auth->errors()));
                    echo json_encode($success);
                }

            }
            else {

                // display the edit user form

                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }



    public function profile()
    {
        $id = $this->session->userdata('user_id');
        $user_detail = $this->User_model->user_info($id);

        $this->smartyci->assign('user_detail', $user_detail);
        $this->smartyci->assign('page', 'detail');

        $this->smartyci->assign('title', 'User Profile');

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
        $this->smartyci->assign('body', 'contents/common/profile.php');

        // Set active menu
        $this->smartyci->assign('active_user', '');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function profile_edit()
    {
        $id = $this->session->userdata('user_id');
        $user_detail = $this->User_model->user_info($id);
        $this->smartyci->assign('user_detail', $user_detail);

        $this->smartyci->assign('title', 'Profile Edit');
        $this->smartyci->assign('page', 'edit');


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
            'navy.form.element.js'
        );
        $this->smartyci->assign('list_js_page', $js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/common/profile_edit.php');

        // Set active menu
        $this->smartyci->assign('active_user', '');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function user_roles()
    {

        $user_roles = $this->User_model->user_roles();

        $this->smartyci->assign('user_roles', $user_roles);

        $this->smartyci->assign('title', 'User Roles');


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
        $this->smartyci->assign('body', 'contents/users/user_roles.php');

        // Set active menu
        $this->smartyci->assign('active_user_roles', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function user_roles_access()
    {
        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $page_permissions = $this->User_model->page_permissions();
        $groups = $this->Groups_model->get_all();
        $this->smartyci->assign('groups', $groups);
        $this->smartyci->assign('page_permissions', $page_permissions);

        $this->smartyci->assign('title', 'User Roles Access');


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
        $this->smartyci->assign('body', 'contents/users/page_permissions.php');

        // Set active menu
        $this->smartyci->assign('user_roles_access', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }

    public function update_permissions()
    {

        $access = $_POST;
        $a = array();
        foreach ($access as $key => $value) {


            array_push($a, array('id' => substr($key, 7), 'group_ids' => implode("|", $value)));
        }

        $this->User_model->update_permission($a);

        $this->session->set_flashdata('message', "Roles Updated Successfully");
        redirect(base_url('user/user_roles_access'));

    }

    public function change_login($id)
    {
        if ($id != null) {
            if (($this->session->userdata('old_user_id')) == null) {
            if ($this->session->userdata('group_id') == 1) {
                $this->session->set_userdata('old_user_id', $this->session->userdata('user_id'));
                $this->smartyci->assign('old_user_id', $this->session->userdata('user_id'));
                $this->session->set_userdata('user_id', $id);
                $group_id = $this->User_model->user_info($id);

                $this->session->set_userdata('group_id', $group_id[0]->group_id);
                $this->session->set_userdata('level', $group_id[0]->level);



                redirect(base_url('dashboard'));
            } else {
                redirect(base_url('dashboard'));

            }
        }}


        redirect(base_url('dashboard'));
    }

    public function admin_login($id)
    {
        if ($id != null) {
            $this->session->set_userdata('user_id', $this->session->userdata('old_user_id'));
            $this->session->unset_userdata('old_user_id');
            $group_id = $this->User_model->user_info($this->session->userdata('user_id'));

            $this->session->set_userdata('group_id', $group_id[0]->group_id);
            $this->session->set_userdata('level', $group_id[0]->level);

            redirect(base_url('dashboard'));
        } else {
            redirect(base_url('dashboard'));
        }

    }
    public function edit_user_role($id=null){

        if(!isset($id)){
            redirect($this->user_roles());
            exit();
        }
        // Set title page
        $this->smartyci->assign('title', 'Edit User Role');
        $user_role=$this->Groups_model->get($id);
//        Kint::dump($user_role);
//        exit();
        $this->smartyci->assign('detail', $user_role);


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
        $this->smartyci->assign('body', 'contents/users/user_roles_edit.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function update_user_role($id){
        $this->form_validation->set_rules('name', 'User Role', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');



        if ($this->form_validation->run() == true && $this->Groups_model->update($id, $_POST)) {
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
