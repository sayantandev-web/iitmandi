<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Faculty extends CI_Controller {
    public function __construct(){
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        date_default_timezone_set('Asia/Calcutta');
    }

    public function index() { 
        $data['faculty'] = $this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1, 'is_delete'=>1, 'position'=>1));
        //$data['faculty'] = $this->db->query("SELECT iitmandi_team.fname,iitmandi_designation.designation,iitmandi_team.specialization from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.position = iitmandi_designation.user_type WHERE iitmandi_team.position = 1 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
        $data['designation'] = $this->common_model->get_data_array(DESIGNATION,'','','','','','',DESIGNATION.".id DESC",array('status'=>1, 'is_delete'=>1, 'user_type'=>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Faclity List';
        $this->load->view('faculty_list',$data);
    }

    public function faculty_details($id='') { 
        //echo base64_decode($id); die;
        $data['about_me']=$data['result']=$this->common_model->get_data(TEAM,array('id'=>base64_decode($id)));
        $data['education']=$this->common_model->get_data_array(EDUCATION,array('user_id'=>base64_decode($id),' status'=>1, 'is_delete'=>1));
        $data['experience']=$this->common_model->get_data_array(EXPERIENCE,array('user_id'=>base64_decode($id), 'status'=>1, 'is_delete'=>1));
        $data['journal']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Journal Article', 'status'=>1, 'is_delete'=>1));
        $data['conference']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Conference Paper', 'status'=>1, 'is_delete'=>1));
        $data['book_chapter']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Book Chapter', 'status'=>1, 'is_delete'=>1));
        $data['book']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Book', 'status'=>1, 'is_delete'=>1));
        $data['patent']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Patent', 'status'=>1, 'is_delete'=>1));
        $data['award']=$this->common_model->get_data_array(AWARDEVENT,array('user_id'=>base64_decode($id), 'type'=> 'Award', 'status'=>1, 'is_delete'=>1));
        $data['event']=$this->common_model->get_data_array(AWARDEVENT,array('user_id'=>base64_decode($id), 'type'=> 'Event', 'status'=>1, 'is_delete'=>1));
        $data['project']=$this->common_model->get_data_array(PROJECT,'','','','','','',PROJECT.".id DESC",array('project_incharge'=>base64_decode($id),'is_delete'=>1));
        $data['lab_member']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('supervisor'=>base64_decode($id),'is_delete'=>1));
        $data['copening']=$this->common_model->get_data_array(CRNTOPENING,'','','','','','',CRNTOPENING.".id DESC",array('user_id'=>base64_decode($id),'is_delete'=>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Faculty Detais';
        $this->load->view('faculty/dashboard',$data);
    }

    public function get_filter_data() {
        $fd_id = $this->input->post('fd_id');
        $get_data = $this->db->query("SELECT iitmandi_team.id, iitmandi_team.fname,iitmandi_designation.designation,iitmandi_team.specialization,iitmandi_team.team_image from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.designation = $fd_id and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");

        if(!empty($get_data->result_array())) {
            $html='';
            if(!empty($get_data->result_array())) {
                foreach($get_data->result_array() as $row){
                    $html .='<div class="col-sm-2" style="border: 1px solid; margin-right: 40px; float: left; padding:0px; border-radius: 20px 20px 0 0px">';
                    $html .='<img src="'.base_url().'uploads/our_team/'.$row['team_image'].'" alt="" style="width: 261px;height: 250px; border-radius: 20px 20px 0 0px">';
                    $html .='<a href="'.base_url().'pages/faculty_details/'.base64_encode($row['id']).'"><p style="text-align: center; background: #fff;">'.$row['fname'].'<br><small>'.$row['designation'].'</small></p></a></div>';
                }
            }
        } else {
            $html='<p style="text-align: center;">No Data Found related to filter options you have selected.</p>';  
        }
        echo $html;
    }

    public function filterByspetialization() {
        $fs_id = $this->input->post('fs_id');
        $get_data = $this->db->query("SELECT iitmandi_team.id, iitmandi_team.fname,iitmandi_designation.designation,iitmandi_team.specialization,iitmandi_team.team_image from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 1 AND iitmandi_team.specialization = $fs_id and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1");

        if(!empty($get_data->result_array())) {
            $html='';
            if(!empty($get_data->result_array())) {
                foreach($get_data->result_array() as $row){
                    $html .='<div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">';
                    $html .='<img src="'.base_url().'uploads/our_team/'.$row['team_image'].'" alt="">';
                    $html .='<a href="'.base_url().'pages/faculty_details/'.base64_encode($row['id']).'"><p style="text-align: center; background: #fff;">'.$row['fname'].'<br><small>'.$row['designation'].'</small></p></a>';
                }
            }
        } else {
            $html='<p style="text-align: center;">No Data Found related to filter options you have selected.</p>';  
        }
        echo $html;
    }

}