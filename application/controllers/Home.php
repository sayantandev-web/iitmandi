<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Home extends CI_Controller {
    public function __construct(){
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        $this->load->library('email');
        date_default_timezone_set('Asia/Calcutta');
    }

    public function index() { 
        $data['banner'] = $this->common_model->get_data_array(BANNER,array('status' =>1,'is_delete' =>1),'','','','','',BANNER.".id ASC");
        $data['home_about'] = $this->common_model->get_data(HOMEABOUT,array('id'=>1));
        $data['home_message'] = $this->common_model->get_data(HOMEMESSAGE,array('id'=>1));
        $data['count_r'] = $this->db->query("SELECT COUNT(id) as 'Total' FROM `iitmandi_publication` WHERE `status` = 1 AND `is_delete` = 1");
        $data['count_f'] = $this->db->query("SELECT COUNT(id) as 'Total' FROM `iitmandi_team` WHERE `position` = 1 AND `status` = 1 AND `is_delete` = 1");
        $data['count_l'] = $this->db->query("SELECT COUNT(id) as 'Total' FROM `iitmandi_labsection` WHERE `status` = 1 AND `is_delete` = 1");
        $data['news'] = $this->common_model->get_data_array(STORAGES,array('status' =>1,'is_delete' =>1),'','','','','',STORAGES.".add_date DESC",'','','');
        $data['events'] = $this->common_model->get_data_array(EVENTS,array('status' =>1,'is_delete' =>1),'','','','','',EVENTS.".event_date DESC",'','','');
        $data['header'] = $this->load->view('includes/header','',true);
        $data['footer'] = $this->load->view('includes/footer','',true);
        $data['title'] = 'Home';
        $this->load->view('home',$data);
    }

    public function login() { 
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Login Page';
        $this->load->view('login',$data);
    }

    public function specialization(){
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = 'Specialization';
        $this->load->view('specialization',$data);
    }

    public function programs(){
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = 'Programs';
        $this->load->view('programs',$data);
    }

    public function courses(){
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = 'Courses';
        $this->load->view('courses',$data);
    }
    
    public function admission(){
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = 'Admission';
        $this->load->view('admission',$data);
    }

    public function contactus() {
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = "Contact Us";
        $this->load->view('contact',$data);
    }

    public function contactviamail(){
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $to = $this->input->post('email');
        $toname = $this->input->post('name');
        $mail->setFrom($to,$toname);
        $mail->addAddress('mlzsmaheshtala@sainischools.net', 'Saini School Maheshtala');
        $mail->Subject = 'Contact Us Email';
        $mail->isHTML(true);
        $mailContent = '<strong>Dear Admin,</strong><br><p>'.$this->input->post('name').' want to contact with you.<br><strong>Email</strong>: '.$this->input->post('email').'<br><strong>Phone Number</strong>: '.$this->input->post('phone').'<br><strong>Message</strong>:<br> '.nl2br($this->input->post('message')).'</p>';
        $mail->Body = $mailContent;
        echo $mail->send();
    }

    public function committees() { 
        $data['committees']=$this->common_model->get_data_array(COMMITTEES,'','','','','','','',array('status' =>1,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='House & Committees';
        $this->load->view('committees',$data);
    }

    public function research() { 
        $data['team']=$this->common_model->get_data_array(TEAM,'','','','','','','',array('position'=>[1],'status' =>1,'is_delete' =>1));
        $data['research']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>1, 'status' =>1, 'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Research';
        $this->load->view('research',$data);
    }

    public function consultancy() { 
        $data['team']=$this->common_model->get_data_array(TEAM,'','','','','','','',array('position'=>[1],'status' =>1,'is_delete' =>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2, 'status' =>1, 'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Consultancy';
        $this->load->view('consultancy',$data);
    }

    public function filterByFundingAgency() { 
        $fa_id = $this->input->post('fa_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('funding_agency' => $fa_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['pstatus'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterByStartingYear() { 
        $sy_id = $this->input->post('sy_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('starting_year' => $sy_id, 'project_type' =>$pt_id, 'status' =>1, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['pstatus'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterByfacultyMember() { 
        $fm_id = $this->input->post('fm_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('project_incharge' => $fm_id, 'project_type' =>$pt_id, 'status' =>1, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['pstatus'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterBystatus() { 
        $st_id = $this->input->post('st_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('pstatus' => $st_id, 'project_type' =>$pt_id, 'status' =>1, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['pstatus'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function project_details() { 
        $p_id = $this->input->post('p_id');
        $pt_id = $this->input->post('pt_id');
        $project_data = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.id as 'teamid', CONCAT(iitmandi_team.fname, ' ', iitmandi_team.mname, ' ', iitmandi_team.lname) as 'fname', iitmandi_team.status, iitmandi_team.is_delete FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.project_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.project_type = $pt_id AND iitmandi_project.is_delete = 1");
        $project_data1 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.id as 'teamid', CONCAT(iitmandi_team.fname, ' ', iitmandi_team.mname, ' ', iitmandi_team.lname) as 'copi', iitmandi_team.status, iitmandi_team.is_delete FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.coproject_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.project_type = $pt_id AND iitmandi_project.is_delete = 1");
        $project_data = $project_data->result_array();
        $project_data1 = $project_data1->result_array();
        if (!empty($project_data) and !empty($project_data1)) {
            $result = array_merge($project_data[0],$project_data1[0]);
            echo json_encode($result);
        } else {
            echo json_encode($project_data[0]);
        }
    }

    public function project_fdetails() { 
        $p_id = $this->input->post('p_id');
        $project_data = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.id as 'teamid', CONCAT(iitmandi_team.fname, ' ', iitmandi_team.mname, ' ', iitmandi_team.lname) as 'fname', iitmandi_team.status, iitmandi_team.is_delete FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.project_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.is_delete = 1");
        $project_data2 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.id as 'teamid', CONCAT(iitmandi_team.fname, ' ', iitmandi_team.mname, ' ', iitmandi_team.lname) as 'copi', iitmandi_team.status, iitmandi_team.is_delete FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.coproject_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.is_delete = 1");
        $project_data = $project_data->result_array();
        $project_data2 = $project_data2->result_array();
        if (!empty($project_data) and !empty($project_data2)) {
            $result = array_merge($project_data[0],$project_data2[0]);
            echo json_encode($result);
        } else {
            echo json_encode($project_data[0]);
        }
    }

    public function journal() { 
        //$data['ourteam']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('position'=>8,'status'=>1,'is_delete'=>1));
        $data['ourteam']=$this->db->query("SELECT * FROM `iitmandi_team` WHERE `position` IN(1) AND `status` = 1 AND `is_delete` = 1");
        $data['journal']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('publication_type'=>'Journal Article', 'status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }
    public function conference() { 
        //$data['ourteam']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1,'is_delete'=>1));
        $data['ourteam']=$this->db->query("SELECT * FROM `iitmandi_team` WHERE `position` IN(1) AND `status` = 1 AND `is_delete` = 1");
        $data['conference']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('publication_type'=>'Conference Paper', 'status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }
    public function book_chapter() { 
        //$data['ourteam']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1,'is_delete'=>1));
        $data['ourteam']=$this->db->query("SELECT * FROM `iitmandi_team` WHERE `position` IN(1) AND `status` = 1 AND `is_delete` = 1");
        $data['bookc']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('publication_type'=>'Book Chapter', 'status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }
    public function book() { 
        //$data['ourteam']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1,'is_delete'=>1));
        $data['ourteam']=$this->db->query("SELECT * FROM `iitmandi_team` WHERE `position` IN(1) AND `status` = 1 AND `is_delete` = 1");
        $data['book']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('publication_type'=>'Book', 'status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }
    public function patent() { 
        //$data['ourteam']=$this->common_model->get_data_array(TEAM,'','','','','','',TEAM.".id DESC",array('status'=>1,'is_delete'=>1));
        $data['ourteam']=$this->db->query("SELECT * FROM `iitmandi_team` WHERE `position` IN(1) AND `status` = 1 AND `is_delete` = 1");
        $data['patent']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('publication_type'=>'Patent', 'status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }

    public function publication_details($id) { 
        $data['pub_details']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('id'=>$id,'status'=>1,'is_delete'=>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publication Details';
        $this->load->view('publication_details',$data);
    }

    public function teaching_labs() { 
        $data['teachinglabs']=$this->common_model->get_data_array(LABSECTION,'','','','','','',LABSECTION.".id DESC",array('typeofLab'=>1,'status'=>1,'is_delete'=>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Teaching Labs';
        $this->load->view('teaching_labs',$data);
    }

    public function teaching_labs_details($labname) { 
        $data['labdetails']=$this->db->query("SELECT iitmandi_labsection.id, iitmandi_labsection.labname, iitmandi_labsection.page_slug, iitmandi_labsection.description, iitmandi_labsection.specialization, iitmandi_labsection.typeofLab, iitmandi_labsection.coordinator, iitmandi_labsection.cocooordinator, iitmandi_labsection.cover_photo, iitmandi_labsection.status, iitmandi_labsection.is_delete, iitmandi_labequipment.equipment_name, iitmandi_labequipment.description as 'equipment_description', iitmandi_labequipment.lab_name, iitmandi_labequipment.eqpmnt_img, iitmandi_labequipment.status, iitmandi_labequipment.is_delete FROM `iitmandi_labequipment` JOIN iitmandi_labsection ON iitmandi_labsection.page_slug = iitmandi_labequipment.lab_name WHERE iitmandi_labsection.page_slug = '".$labname."'");
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Teaching Labs Details';
        $this->load->view('teaching_labs_details',$data);
    }

    public function research_lab() { 
        $data['researchlab']=$this->common_model->get_data_array(LABSECTION,'','','','','','',LABSECTION.".id DESC",array('typeofLab'=>2,'status'=>1,'is_delete'=>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Research Labs';
        $this->load->view('research_lab',$data);
    }

    public function research_labs_details($labname) { 
        $data['rlabdetails']=$this->db->query("SELECT iitmandi_labsection.id, iitmandi_labsection.labname, iitmandi_labsection.page_slug, iitmandi_labsection.description, iitmandi_labsection.specialization, iitmandi_labsection.typeofLab, iitmandi_labsection.coordinator, iitmandi_labsection.cocooordinator, iitmandi_labsection.cover_photo, iitmandi_labsection.status, iitmandi_labsection.is_delete, iitmandi_labequipment.equipment_name, iitmandi_labequipment.description as 'equipment_description', iitmandi_labequipment.lab_name, iitmandi_labequipment.eqpmnt_img, iitmandi_labequipment.status, iitmandi_labequipment.is_delete FROM `iitmandi_labequipment` JOIN iitmandi_labsection ON iitmandi_labsection.page_slug = iitmandi_labequipment.lab_name WHERE iitmandi_labsection.page_slug = '".$labname."'");
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Research Labs Details';
        $this->load->view('research_labs_details',$data);
    }

    public function filterByYear() {
        $yrid = $this->input->post('yrid');
        $pub_type = $this->input->post('pub_type');
        $get_data = $this->db->query("SELECT * FROM `iitmandi_publication` WHERE `publication_type` = '$pub_type' AND `publish_date` LIKE '%$yrid%' and `status` = 1 and `is_delete` = 1");

        if(!empty($get_data->result_array())) {
            $html='';
            $j=1;
            foreach($get_data->result_array() as $row){
                $html .='<tbody><tr><td>'.$j.')</td>';
                $author = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row["author_name"].")");
                    //echo "<pre>"; print_r($author->result_array());
                    $value = $author->result_array();
                    $count = count($author->result_array());
                    for($i = 0; $i < $count; $i++) {
                        if ($value[$i]['mname'] == '') {
                            $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['fname'], 0, 1).".";
                        } else {
                            $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['mname'], 0, 1).", ".substr($value[$i]['fname'], 0, 1).".";
                        }
                    }
                    $lastItem = array_pop($commonValues);
                    $text = implode(', ', $commonValues); // a, b 
                    if ($text == ''){
                        $text .= $lastItem; 
                    } else {
                        $text .= ', & '.$lastItem; // a, b and c
                    }    
                $html .='<td style="text-align: justify;">'.$text.' ('.date("Y", strtotime($row["publish_date"])).'). '.$row["paper_title"].'. '.$row["journal_name"].', '.$row["volume_number"].'('.$row["issue_number"].'), '.$row["page_number"].'. <a href='.$row["external_Link"].' target="_blank">'.$row["external_Link"].'</a></td><td><a href='.base_url().'pages/publication/publication_details/'.$row["id"].' class="btn btn-primary">View More</button></td></tr><input type="text" id="pub_type" value="'.$row["publication_type"].'"></tbody>';
            }
        } else {
            $html='<p style="text-align: center;">No Data Found related to filter options you have selected.</p>';  
        }
        echo $html;
    }

    public function filterByAuthor() {
        $athrid = $this->input->post('athrid');
        $pub_type = $this->input->post('pub_type');
        $get_data = $this->db->query("SELECT * FROM `iitmandi_publication` WHERE instr(concat(',', author_name, ','), ',$athrid,') AND `publication_type` = '".$pub_type."' AND `status` = 1 AND `is_delete` = 1");
        if(!empty($get_data->result_array())) {
            $html='';
            $j=1;
            foreach($get_data->result_array() as $row){
                $html .='<tbody><tr><td>'.$j.')</td>';
                $author = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row["author_name"].")");
                    //echo "<pre>"; print_r($author->result_array());
                    $value = $author->result_array();
                    $count = count($author->result_array());
                    for($i = 0; $i < $count; $i++) {
                        if ($value[$i]['mname'] == '') {
                            $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['fname'], 0, 1).".";
                        } else {
                            $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['mname'], 0, 1).", ".substr($value[$i]['fname'], 0, 1).".";
                        }
                    }
                    $lastItem = array_pop($commonValues);
                    $text = implode(', ', $commonValues); // a, b 
                    if ($text == ''){
                        $text .= $lastItem; 
                    } else {
                        $text .= ', & '.$lastItem; // a, b and c
                    }    
                $html .='<td style="text-align: justify;">'.$text.' ('.date("Y", strtotime($row["publish_date"])).'). '.$row["paper_title"].'. '.$row["journal_name"].', '.$row["volume_number"].'('.$row["issue_number"].'), '.$row["page_number"].'. <a href='.$row["external_Link"].' target="_blank">'.$row["external_Link"].'</a></td><td><a href='.base_url().'pages/publication/publication_details/'.$row["id"].' class="btn btn-primary">View More</button></td></tr><input type="text" id="pub_type" value="'.$row["publication_type"].'"></tbody>';
            }
        } else {
            $html='<p style="text-align: center;">No Data Found related to filter options you have selected.</p>';  
        }
        echo $html;
    }

    public function ck_upload() {
        // Define file upload path 
        $upload_dir = array( 
            'img'=> './uploads/ckeditor/', 
        ); 
        print_r($upload_dir); die;
        // Allowed image properties  
        $imgset = array( 
            'maxsize' => 2000, 
            'maxwidth' => 1024, 
            'maxheight' => 800, 
            'minwidth' => 10, 
            'minheight' => 10, 
            'type' => array('bmp', 'gif', 'jpg', 'jpeg', 'png'), 
        ); 
        
        // If 0, will OVERWRITE the existing file 
        define('RENAME_F', 1); 
        
        /** 
         * Set filename 
         * If the file exists, and RENAME_F is 1, set "img_name_1" 
         * 
         * $p = dir-path, $fn=filename to check, $ex=extension $i=index to rename 
         */ 
        function setFName($p, $fn, $ex, $i){ 
            if(RENAME_F ==1 && file_exists($p .$fn .$ex)){ 
                return setFName($p, F_NAME .'_'. ($i +1), $ex, ($i +1)); 
            }else{ 
                return $fn .$ex; 
            } 
        } 
        
        $re = ''; 
        if(isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) { 
        
            define('F_NAME', preg_replace('/\.(.+?)$/i', '', basename($_FILES['upload']['name'])));   
        
            // Get filename without extension 
            $sepext = explode('.', strtolower($_FILES['upload']['name'])); 
            $type = end($sepext);    /** gets extension **/ 
            
            // Upload directory 
            $upload_dir = in_array($type, $imgset['type']) ? $upload_dir['img'] : $upload_dir['audio']; 
            $upload_dir = trim($upload_dir, '/') .'/'; 
        
            // Validate file type 
            if(in_array($type, $imgset['type'])){ 
                // Image width and height 
                list($width, $height) = getimagesize($_FILES['upload']['tmp_name']); 
        
                if(isset($width) && isset($height)) { 
                    if($width > $imgset['maxwidth'] || $height > $imgset['maxheight']){ 
                        $re .= '\\n Width x Height = '. $width .' x '. $height .' \\n The maximum Width x Height must be: '. $imgset['maxwidth']. ' x '. $imgset['maxheight']; 
                    } 
        
                    if($width < $imgset['minwidth'] || $height < $imgset['minheight']){ 
                        $re .= '\\n Width x Height = '. $width .' x '. $height .'\\n The minimum Width x Height must be: '. $imgset['minwidth']. ' x '. $imgset['minheight']; 
                    } 
        
                    if($_FILES['upload']['size'] > $imgset['maxsize']*1000){ 
                        $re .= '\\n Maximum file size must be: '. $imgset['maxsize']. ' KB.'; 
                    } 
                } 
            }else{ 
                $re .= 'The file: '. $_FILES['upload']['name']. ' has not the allowed extension type.'; 
            } 
            
            // File upload path 
            $f_name = setFName($_SERVER['DOCUMENT_ROOT'] .'/'. $upload_dir, F_NAME, ".$type", 0); 
            $uploadpath = $upload_dir . $f_name; 
        
            // If no errors, upload the image, else, output the errors 
            if($re == ''){ 
                if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) { 
                    $CKEditorFuncNum = $_GET['CKEditorFuncNum']; 
                    $url = 'ckeditor/'. $upload_dir . $f_name; 
                    $msg = F_NAME .'.'. $type .' successfully uploaded: \\n- Size: '. number_format($_FILES['upload']['size']/1024, 2, '.', '') .' KB'; 
                    $re = in_array($type, $imgset['type']) ? "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>":'<script>var cke_ob = window.parent.CKEDITOR; for(var ckid in cke_ob.instances) { if(cke_ob.instances[ckid].focusManager.hasFocus) break;} cke_ob.instances[ckid].insertHtml(\' \', \'unfiltered_html\'); alert("'. $msg .'"); var dialog = cke_ob.dialog.getCurrent();dialog.hide();</script>'; 
                }else{ 
                    $re = '<script>alert("Unable to upload the file")</script>'; 
                } 
            }else{ 
                $re = '<script>alert("'. $re .'")</script>'; 
            } 
        } 
        
        // Render HTML output 
        @header('Content-type: text/html; charset=utf-8'); 
        echo $re;
    }
}