<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roles extends CI_Controller{

	public function __construct(){
		@parent::__construct();
		$this->load->library('pagination');
		$this->load->library('image_lib');
		if(!isset($_SESSION)) { 
            session_start(); 
        }
        if($this->session->userdata('uid') == ''){
            redirect(base_url().'admin/');
        }
	}

	public function index() {
		$data['roles']=$this->common_model->get_data_array(ROLES,'','','','','','',ROLES.".id DESC",array('status'=>1,'is_delete'=>1));
		$data['page_title'] = "Role Management";
		$data['header_scripts'] = $this->load->view('admin/includes/admin_header_scripts','',true);
	    $data['header']=$this->load->view('admin/includes/admin_header','',true);
	    $data['sidebar']=$this->load->view('admin/includes/admin_sidebar','',true);
		$data['footer']=$this->load->view('admin/includes/admin_footer','',true);
		$data['footer_scripts']=$this->load->view('admin/includes/admin_footer_scripts','',true);
		$this->load->view('admin/role_list',$data);
	} 
	
	public function add_role($id='') {
		if($this->input->post()) {
			$insArr=array();
			$insArr['role_name']=$this->input->post('role_name');
			$insArr['status']=$this->input->post('status');
			if(!empty($id)){
				$this->common_model->tbl_update(ROLES,array('id'=>$id),$insArr);
		    } else{
				$id = $this->common_model->tbl_insert(ROLES,$insArr);
			}
			if(!empty($id)) {
				$this->utilitylib->setMsg(SUCCESS_ICON.' Role Sucessfully updated','SUCCESS');
				redirect(base_url('admin/roles/add_role/'.$id));
		    } else {
		    	$this->utilitylib->setMsg(SUCCESS_ICON.' Role Sucessfully saved','SUCCESS');
				redirect(base_url()."admin/roles/add_role");
		    }
		}
		$data['role']=$this->common_model->get_data_row(ROLES,array('id'=>$id));
		if(!empty($id)){
			$data['page_title'] = "Edit Role";
		} else {
			$data['page_title'] = "Add Role";
		}
		$data['header_scripts'] = $this->load->view('admin/includes/admin_header_scripts','',true);
	    $data['header']=$this->load->view('admin/includes/admin_header','',true);
	    $data['sidebar']=$this->load->view('admin/includes/admin_sidebar','',true);
		$data['footer']=$this->load->view('admin/includes/admin_footer','',true);
		$data['footer_scripts']=$this->load->view('admin/includes/admin_footer_scripts','',true);
		$this->load->view('admin/add_role',$data);
	} 

	public function change_status($id) {
		$banner=$this->common_model->get_data(BANNER,array('id'=>$id));
		if($banner[0]['status']==1) {
			$status = array('status'=>2);
		} else {
			$status = array('status'=>1);
		}
		$this->common_model->tbl_update(BANNER,array('id'=>$id),$status);
		$this->utilitylib->setMsg('<i class="fa fa-info-circle" aria-hidden="true"></i> Status successfully changed.','SUCCESS');
		redirect(base_url()."admin/banner");
	}
	
	public function banner_delete($id) {
		$banner=$this->common_model->get_data(BANNER,array('id'=>$id));
		if($banner[0]['is_delete']==1) {
			$status = array('is_delete'=>2);
		} else {
			$status = array('is_delete'=>1);
		}
		$this->common_model->tbl_update(BANNER,array('id'=>$id),$status);
		$this->utilitylib->setMsg('<i class="fa fa-info-circle" aria-hidden="true"></i>Successfully Deleted.','SUCCESS');
		redirect(base_url()."admin/banner");
	}

	public function role_access($id='') {
		// if(!empty($id)) {
		// 	$data['roleAccessList'] = $this->db->query("SELECT page_list FROM iitmandi_role_access WHERE u_id = '".$id."'")->result_array();
		// 	$data['userdetails'] = $this->db->query("SELECT user_id, fname, lname, email FROM iitmandi_admin WHERE user_id = '".$id."'")->row();
		// } 
		//$data['roleList'] = $this->db->query("SELECT * FROM `iitmandi_roles` WHERE `status` = '1' and `is_delete` = '1'")->result_array();
		$data['roleAccessList'] = $this->db->query("SELECT group_concat(page_list) as page_list FROM iitmandi_role_access WHERE u_id = '".$id."'")->row();
		$data['userdetails'] = $this->db->query("SELECT user_id, fname, lname, email FROM iitmandi_admin WHERE user_id = '".$id."'")->row();
		$data['pageList'] = $this->db->query("SELECT * FROM `iitmandi_pagelist` WHERE `status` = '1' and `is_delete` = '1'")->result_array();
		$data['page_title'] = "Access Management";
		$data['header_scripts'] = $this->load->view('admin/includes/admin_header_scripts','',true);
	    $data['header']=$this->load->view('admin/includes/admin_header','',true);
	    $data['sidebar']=$this->load->view('admin/includes/admin_sidebar','',true);
		$data['footer']=$this->load->view('admin/includes/admin_footer','',true);
		$data['footer_scripts']=$this->load->view('admin/includes/admin_footer_scripts','',true);
		$this->load->view('admin/role_access',$data);
	}

	public function add_access() {
		$uid = $this->input->post('uid');
		if(!empty($this->input->post())) {
			$insArr=array();
			$insArr1=array();
			$insArr['fname']=$this->input->post('fname');
			$insArr['lname']=$this->input->post('lname');
			$insArr['email']=$this->input->post('email');
			$insArr['user_type']='-1';
			$insArr['status']='1';
			$insArr['password']=md5($this->input->post('status'));
			$pageList = $this->input->post('pageList');
			if(!empty($uid)) {
				$this->common_model->tbl_update(ADMIN,array('user_id'=>$uid),$insArr);
				$this->db->query("DELETE FROM iitmandi_role_access WHERE u_id = '".$uid."'");
				$count = count($pageList);
				for ($i=0; $i < $count; $i++) { 
					$insArr1['u_id']= $uid;
					$insArr1['page_list']= $pageList[$i];
					$this->common_model->tbl_insert(ROLES_ACCESS,$insArr1);
				}
				$this->utilitylib->setMsg(SUCCESS_ICON.' Role updated','SUCCESS');
				redirect(base_url('admin/roles/role_access_list'));
			} else {
				$this->common_model->tbl_insert(ADMIN,$insArr);
				$insertId = $this->db->insert_id();
				$count = count($pageList);
				for ($i=0; $i < $count; $i++) { 
					$insArr1['u_id']= $insertId;
					$insArr1['page_list']= $pageList[$i];
					$this->common_model->tbl_insert(ROLES_ACCESS,$insArr1);
				}
				$this->utilitylib->setMsg(SUCCESS_ICON.' Role added','SUCCESS');
				redirect(base_url('admin/roles/role_access_list'));
			}
		}
		$data['role']=$this->common_model->get_data_row(ROLES,array('id'=>$id));
		if(!empty($id)){
			$data['page_title'] = "Edit Role";
		} else {
			$data['page_title'] = "Add Role";
		}
	}

	public function role_access_list() {
		$data['role_access_list'] = $this->db->query("SELECT * FROM iitmandi_role_access GROUP BY u_id")->result_array();
		$data['page_title'] = "Access List";
		$data['header_scripts'] = $this->load->view('admin/includes/admin_header_scripts','',true);
	    $data['header']=$this->load->view('admin/includes/admin_header','',true);
	    $data['sidebar']=$this->load->view('admin/includes/admin_sidebar','',true);
		$data['footer']=$this->load->view('admin/includes/admin_footer','',true);
		$data['footer_scripts']=$this->load->view('admin/includes/admin_footer_scripts','',true);
		$this->load->view('admin/role_access_list',$data);
	}
}