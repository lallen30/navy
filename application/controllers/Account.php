<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
        $this->load->model('User_model');

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }
    public function login()
    {

        //validate form input
        $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
        $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

        if ($this->form_validation->run() == true)
        {
            // check to see if the user is logging in
            // check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
            {
                //if the login is successful
                //redirect them back to the home page
//                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $success=   array('result'=>'true');

                $group_id=$this->User_model->user_info($this->session->userdata('user_id'));

                $this->session->set_userdata('group_id',$group_id[0]->group_id);
                $this->session->set_userdata('level',$group_id[0]->level);

                echo  json_encode($success);
            }
            else
            {
                // if the login was un-successful
                // redirect them back to the login page
//                $this->session->set_flashdata('message', $this->ion_auth->errors());
                $success=   array('result'=>$this->ion_auth->errors());
                echo  json_encode($success);

            }
        }
        else
        {
            // the user is not logging in so display the login page
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['identity'] = array('name' => 'identity',
                'id'    => 'identity',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id'   => 'password',
                'type' => 'password',
            );

            $success=   array('result'=>'fail');
            echo  json_encode($success);       }
    }

    public function sign_in()
    {

        $message= $this->session->flashdata('message');
        if(isset($message) && !empty($message)){
            $this->smartyci->assign('message', $message);

        }
        // Set title page
        $this->smartyci->assign('title', 'SIGN IN');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set JS plugins
        $js_plugin = array(
            'jquery-validation/dist/jquery.validate.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'My_js.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/sign_in.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

    public function logout()
    {
        $this->data['title'] = "Logout";

        // log the user out
        $logout = $this->ion_auth->logout();

        // redirect them to the login page
//        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('account/sign_in', 'refresh');
    }


    public function lost_password()
    {
       $message= $this->session->flashdata('message');
        if(isset($message) && !empty($message)){
            $this->smartyci->assign('message', $message);

        }
        // Set title page
        $this->smartyci->assign('title', 'lost password');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/lost_password.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }

    public function lock_screen()
    {
        // Set title page
        $this->smartyci->assign('title', 'LOCK SCREEN');

        // Set CSS page
        $css_page = array(
            'sign.css'
        );
        $this->smartyci->assign('list_css_page',$css_page);

        // Set content page
        $this->smartyci->assign('body', 'contents/sign/lock_screen.html');

        // Render view on main layout
        $this->smartyci->display('contents/account.html');
    }
    public function forgot_password()
    {
//        Kint::dump($_POST);
//        exit();
        // setting validation rules by checking whether identity is username or email
        if($this->config->item('identity', 'ion_auth') != 'email' )
        {
            $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required|trim');
        }
        else
        {
            $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|trim|valid_email');
        }


        if ($this->form_validation->run() == false)
        {


            // set any errors and display the form
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
           $this->session->set_flashdata('message',$this->data['message']);
            redirect('account/lost_password');
        }
        else
        {
            $identity_column = $this->config->item('identity','ion_auth');
            $identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

            if(empty($identity)) {

                if($this->config->item('identity', 'ion_auth') != 'email')
                {
                    $this->ion_auth->set_error('forgot_password_identity_not_found');
                }
                else
                {
                    $this->ion_auth->set_error('forgot_password_email_not_found');
                }

                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('account/lost_password');
            }

            // run the forgotten password method to email an activation code to the user
            $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

            if ($forgotten)
            {
                // if there were no errors
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("account/sign_in", 'refresh'); //we should display a confirmation page here instead of the login page
            }
            else
            {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('account/lost_password');

            }
        }
    }

    // reset password - final step for forgotten password
    public function reset_password($code = NULL)
    {
        if (!$code)
        {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);

        if ($user)
        {
            // if the code is valid then display the password reset form

            $this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

            if ($this->form_validation->run() == false)
            {
                // display the form

                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                $this->data['new_password'] = array(
                    'name' => 'new',
                    'id'   => 'new',
                    'type' => 'password',
                    'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
                );
                $this->data['new_password_confirm'] = array(
                    'name'    => 'new_confirm',
                    'id'      => 'new_confirm',
                    'type'    => 'password',
                    'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
                );
                $this->data['user_id'] = array(
                    'name'  => 'user_id',
                    'id'    => 'user_id',
                    'type'  => 'hidden',
                    'value' => $user->id,
                );
                $this->data['csrf'] = $this->_get_csrf_nonce();
                $this->data['code'] = $code;

                // render
                $this->_render_page('auth/reset_password', $this->data);
            }
            else
            {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
                {

                    // something fishy might be up
                    $this->ion_auth->clear_forgotten_password_code($code);

                    show_error($this->lang->line('error_csrf'));

                }
                else
                {
                    // finally change the password
                    $identity = $user->{$this->config->item('identity', 'ion_auth')};

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                    if ($change)
                    {
                        // if the password was successfully changed
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        redirect("auth/login", 'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('auth/reset_password/' . $code, 'refresh');
                    }
                }
            }
        }
        else
        {
            // if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }
    

}
