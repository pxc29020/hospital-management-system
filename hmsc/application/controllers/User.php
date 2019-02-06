<?php
/*
 * Created By Pradeep Chandra Chitti
 * studentid: 700672902
 * University Of Central Missouri
 */
class User Extends CI_Controller{
     public function LoginPage(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('login');  
          }elseif( $this->session->userdata('IsDoctor') == 0){
             $this->load->view('userdashboard'); 
      
        /*
         * switch ($t) {
        case '':
            $this->load->view('login'); 
            break;
        case 0:
            $this->load->view('userdashboard');
            break;
       
    }
         */    
        } 
    }
    
    public function registration(){
         if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('userregistration');  
          }elseif( $this->session->userdata('IsDoctor') == 0){
             $this->load->view('userdashboard');   }
     elseif( $this->session->userdata('IsDoctor') == 1){
             redirect('doctor/doctordashboard');   }
    elseif( $this->session->userdata('IsDoctor') == 2){
             redirect('admin/admindashboard');   }
        /*
         * switch ($t) {
        case '':
            $this->load->view('login'); 
            break;
        case 0:
            $this->load->view('userdashboard');
            break;
       
    }
         */    
       
    
    }
    public function alpha_dash_space($str)
{
    return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
} 
    public function register_user(){
         if( $this->session->userdata('IsDoctor') == ''){
      //$this->load->view('userregistration'); 
        $this->form_validation->set_rules('FullName', 'FullName', 'callback_alpha_dash_space|is_unique[tbl_user.FullName]');
      $this->form_validation->set_rules('Password', 'Password', 'required');
     $this->form_validation->set_rules('Email', 'Email', 'is_unique[tbl_user.Email]'); 
      $this->form_validation->set_rules('phno', 'phno', 'is_unique[tbl_user.Email]'); 
    if($this->form_validation->run()== FALSE){

            // set error message text
            $this -> form_validation -> set_message('Email', 'Invalid Email Login');
            $this -> form_validation -> set_message('phno', 'Invalid phno Login');
            $this -> form_validation -> set_message('FullName', 'Invalid FullName Login');
            $this -> registration();
        $this->session->set_flashdata('warning','enter information correctly');
         
        redirect('User/registration');
    }elseif($this->form_validation->run()== TRUE) {
     $data = $this->input->post();
    unset($data['submit']); 
    if($this->Users_model->register($data)){
 $this->session->set_flashdata('success','registerd successfully');
      redirect('User/registration');
  } else {
      echo 'fail';
  }
          }
    
   // unset($data['insurance']);
 // if($this->Users_model->register($data)){
 // $this->session->set_flashdata('success','registerd successfully');
  //    redirect('User/registration');
  //} else {
  //    echo 'fail';
  //}
          }elseif( $this->session->userdata('IsDoctor') == 0){
             $this->load->view('userdashboard');   }
     elseif( $this->session->userdata('IsDoctor') == 1){
             redirect('doctor/doctordashboard');   }
    elseif( $this->session->userdata('IsDoctor') == 2){
             redirect('admin/admindashboard');   }
          
       
    
    }
    public function bookuserappointment(){
          if( $this->session->userdata('IsDoctor') == ''){
      $this->load->view('login');  
          }elseif( $this->session->userdata('IsDoctor') == 0){
             $this->load->view('bookuserappointment'); 
        }
    }
     public function userdashboard(){
         $t = $this->session->userdata;
         
          //if($this->session->userdata('IsDoctor') == 0 ){
            //  $t = $this->session->userdata;
             // print_r($t);
            //  die();
            //  if($t){
         
           if( $this->session->userdata('IsDoctor')== 0){
            $this->load->view('userdashboard', $t);  
         } else {  return redirect('User/LoginPage'); 
             
             //die('User/userdashboard');
         }
          
            //  }
         // } else {
          //    return redirect('User/LoginPage');  
         // }
    }
    public function updateuserprofile(){
        
        //keep it later
          if( $this->session->userdata('IsDoctor')== 0){
              $this->load->view('updateuserprofile');  
         } else {
        return redirect('User/LoginPage');
      //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
            
        }
             //till hear done for the day do remaining tomorrow show the profile data updateinsurance
    }
      public function updateuserinsurance(){
        
        //keep it later
         if( $this->session->userdata('IsDoctor')== 0){
           $this->load->view('updateinsurance');  
         } else {  return redirect('User/LoginPage'); 
        
      //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
             
        }
             //till hear done for the day do remaining tomorrow show the profile data 
    }
   public function updatepassword(){
        
        //keep it later
          if( $this->session->userdata('IsDoctor')== 0){
            $this->load->view('updateuserpassword');
         } else { return redirect('User/LoginPage'); 
        
      //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
              
        }
             //till hear done for the day do remaining tomorrow show the profile data
    }//
    public function user_updateinsurance(){
        if( $this->session->userdata('IsDoctor')== 0){
          $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 
   unset($data['submit']);
  unset($data['cpolicy']);
  unset($data['about']);
  unset($data['pid']);
  //print_r($data);
  //die();
   if($this->Users_model->user_updateinsurance($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('user/updateuserinsurance');    
         } else { return redirect('User/LoginPage');
     
         }
             //$this->load->view('userdashboard');
    }
public function updateuserpassword(){
        if( $this->session->userdata('IsDoctor')== 0){
           $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 
   //unset($data['submit']);

   if($this->Users_model->updateprofile($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('user/updatepassword'); 
         } else {  return redirect('User/LoginPage'); 
     
         }
             //$this->load->view('userdashboard');
    }
public function updateprofile(){
       if( $this->session->userdata('IsDoctor')== 0){
      $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 
   //unset($data['submit']);

   if($this->Users_model->updateprofile($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('user/updateuserprofile');      
         } else { return redirect('User/LoginPage'); 
      
         }
             //$this->load->view('userdashboard');
    }
    public function viewuserappointments(){
      if( $this->session->userdata('IsDoctor')== 0){
            $this->load->view('userappointments'); 
         } else { return redirect('User/LoginPage'); 
             
         }   
    }

    public function bookappointment(){
       if( $this->session->userdata('IsDoctor')== 0){
          $appointmentdate = $this->input->post('txtDate');
              $appointmenttime = $this->input->post('time');
       
                 // print_r($check);
       $data = $this->input->post();
$check = $this->Users_model->check($data);

   if($check){
      $this->session->set_flashdata('warning', 'appointment already booked');
  
         } else {
            unset($data['submit']);
   if($this->Users_model->bookappointment($data)){
       $this->session->set_flashdata('success', 'appointment booked ' ,$appointmenttime, $appointmentdate );
   } else {
       $this->session->set_flashdata('response','Updated Failed');
   } 
         } 
         } else {  return redirect('User/LoginPage'); 
            //  $id = $this->session->userdata('Id');
              
             
              }
  
         //}//endif check
// else {
    // $this->session->set_flashdata('response','The appointment already booked');
 //}//emd elseif check
   $this->session->set_flashdata('response','appointment Successfully');
              return redirect('user/bookuserappointment');
        
              
              
   }
   
    
    public function doctorslist($id){
      $doctors =  $this->Users_model->getdoctors($id);
           echo $doctors;
    }
    public function deleteappointment($id){
  if( $this->session->userdata('IsDoctor')== 0){
         if($this->Users_model->deleteappointment($id)){
 $this->session->set_flashdata('success', 'appointment deleted sucessfully' );
              
              return redirect('User/viewuserappointments'); 
          } else {
 $this->session->set_flashdata('warning','Deleting Failed');
          } 
          return redirect('User/viewuserappointments');     
         } else {return redirect('User/LoginPage');
          
         }
    }
    public function doctornotes(){
       if( $this->session->userdata('IsDoctor')== 0){
            $this->load->view('usernotes');   
         } else { return redirect('User/LoginPage'); 
             
           
         }
    }
     public function doctorinstructions($id){
         $doc =  $this->Users_model->doctorinstructions($id);
         //print_r($doc);
        // die();
           echo $doc;
    }
    public function logout(){
     $this->session->sess_destroy();
      $this->load->view('login');  
    }
}