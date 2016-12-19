<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_form extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();


        $url[] = $this->router->fetch_class();
        $url[] = $this->router->fetch_method();

        $this->check_access(implode("/", $url));
        $this->smartyci->assign('parent', 'Create Form');


    }
    
}