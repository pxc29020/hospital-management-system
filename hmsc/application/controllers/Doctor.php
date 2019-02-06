<?php
/*
 * Created By Pradeep Chandra Chitti
 * studentid: 700672902
 * University Of Central Missouri
 */
class Doctor Extends CI_Controller{
     public function DoctorLoginPage(){
       
         //keep the condition later on
         if( $this->session->userdata('IsDoctor') == ''){
              // $this->load->helper('images/bg3.jpg');
      $this->load->view('doctorlogin');  
          }elseif( $this->session->userdata('IsDoctor') == 1){
             $this->load->view('doctordashboard'); 
        }
    }
     public function doctordashboard(){
         $t = $this->session->userdata;
         
          //if($this->session->userdata('IsDoctor') == 0 ){
            //  $t = $this->session->userdata;
             // print_r($t);
            //  die();
            //  if($t){ to do : create Pagination && Search Data in Table 
         if( $this->session->userdata('IsDoctor')== 1){
              $this->load->view('doctordashboard', $t);  
         } else { return redirect('Doctor/DoctorLoginPage'); 
            
         }
          
            //  }
         // } else {
          //    return redirect('User/LoginPage');  
         // }
    }
    public function updatespecialization(){
      if( $this->session->userdata('IsDoctor')== 1){
        $this->load->view('updatespecialization');    
         } else {
        
      //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
            return redirect('Doctor/DoctorLoginPage');    
        }    
    }
public function doctor_specialization(){
      if( $this->session->userdata('IsDoctor')== 1){
             $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 // print_r($data);
 // die();
   unset($data['submit']);
   unset($data['Special']);
   if($this->Users_model->doctor_specialization($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('Doctor/updatespecialization');
         
         } else {
     
         return redirect('Doctor/DoctorLoginPage');  }       //$this->load->view('userdashboard');
    }
    public function updatedoctorprofile(){
        
        //keep it later
         if( $this->session->userdata('IsDoctor')== 1){
            $this->load->view('updatedoctorprofile'); 
         } else {
        
      //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
             return redirect('Doctor/DoctorLoginPage');  
        }
             //till hear done for the day do remaining tomorrow show the profile data
    }
  public function update_profile(){
       if( $this->session->userdata('IsDoctor')== 1){
                $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 
   //unset($data['submit']);

   if($this->Users_model->updatedoctorprofile($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('Doctor/updatedoctorprofile'); 
         } else {
  return redirect('Doctor/DoctorLoginPage'); 
         }
             //$this->load->view('userdashboard');
    }
   public function updatedoctorpassword(){
        
        //keep it later
           if( $this->session->userdata('IsDoctor')== 1){
               //  $id = $this->session->userdata('Id');
     //  $result = $this->Users_model->getuserdata($id);
     //  print_r($result);
      //  print_r($id);
      //  die();
     
      //redirect('user/updateuserprofile', $result);
             $this->load->view('updatedoctorpassword'); 
         } else {
        
    
             return redirect('Doctor/DoctorLoginPage'); 
        }
             //till hear done for the day do remaining tomorrow show the profile data
    }
  public function update_doctorpassword(){
        if( $this->session->userdata('IsDoctor')== 1){
            $id = $this->session->userdata('Id');  
   $data = $this->input->post();
 
   //unset($data['submit']);

   if($this->Users_model->updatedoctorpassword($id,$data)){
        
      $this->session->set_flashdata('success','Updated Successfully');
                
             }//end if edit profile
             else{
                 $this->session->set_flashdata('response','Updation Failed');
             }//end update failed
           //  
              $this->session->set_flashdata('response','Updated Successfully');
              return redirect('Doctor/updatedoctorpassword');    
         } else {
    return redirect('Doctor/DoctorLoginPage');
         }
             //$this->load->view('userdashboard');
    }
    public function viewdoctorappointments(){
         if( $this->session->userdata('IsDoctor')== 1){
            $this->load->view('doctorviewappointments'); 
         } else {
             /*targets to do
              * 1 now view appointments
              * 2 doctor notes target do with in 3 hrs time starts at 12
              * break 
              * 3 hrs
              * in view appointments 
              *  should able to select patient related to that appointment and view history
              * 
              * do basic in admin panel
              */
             return redirect('Doctor/DoctorLoginPage');  
         } 
    }
     public function patienthistory($id){
         if( $this->session->userdata('IsDoctor')== 1){
              $this->load->view('patienthistory', $id);   
         } else { return redirect('Doctor/DoctorLoginPage');
             /*targets to do
              * 1 now view appointments
              * 2 doctor notes target do with in 3 hrs time starts at 12
              * break 
              * 3 hrs
              * in view appointments 
              *  should able to select patient related to that appointment and view history
              * 
              * do basic in admin panel
              */
           
         } 
    }
      public function patientinsurance($id){
          if( $this->session->userdata('IsDoctor')== 1){
                $this->load->view('patieninsurance', $id); 
         } else {  return redirect('Doctor/DoctorLoginPage');
             /*targets to do
              * 1 now view appointments
              * 2 doctor notes target do with in 3 hrs time starts at 12
              * break 
              * 3 hrs
              * in view appointments 
              *  should able to select patient related to that appointment and view history
              * 
              * do basic in admin panel
              */
           
         } 
    }
    public function doctorprescripction(){
      if( $this->session->userdata('IsDoctor')== 1){
              $this->load->view('doctorprescription');  
         } else { return redirect('Doctor/DoctorLoginPage');
             /*targets to do
              * 1 now view appointments
              * 2 doctor notes target do with in 3 hrs time starts at 12
              * break 
              * 3 hrs
              * in view appointments 
              *  should able to select patient related to that appointment and view history
              * 
              * do basic in admin panel
              */
            
         }   
    }
 public function listofpatients($id){
      $patients =  $this->Users_model->getpatientnames($id);
           echo $patients;
    }
    public function sentdoctorprescripction(){
         if( $this->session->userdata('IsDoctor')== 1){
             $appointmentno = $this->input->post('Appointmentno');
             $notes = $this->input->post('doctornotes');
             $patientname = $this->input->post('patients');
             $data = $this->input->post();
             $checknotes = $this->Users_model->checknotes($data);
            /// print_r($appointmentno);
             // print_r($notes);
            // die();
            if(sizeof($checknotes)>0){
   $this->session->set_flashdata('warning', 'already prescribed');
         }else{  
         
                  if($this->Users_model->sentdoctorprescripction($appointmentno,$notes)){
             $this->session->set_flashdata('success', 'Prescription was suggested to Appointment No'.$patientname);
            } else {
              //  echo 'failed';
 $this->session->set_flashdata('response', 'Failed'); 
            }
         }
         //doctorprescripction
            return redirect('Doctor/doctorprescripction'); 
         } else { return redirect('Doctor/DoctorLoginPage');
             
            }
    }

    public function logout(){
     $this->session->sess_destroy();
        $this->load->view('doctorlogin');  
    }
}