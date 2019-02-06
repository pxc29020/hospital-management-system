<?php
/*
 * Created By Pradeep Chandra Chitti
 * studentid: 700672902
 * University Of Central Missouri
 */
class Admin Extends CI_Controller{
     public function adminlogPage(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
             $this->load->view('admindashboard');    
        }
    }
    public function manageusers(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('manageusers');
          }
    }
    public function manageinactiveusers(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('manageinactiveusers');
          }
    }
    public function managedoctors(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('managedoctors');
          }
    }
    public function adddoctor(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('adddoctor');
          }
    }
     public function addspl(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('addspl');
          }
    }
    public function add_spl(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $data = $this->input->post();
              unset($data['submit']);
              if($this->Users_model->addspl($data)){
                  echo 'success';
              } else {
                  echo 'fail'; 
              }
          }
    }
      public function addpatient(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('addpatient');
          }
    }
    public function inactivedoctor(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->inactivedoctor($id)){
                  $this->session->set_flashdata('success','Doctor Made Inactive');
                  redirect('Admin/managedoctors');
              } else {
                  echo 'fail'; 
              }
          }
    }
  public function inactiveuser(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->inactiveuser($id)){
                  $this->session->set_flashdata('success','Doctor Made Inactive');
                  redirect('Admin/manageusers');
              } else {
                  echo 'fail'; 
              }
          }
    }
 public function activeuser(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->activeuser($id)){
                  $this->session->set_flashdata('success','Doctor Made active');
                  redirect('Admin/manageinactiveusers');
              } else {
                  echo 'fail'; 
              }
          }
    }
 public function updateuser(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $this->load->view('adminupdateuser');
              // $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
          }
    }
    public function updatedoctor(){
     if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $this->load->view('adminupdatedoctor');
              // $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
          }   
    }

    public function adminupdateuser(){
     if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $data = $this->input->post();
     $id = $this->input->post('Id');
   unset($data['submit']);
    unset($data['insurance']);
  if($this->Users_model->adminupdateuser($id,$data)){
        
      $this->session->set_flashdata('response','Updated Successfully');
                 redirect('Admin/updateuser');
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//
             redirect('Admin/updateuser');
          }   
    }
     public function adminupdatedoctor(){
     if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $data = $this->input->post();
     $id = $this->input->post('Id');
   unset($data['submit']);
    unset($data['insurance']);
  if($this->Users_model->adminupdatedoc($id,$data)){
        
      $this->session->set_flashdata('response','Updated Successfully');
                 redirect('Admin/manageusers');
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//
             redirect('Admin/manageusers');
          }   
    }
public function admin_adddoctor(){
     if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $data = $this->input->post();
     //$id = $this->input->post('Id');
   unset($data['submit']);
   // unset($data['insurance']);
  if($this->Users_model->admin_adddoctor($data)){
        
      $this->session->set_flashdata('response','Updated Successfully');
                 redirect('Admin/admindashboard');
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//
             redirect('Admin/admindashboard');
          }   
    }//
  public function admin_adduser(){
     if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
   $data = $this->input->post();
     //$id = $this->input->post('Id');
   unset($data['submit']);
   // unset($data['insurance']);
  if($this->Users_model->admin_adduser($data)){
        
      $this->session->set_flashdata('response','Updated Successfully');
                 redirect('Admin/admindashboard');
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//
             redirect('Admin/admindashboard');
          }   
    }//
    public function deleteuser(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->deleteuser($id)){
                  $this->session->set_flashdata('warning','user deleted permanently');
                  redirect('Admin/manageinactiveusers');
              } else {
                  echo 'fail'; 
              }
          }
    }
 public function deletedoctor(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->deletedoctor($id)){
                  $this->session->set_flashdata('warning','Doctor deleted permanently');
                  redirect('Admin/manageinactivedoctors');
              } else {
                  echo 'fail'; 
              }
          }
    }
 public function activedoctor(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
     $id  = $this->uri->segment(3);
     //  print_r($id);
     //  die();
              if($this->Users_model->activedoctor($id)){
                  $this->session->set_flashdata('success','Doctor Made active');
                  redirect('Admin/manageinactivedoctors');
              } else {
                  echo 'fail'; 
              }
          }
    }
    public function manageinactivedoctors(){
        if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('adminlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('manageinactivedoctors');
          }
    }
    public function admindashboard(){
         $t = $this->session->userdata;
         
          //if($this->session->userdata('IsDoctor') == 0 ){
            //  $t = $this->session->userdata;
             // print_r($t);
            //  die();
            //  if($t){
         
        if( $this->session->userdata('IsDoctor') == 2){
              $this->load->view('admindashboard', $t); 
         } else {  return redirect('Admin/adminlogPage');
              
             //die('User/userdashboard');
         }
          
            //  }
         // } else {
          //    return redirect('User/LoginPage');  
         // }
    }
   public function logout(){
     $this->session->sess_destroy();
      $this->load->view('adminlogin');  
    }
}