<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Created By Pradeep Chandra Chitti
 * studentid: 700672902
 * University Of Central Missouri
 */
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
             if( $this->session->userdata('IsDoctor') == ''){
             $this->load->view('welcome_message'); }
             elseif($this->session->userdata('IsDoctor') == 0){
     redirect('User/LoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 1){
     redirect('Doctor/DoctorLoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 0){
     redirect('Admin/AdminLoginPage');
             }
	}
        public function about(){
           
  if( $this->session->userdata('IsDoctor') == ''){
             $this->load->view('about'); }
             elseif($this->session->userdata('IsDoctor') == 0){
     redirect('User/LoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 1){
     redirect('Doctor/DoctorLoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 2){
     redirect('Admin/AdminLoginPage');
             }
             
        
        }
       public function contactus(){
           
         if( $this->session->userdata('IsDoctor') == ''){
             $this->load->view('contactus'); }
             elseif($this->session->userdata('IsDoctor') == 0){
     redirect('User/LoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 1){
     redirect('Doctor/DoctorLoginPage');
             }
          elseif($this->session->userdata('IsDoctor') == 2){
     redirect('Admin/AdminLoginPage');
             }
       
    }
    public function Contact_us(){
        if( $this->session->userdata('IsDoctor') == ''){
           $data = $this->input->post();
           print_r($data);
           unset($data['submit']);
           if($this->Users_model->contactus($data)){
                 $this->session->set_flashdata('success','Request Submitted Will get back soon');
       redirect('Welcome/contactus');
           } else {
                 $this->session->set_flashdata('error','Request Submitted Will get back soon');
       redirect('Welcome/contactus');
           }
          
        }  
        }
       
     
}
