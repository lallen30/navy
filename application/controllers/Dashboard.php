<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Users_Controller {

    public function __construct(){
        parent::__construct();
        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();
        $this->smartyci->assign('parent', 'Dashboard');

        $this->check_access(implode("/",$url));
               
    }
    public function index()
    {

//        Kint::dump($_SESSION);
//        exit();

        $actions=$this->Action_log_model->get_5_record();


        $this->smartyci->assign('actions', $actions);

        // Set title page
        $this->smartyci->assign('title', 'DASHBOARD');

        // Set CSS plugins
        $css_plugin = array(
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
            'flot/jquery.flot.js',
            'flot/jquery.flot.spline.min.js',
            'flot/jquery.flot.categories.js',
            'flot/jquery.flot.tooltip.min.js',
            'flot/jquery.flot.resize.js',
            'flot/jquery.flot.pie.js',
           
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'navy.dashboard.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        if($this->session->userdata('group_id')==1){
            $this->smartyci->assign('body', 'contents/admin_dashboard.php');

        }else{
            $this->smartyci->assign('body', 'contents/dashboard.html');

        }

        // Set active menu
        $this->smartyci->assign('active_dashboard', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function admin_dashboard(){
        
    }
    public function send_mail(){

        // Report all PHP errors (see changelog)
        error_reporting(E_ALL);
        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kaurdaljit925@gmail.com';                 // SMTP username
        $mail->Password = 'daljit619';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('kaurdaljit925@gmail.com', 'Mailer');
        $mail->addAddress('amardev619@gmail.com', 'Joe User');     // Add a recipient
        $mail->addAddress('amardevfreelancer1@gmail.com');               // Name is optional
        $mail->addReplyTo('kaurdaljit925@gmail.com', 'Mailer');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
    public function actions(){



        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }



        // Set title page

        $this->smartyci->assign('title', 'Action Logs');

        // Set content page
        $this->smartyci->assign('body', 'contents/users/action_logs.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }
    public function action_json_list(){


        $actions = $this->Action_log_model->action_list();
//        Kint::dump($actions);
//        exit();
        $json = array();
        foreach ($actions as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            if($row['user_id'] && !(strpos($row['what'], 'Deleted')===0)){
                $which="<a href=" . base_url('user/detail') . "/".$row['user_id']."><i class='fa fa-eye' aria-hidden='true'></i> access</a> ";
            }elseif($row['vision_id'] && !(strpos($row['what'], 'Deleted')===0)){
                $which="<a href=" . base_url('welding/vision_report') . "/".$row['vision_id']."><i class='fa fa-eye' aria-hidden='true'></i> access</a> ";
            }elseif($row['vision_consent_id'] && !(strpos($row['what'], 'Deleted')===0)){
                $which="<a href=" . base_url('welding/vision_consent_report') . "/".$row['vision_consent_id']."><i class='fa fa-eye' aria-hidden='true'></i> access</a> ";
            }else{
                $which=null;
            }
            $json[] = array(
//                in_array('user/edit',$this->pages) ? $edit." <a style='text-decoration: none'
// href=" . base_url('user/detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number " : "<a href=" . base_url('user/detail') . "/$row->id><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;&nbsp;$row->badge_number" ,
                $row['time'],
                $row['username'],
                $row['what'],
                $which
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }
}
