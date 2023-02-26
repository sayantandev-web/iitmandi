<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Postdocs extends CI_Controller {
    public function __construct(){
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        date_default_timezone_set('Asia/Calcutta');
    }

    public function index() { 
        $data['postdocs'] = $this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1, 'is_delete'=>1, 'position'=>2));
        $data['designation'] = $this->common_model->get_data_array(DESIGNATION,'','','','','','',DESIGNATION.".id DESC",array('status'=>1, 'is_delete'=>1, 'user_type'=>2));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Postdocs List';
        $this->load->view('postdocs_list',$data);
    }

    public function postdocs_details($id='') { 
        //echo base64_decode($id); die;
        $data['about_me']=$data['result']=$this->common_model->get_data(TEAM,array('id'=>base64_decode($id)));
        $data['education']=$this->common_model->get_data_array(EDUCATION,array('user_id'=>base64_decode($id),' status'=>1, 'is_delete'=>1));
        $data['experience']=$this->common_model->get_data_array(EXPERIENCE,array('user_id'=>base64_decode($id), 'status'=>1, 'is_delete'=>1));
        $data['journal']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Journal Article', 'status'=>1, 'is_delete'=>1));
        $data['conference']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Conference Paper', 'status'=>1, 'is_delete'=>1));
        $data['book_chapter']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Book Chapter', 'status'=>1, 'is_delete'=>1));
        $data['book']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Book', 'status'=>1, 'is_delete'=>1));
        $data['patent']=$this->common_model->get_data_array(PUBLICATION,array('user_id'=>base64_decode($id), 'publication_type'=>'Patent', 'status'=>1, 'is_delete'=>1));

        //$data['faculty_details']=$this->common_model->get_data_row(TEAM,array('id'=>base64_decode($id)));
        //$data['faculty_details']=$this->common_model->get_data_row(TEAM,array('id'=>base64_decode($id)));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Postdocs Detais';
        $this->load->view('postdocs_details',$data);
    }
}