<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Parameters extends Users_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('Process_model', 'model_record', 'User_model', 'Welder_form_model',
            'Vision_test_model', 'Vision_consent_model', 'Action_log_model', 'Uiform_form_model',
            'Base_materials_model','Process_model','Shielding_gas_model','Test_assemblies_model',
            'Filler_material_diameter_model','Qualified_filler_groups_model',
            'Filler_material_grouping_model','Pipe_sizes_model','Copper_nickel_tubings_model'));

            $this->smartyci->assign('parent', 'Parameters');


        $this->smartyci->assign('active_parameters', 'active');


    }
    public function base_materials(){

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $this->smartyci->assign('title', 'Base Materials List');
        $this->smartyci->assign('active_base_materials', 'active');


        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/base_materials_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function base_materials_list_json()
    {


        $process = $this->Base_materials_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",
//<a href=" . base_url('parameters/process_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                "<a style='text-decoration: none' href=" . base_url('parameters/add_base_materials') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;&nbsp;$row->group_name</a>",
                $row->header,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }

    public function add_base_materials($id=null){
        $this->smartyci->assign('active_base_materials', 'active');

        if($id==null){
        $message= $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }
//        $welder_data=$this->User_model->get($welder_id);

//        $uni_form=$this->Uiform_form_model->getListForms();

//        $welder_data=$this->User_model->get_all();

//        Kint::dump($welder_data);
//        exit();
//        $this->smartyci->assign('uni_form', $uni_form);

//        $welder_form=$welder_data->forms;
//        $welder_form=explode(';',$welder_form);
//        $this->smartyci->assign('welder_id', $welder_id);


        $this->smartyci->assign('title', 'Add Base Materials');

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
        $this->smartyci->assign('body', 'contents/parameters/add_base_materials.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
        else{
            $detail = $this->Base_materials_model->get($id);
            $this->smartyci->assign('detail', $detail);

            $this->smartyci->assign('title', 'Edit Base Materials');
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
            $this->smartyci->assign('body', 'contents/parameters/add_base_materials.php');

            // Set active menu
            $this->smartyci->assign('welder_list', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }
    public function save_add_base_materials($id=null){

        $this->form_validation->set_rules('group_name', 'Group Name', 'required|trim');
        $this->form_validation->set_rules('header', 'Base materials Header ', 'required|trim');
        $this->form_validation->set_rules('specifications', 'Specifications', 'required|trim');

$specification=explode("|", $_POST['specifications']);
        foreach ($specification as $spe){
            $v[]=trim($spe);
        }
        $_POST['specifications']=implode("|",$v);
        if($id==null){
        if ($this->form_validation->run() == true && $this->Base_materials_model->insert($_POST)){
            $success = array('result' => 'true');
            echo json_encode($success);

        }else{
           $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $success = array('result' => $this->data['message']);
            echo json_encode($success);
        }}
        else{
            if ($this->form_validation->run() == true && $this->Base_materials_model->update($id,$_POST)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }
    public function delete_base_materials()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Base_materials_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/base_materials'));

    }
    public function fetch_base_materials(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Base_materials_model->get_by('id',$base_material);
//            print_r($results);
            if (count($results) > 0) {
//            $results=$results['specifications'];
//                $results=(explode("|",$results));
               echo "<input required class='form-control' name='array[base_material_header]' value='$results->header'>";
                            $results=$results->specifications;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                ?>
<select required class="form-control input-sm mb-15" id="base_material_specification" name="array[base_material_specification]">
               <?php foreach ($results as $row){

                    echo "<option value='$row'>$row</option>";

                }?>
</select>
<?php
                          }
            }

    }
    public function fetch_base_materials2(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Base_materials_model->get_by('id',$base_material);
//            print_r($results);
            if (count($results) > 0) {
//            $results=$results['specifications'];
//                $results=(explode("|",$results));
                echo "<input required class='form-control' name='array[base_material_header2]' value='$results->header'>";
                $results=$results->specifications;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                ?>
                <select required class="form-control input-sm mb-15" id="base_material_specification2" name="array[base_material_specification2]">
                    <?php foreach ($results as $row){

                        echo "<option value=$row>$row</option>";

                    }?>
                </select>
                <?php
            }
        }

    }

    public function shielding_gas(){

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $this->smartyci->assign('title', 'Shielding Gas');
        $this->smartyci->assign('active_shielding', 'active');


        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/shielding_gas_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function shielding_gas_list_json()
    {


        $process = $this->Shielding_gas_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",
//<a href=" . base_url('parameters/process_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                "<a style='text-decoration: none' href=" . base_url('parameters/add_shielding_gas') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;&nbsp;$row->gas_name</a>",
                $row->gas_abbreviation,
                $row->percentage,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }

    public function add_shielding_gas($id=null){
        $this->smartyci->assign('active_shielding', 'active');

        if($id==null){
            $message= $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }
//        $welder_data=$this->User_model->get($welder_id);

//        $uni_form=$this->Uiform_form_model->getListForms();

//        $welder_data=$this->User_model->get_all();

//        Kint::dump($welder_data);
//        exit();
//        $this->smartyci->assign('uni_form', $uni_form);

//        $welder_form=$welder_data->forms;
//        $welder_form=explode(';',$welder_form);
//        $this->smartyci->assign('welder_id', $welder_id);


            $this->smartyci->assign('title', 'Add Shielding Gas');

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
            $this->smartyci->assign('body', 'contents/parameters/add_shielding_gas.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
        else{
            $detail = $this->Shielding_gas_model->get($id);
            $this->smartyci->assign('detail', $detail);

            $this->smartyci->assign('title', 'Edit Shielding Gas');
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
            $this->smartyci->assign('body', 'contents/parameters/add_shielding_gas.php');

            // Set active menu
            $this->smartyci->assign('welder_list', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }
    public function save_shielding_gas($id=null){

        $this->form_validation->set_rules('gas_name', 'Gas Name', 'required|trim');
        $this->form_validation->set_rules('gas_abbreviation', 'Gas Abbreviation', 'required|trim');
        $this->form_validation->set_rules('percentage', 'Percentage', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Shielding_gas_model->insert($_POST)){
                $success = array('result' => 'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }}
        else{
            if ($this->form_validation->run() == true && $this->Shielding_gas_model->update($id,$_POST)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }
    public function delete_shielding_gas()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Shielding_gas_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/shielding_gas'));
    }
    public function fetch_shielding_gas(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Shielding_gas_model->get_by('id',$base_material);
            if (count($results) > 0) {
                echo "<input required class='form-control' name='array[gas_abbreviation]' value='$results->gas_abbreviation	'>";
                $results=$results->percentage;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                ?>
                <select required class="form-control input-sm mb-15" id="gas_percentage" name="array[gas_percentage]">
                    <?php foreach ($results as $row){

                        echo "<option value='$row'>$row</option>";

                    }?>
                </select>
                <?php
            }
        }
    }

    public function process()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Process List');
        $this->smartyci->assign('active_process', 'active');
        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/process_list.php');

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
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",

                "<a href=" . base_url('parameters/add_process') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   $row->process_name",
                $row->process_abr

            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }



    public function add_process($id=null)
    {
        $this->smartyci->assign('active_process', 'active');

        if($id==null){
        // Set title page
        $this->smartyci->assign('title', 'Add Process');
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
        $this->smartyci->assign('body', 'contents/parameters/add_process.php');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');


        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }else{
            $detail = $this->Process_model->get($id);

            $this->smartyci->assign('detail', $detail);
            $this->smartyci->assign('title', 'Edit Process');
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
            $this->smartyci->assign('body', 'contents/parameters/add_process.php');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }}


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

    public function delete_process()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Process_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/process'));
    }

    public function save_process($id=null)
    {


        $this->form_validation->set_rules('process_name', 'Process Name', 'required|trim');
        $this->form_validation->set_rules('process_abr', 'Process ABR', 'required|trim');
//        $this->form_validation->set_rules('type', 'Type', 'required|trim');
//        $this->form_validation->set_rules('transfer_mode', 'Transfer Mode', 'required|trim');

        if($id==null){
        if ($this->form_validation->run() == true && $this->Process_model->insert($_POST)) {
            $success = array('result' => 'true');
            echo json_encode($success);

        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


            $success = array('result' => $this->data['message']);
            echo json_encode($success);


        }}
        else{
            if ($this->form_validation->run() == true && $this->Process_model->update($id, $_POST)) {
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
    public function test_assemblies()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Test Assemblies & Joint Design');
        $this->smartyci->assign('active_test_assemblies', 'active');
        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/test_assemblies_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function  test_assemblies_list_json()
    {


        $process = $this->Test_assemblies_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",

                "<a href=" . base_url('parameters/add_test_assemblies') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   $row->test_assembly",
                $row->joint_design

            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }


    public function add_test_assemblies($id=null)
    {
        $this->smartyci->assign('active_test_assemblies', 'active');

        if($id==null){
            // Set title page
            $this->smartyci->assign('title', 'Add Test Assemblies & Joint Design');
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
            $this->smartyci->assign('body', 'contents/parameters/add_test_assemblies.php');

            // Set active menu


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }else{
            $detail = $this->Test_assemblies_model->get($id);

            $this->smartyci->assign('detail', $detail);
            $this->smartyci->assign('title', 'Edit Test Assemblies & Joint Design');
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
            $this->smartyci->assign('body', 'contents/parameters/add_test_assemblies.php');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }


    public function test_assemblies_detail($id)
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

    public function delete_test_assemblies()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Test_assemblies_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/test_assemblies'));
    }

    public function save_test_assemblies($id=null)
    {


        $this->form_validation->set_rules('test_assembly', 'Test Assembly', 'required|trim');
        $this->form_validation->set_rules('joint_design', 'Joint Design', 'required|trim');
//        $this->form_validation->set_rules('type', 'Type', 'required|trim');
//        $this->form_validation->set_rules('transfer_mode', 'Transfer Mode', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Test_assemblies_model->insert($_POST)) {
                $success = array('result' => 'true');
                echo json_encode($success);

            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }}
        else{
            if ($this->form_validation->run() == true && $this->Test_assemblies_model->update($id, $_POST)) {
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
    public function fetch_test_assemblies(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Test_assemblies_model->get_by('id',$base_material);
            if (count($results) > 0) {
                echo "<label class='control-label'>Joint Design (MIL-STD-22)</label>";
                $results=$results->joint_design;
                echo "<input required class='form-control' name='array[joint_design]'  value='$results' type='text'>";
              
            }
        }
    }

    public function filler_material_diameter()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Filler Material DiameterList');
        $this->smartyci->assign('active_filler_material_diameter', 'active');
        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/filler_material_diameter_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function  filler_material_diameter_list_json()
    {


        $process = $this->Filler_material_diameter_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",

                "<a href=" . base_url('parameters/add_filler_material_diameter') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   $row->diameter",

            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }


    public function add_filler_material_diameter($id=null)
    {
        $this->smartyci->assign('active_filler_material_diameter', 'active');

        if($id==null){
            // Set title page
            $this->smartyci->assign('title', 'Add Filler Material Diameter');
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
            $this->smartyci->assign('body', 'contents/parameters/add_filler_material_diameter.php');

            // Set active menu


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }else{
            $detail = $this->Filler_material_diameter_model->get($id);

            $this->smartyci->assign('detail', $detail);
            $this->smartyci->assign('title', 'Edit Filler Material Diameter');
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
            $this->smartyci->assign('body', 'contents/parameters/add_filler_material_diameter.php');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }


    public function filler_material_diameter_detail($id)
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

    public function delete_filler_material_diameter()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Filler_material_diameter_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/filler_material_diameter'));
    }

    public function save_filler_material_diameter($id=null)
    {


        $this->form_validation->set_rules('diameter', 'Diameter', 'required|trim');
//        $this->form_validation->set_rules('type', 'Type', 'required|trim');
//        $this->form_validation->set_rules('transfer_mode', 'Transfer Mode', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Filler_material_diameter_model->insert($_POST)) {
                $success = array('result' => 'true');
                echo json_encode($success);

            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }}
        else{
            if ($this->form_validation->run() == true && $this->Filler_material_diameter_model->update($id, $_POST)) {
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
    public function qualified_filler_groups()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Qualified Filler Groups List');
        $this->smartyci->assign('active_qualified_filler_groups', 'active');
        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/qualified_filler_groups_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function  qualified_filler_groups_list_json()
    {


        $process = $this->Qualified_filler_groups_model->get_qualified_filler_process();

        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",

                "<a href=" . base_url('parameters/add_qualified_filler_groups') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   $row->process_name",
                $row->filler_metal_group,
                $row->filler_group_welder_qualifies
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }


    public function add_qualified_filler_groups($id=null)
    {
        $this->smartyci->assign('active_qualified_filler_groups', 'active');

        $process_list = $this->Process_model->get_all();
        $this->smartyci->assign('process_list', $process_list);

        if($id==null){
            // Set title page
            $this->smartyci->assign('title', 'Add Qualified Filler Groups');
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
            $this->smartyci->assign('body', 'contents/parameters/add_qualified_filler_groups.php');

            // Set active menu


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }else{
            $detail = $this->Qualified_filler_groups_model->get($id);

            $this->smartyci->assign('detail', $detail);
            $this->smartyci->assign('title', 'Edit Qualified Filler Groups');
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
            $this->smartyci->assign('body', 'contents/parameters/add_qualified_filler_groups.php');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }


    public function qualified_filler_groups_detail($id)
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

    public function delete_qualified_filler_groups()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Qualified_filler_groups_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/qualified_filler_groups'));
    }

    public function save_qualified_filler_group($id=null)
    {
        $this->form_validation->set_rules('process_id', 'Weld Process', 'required|trim');
        $this->form_validation->set_rules('filler_metal_group', 'Filler Metal Group', 'required|trim');
        $this->form_validation->set_rules('filler_group_welder_qualifies', 'Filler Group Welder Qualifies', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Qualified_filler_groups_model->insert($_POST)) {
                $success = array('result' => 'true');
                echo json_encode($success);

            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }}
        else{
            if ($this->form_validation->run() == true && $this->Qualified_filler_groups_model->update($id, $_POST)) {
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

    public function fetch_filler_material(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Qualified_filler_groups_model->get_many_by('process_id',$base_material);
            if (count($results) > 0) {
//                echo "<input class='form-control' value='$results->gas_abbreviation	'>";
                ?>
                <select required id="filler_material1" name="array[filler_material1]" class="form-control input-sm mb-15">
                    <option value=''>Select</option>
                    <?php foreach ($results as $row){

                        echo "<option value='$row->id'>$row->filler_metal_group</option>";

                    }?>
                </select>
                <?php
            }
        }
    }
    public function fetch_qualifies_groups(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Qualified_filler_groups_model->get_by('id',$base_material);
            if (count($results) > 0) {
//                echo "<input class='form-control' value='$results->gas_abbreviation	'>";
                echo "<label class='control-label'>Qualifies Groups (Table VIII)</label>
";
                echo "<input  required class='form-control' name='array[filler_group_welder_qualifies]' value='$results->filler_group_welder_qualifies' type='text'>";


            }
        }
    }

    public function filler_material_grouping()
    {


        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }


        $this->smartyci->assign('title', 'Filler Material Grouping List');
        $this->smartyci->assign('active_add_filler_material_grouping', 'active');
        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/filler_material_grouping_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');

    }

    public function  filler_material_grouping_list_json()
    {


        $process = $this->Filler_material_grouping_model->get_Filler_material_grouping();

        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",

                "<a href=" . base_url('parameters/add_filler_material_grouping') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>   $row->filler_metal_group",
                $row->specification_no,
                $row->electrode
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }


    public function add_filler_material_grouping($id=null)
    {
        $this->smartyci->assign('active_add_filler_material_grouping', 'active');

        $process_list = $this->Qualified_filler_groups_model->get_all();
        $this->smartyci->assign('Qualified_filler_groups', $process_list);

        if($id==null){
            // Set title page
            $this->smartyci->assign('title', 'Add Filler Material Grouping');
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
            $this->smartyci->assign('body', 'contents/parameters/add_filler_material_grouping.php');

            // Set active menu


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }else{
            $detail = $this->Filler_material_grouping_model->get($id);

            $this->smartyci->assign('detail', $detail);
            $this->smartyci->assign('title', 'Edit Filler Material Grouping');
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
            $this->smartyci->assign('body', 'contents/parameters/add_filler_material_grouping.php');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }


    public function filler_material_grouping_detail($id)
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

    public function delete_filler_material_grouping()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Filler_material_grouping_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/filler_material_grouping'));
    }

    public function save_filler_material_grouping($id=null)
    {
        $this->form_validation->set_rules('qualified_filler_group_id', 'Qualified Filler Group', 'required|trim');
        $this->form_validation->set_rules('specification_no', 'Specification No', 'required|trim');
        $this->form_validation->set_rules('electrode', 'Electrode', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Filler_material_grouping_model->insert($_POST)) {
                $success = array('result' => 'true');
                echo json_encode($success);

            } else {
                // display the create user form
                // set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));


                $success = array('result' => $this->data['message']);
                echo json_encode($success);


            }}
        else{
            if ($this->form_validation->run() == true && $this->Filler_material_grouping_model->update($id, $_POST)) {
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
    public function fetch_specification_no(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Filler_material_grouping_model->get_many_by('qualified_filler_group_id',$base_material);
            if (count($results) > 0) {
echo "<label class='control-label'>Specification</label>";
                ?>
                <select required id="specification_no1" name="array[specification_no]" class="form-control input-sm mb-15">
                    <option value=''>Select</option>

                    <?php foreach ($results as $row){

                        echo "<option value='$row->id'>$row->specification_no</option>";

                    }?>
                </select>
                <?php
            }
        }
    }
    public function fetch_electrode(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Filler_material_grouping_model->get_by('id',$base_material);
            if (count($results) > 0) {
               echo "<label class='control-label'>Electrode</label>";

                $results=$results->electrode;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;?>
                <select required id="electrode1" name="array[electrode]" class="form-control input-sm mb-15">
                    <option value="">Select</option>
                    <?php foreach ($results as $row){

                        echo "<option  value='".trim($row)."'>$row</option>";

                    }?>
                </select>
                <?php
            }
        }
    }
    public function pipe_size(){

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $this->smartyci->assign('title', 'Pipe Size');
        $this->smartyci->assign('active_pipe_size', 'active');


        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/pipe_size_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function pipe_size_list_json()
    {


        $process = $this->Pipe_sizes_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",
//<a href=" . base_url('parameters/process_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                "<a style='text-decoration: none' href=" . base_url('parameters/add_pipe_size') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;&nbsp;$row->nps</a>",
                $row->schedule,
                $row->thickness,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }
    public function add_pipe_size($id=null){
        $this->smartyci->assign('active_pipe_size', 'active');

        if($id==null){
            $message= $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }
//        $welder_data=$this->User_model->get($welder_id);

//        $uni_form=$this->Uiform_form_model->getListForms();

//        $welder_data=$this->User_model->get_all();

//        Kint::dump($welder_data);
//        exit();
//        $this->smartyci->assign('uni_form', $uni_form);

//        $welder_form=$welder_data->forms;
//        $welder_form=explode(';',$welder_form);
//        $this->smartyci->assign('welder_id', $welder_id);


            $this->smartyci->assign('title', 'Add Pipe Size ');

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
            $this->smartyci->assign('body', 'contents/parameters/add_pipe_size.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
        else{
            $detail = $this->Pipe_sizes_model->get($id);
            $this->smartyci->assign('detail', $detail);

            $this->smartyci->assign('title', 'Edit Pipe Size');
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
            $this->smartyci->assign('body', 'contents/parameters/add_pipe_size.php');

            // Set active menu
            $this->smartyci->assign('welder_list', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }
    public function save_pipe_size($id=null){

        $this->form_validation->set_rules('nps', 'NPS', 'required|trim');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('thickness', 'Thickness', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Pipe_sizes_model->insert($_POST)){
                $success = array('result' => 'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }}
        else{
            if ($this->form_validation->run() == true && $this->Pipe_sizes_model->update($id,$_POST)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }
    public function delete_pipe_size()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Pipe_sizes_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/pipe_size'));
    }
    public function fetch_pipe_size_nps(){
        $results=$this->Pipe_sizes_model->get_all();
        if (count($results) > 0) {
            echo "<label class='control-label'>Pipe</label>";
            ?>
            <select id="pipe_size1"  name="array[pipe_size]" class="form-control input-sm">
                echo "<option  value=''>Select</option>";

                <?php foreach ($results as $row){

                    echo "<option  value='".trim($row->id)."'>$row->nps</option>";

                }?>
            </select>
            <?php
        }

    }
    public function fetch_pipe_schedule(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Pipe_sizes_model->get_by('id',$base_material);
            if (count($results) > 0) {
                $results=$results->schedule;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                echo "<label class='control-label'>Schedule</label>";
                ?>
                <select required id="pipe_thickness1" name="array[pipe_schedule]" class="form-control input-sm">
                    <option  value=''> Select </option>";

                    <?php foreach ($results as $row){

                        echo "<option  value=".trim($row).">$row</option>";

                    }?>
                </select>
                <?php
            }
        }
    }
    public function fetch_pipe_thickness(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        $pipe_size = ($_REQUEST["pipe_size"] <> "") ? trim($_REQUEST["pipe_size"]) : "";
        $pipe_size=$pipe_size-1;

        if ($base_material <> "") {
            $results=$this->Pipe_sizes_model->get_by('id',$base_material);
            if (count($results) > 0) {
                $results=$results->thickness;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                echo "<label class='control-label'>Thickness</label>";

                echo "<input required class='form-control' name='array[pipe_thickness]' value='".trim($results[$pipe_size])."'>";
            }
        }
    }
    public function copper_nickel_tubing(){

        $message = $this->session->flashdata('message');
        if(!empty($message))
        {
            $this->smartyci->assign('message', $message);


        }

        $this->smartyci->assign('title', 'Copper Nicekl Tubing');
        $this->smartyci->assign('active_copper_nickel_tubing', 'active');


        // Set content page
        $this->smartyci->assign('body', 'contents/parameters/copper_nickel_tubing_list.php');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');

        // Render view on main layout
        $this->smartyci->display('contents/layout.html');
    }
    public function copper_nickel_tubing_list_json()
    {


        $process = $this->Copper_nickel_tubings_model->get_all();
        $json = array();
        foreach ($process as $row) {
            /**  MAKE ARRAY NON ASSOCIATIVE **/
            $json[] = array(
                "<input  type='checkbox' id='checkbox_".$row->id."' value='".$row->id."' name='delete[]' /> ",
//<a href=" . base_url('parameters/process_edit') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                "<a style='text-decoration: none' href=" . base_url('parameters/add_copper_nickel_tubing') . "/$row->id><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;&nbsp;$row->nps</a>",
                $row->schedule,
                $row->thickness,
            );
        }
        /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
        $response = array();
        $response['success'] = true;
        $response['aaData'] = $json;
        echo json_encode($response);
    }
    public function add_copper_nickel_tubing($id=null){
        $this->smartyci->assign('active_copper_nickel_tubing', 'active');

        if($id==null){
            $message= $this->session->flashdata('message');
            if(!empty($message))
            {
                $this->smartyci->assign('message', $message);


            }
//        $welder_data=$this->User_model->get($welder_id);

//        $uni_form=$this->Uiform_form_model->getListForms();

//        $welder_data=$this->User_model->get_all();

//        Kint::dump($welder_data);
//        exit();
//        $this->smartyci->assign('uni_form', $uni_form);

//        $welder_form=$welder_data->forms;
//        $welder_form=explode(';',$welder_form);
//        $this->smartyci->assign('welder_id', $welder_id);


            $this->smartyci->assign('title', 'Add Copper Nickel Tubing Thickness ');

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
            $this->smartyci->assign('body', 'contents/parameters/add_copper_nickel_tubing.php');

            // Set active menu
            $this->smartyci->assign('active_tables', 'active');

            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
        else{
            $detail = $this->Copper_nickel_tubings_model->get($id);
            $this->smartyci->assign('detail', $detail);

            $this->smartyci->assign('title', 'Edit Copper Nickel Tubing Thickness');
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
            $this->smartyci->assign('body', 'contents/parameters/add_copper_nickel_tubing.php');

            // Set active menu
            $this->smartyci->assign('welder_list', 'active');


            // Render view on main layout
            $this->smartyci->display('contents/layout.html');
        }
    }
    public function save_copper_nickel_tubing($id=null){

        $this->form_validation->set_rules('nps', 'NPS', 'required|trim');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('thickness', 'Thickness', 'required|trim');

        if($id==null){
            if ($this->form_validation->run() == true && $this->Copper_nickel_tubings_model->insert($_POST)){
                $success = array('result' => 'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }}
        else{
            if ($this->form_validation->run() == true && $this->Copper_nickel_tubings_model->update($id,$_POST)){
                $success = array('result' => 'true','edit'=>'true');
                echo json_encode($success);

            }else{
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $success = array('result' => $this->data['message']);
                echo json_encode($success);
            }
        }
    }
    public function delete_copper_nickel_tubing()
    {
        foreach ($_POST['delete'] as $row){
            $data[]=$row;
        }



//        $this->db->trans_start();
//        $user_detail=$this->User_model->user_info($id);

        $this->Copper_nickel_tubings_model->delete_many($data);
        $this->session->set_flashdata('message', "Records Deleted Successfully");
//        $data=array('user_id'=>$this->session->userdata('user_id'),
//            'what'=>'Deleted '.$user_detail[0]->role.' With Badge Number '.$user_detail[0]->badge_number,
//            'user_table_id'=>$id,
//        );
//        $this->action_log($data);
//
//        $this->db->trans_complete();

        redirect(base_url('parameters/copper_nickel_tubing'));
    }
    public function fetch_copper_nickel_tubing_nps(){
            $results=$this->Copper_nickel_tubings_model->get_all();
            if (count($results) > 0) {
                echo "<label class='control-label'>Pipe</label>";
                ?>
                <select id="pipe_size_copper_nickel" required name="pipe_size_copper" class="form-control input-sm">
                    echo "<option  value=''>Select</option>";

                    <?php foreach ($results as $row){

                        echo "<option  value='$row->id'>$row->nps</option>";

                    }?>
                </select>
                <?php
            }

    }
    public function fetch_copper_nickel_tubing_schedule(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        if ($base_material <> "") {
            $results=$this->Copper_nickel_tubings_model->get_by('id',$base_material);

            if (count($results) > 0) {
                $results1=$results->schedule;
                $results1=array_filter(explode("|",$results1));
                foreach ($results1 as $spe){
                    $v[]=trim($spe);
                }
                $results1=$v;
                echo "<label class='control-label'>Schedule</label>";
                ?>
                <select id="pipe_schedule_copper_nickel" name="array[pipe_schedule_copper]" required class="form-control input-sm">
                    <option  value=""> Select </option>";
                    <?php foreach ($results1 as $row){

                        echo "<option> $row </option>";

                    }?>
                </select>
                <?php
            }
        }
    }
    public function fetch_copper_nickel_tubing_thickness(){
        $base_material = ($_REQUEST["base_material"] <> "") ? trim($_REQUEST["base_material"]) : "";
        $pipe_size = ($_REQUEST["pipe_size"] <> "") ? trim($_REQUEST["pipe_size"]) : "";
$pipe_size=$pipe_size-1;
        if ($base_material <> "") {
            $results=$this->Copper_nickel_tubings_model->get_by('id',$base_material);
            if (count($results) > 0) {
                $results=$results->thickness;
                $results=array_filter(explode("|",$results));
                foreach ($results as $spe){
                    $v[]=trim($spe);
                }
                $results=$v;
                echo "<label class='control-label'>Thickness</label>";

                echo "<input required class='form-control' name='pipe_thickness_copper' value='".trim($results[$pipe_size])."'>";
            }
        }
    }
}
