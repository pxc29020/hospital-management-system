<?php
/*
 * Created By Pradeep Chandra Chitti
 * studentid: 700672902
 * University Of Central Missouri
 */

class Login extends CI_Controller{
 //CheckadminAuthentication
    Public function CheckadminAuthentication(){

        $email = $this->input->post('Email');
        $password = $this->input->post('Password');                    
        if ($email== 'admin@admin.com' && $password == 'admin123') {
          
               $session_data = array(
                  'Password' => $password,
                  'Email'=>$email,
                  'IsDoctor'=>2,
                   'Id'=>2
              );
               unset($session_data['submit']);
              $sd = $this->session->set_userdata($session_data);
             
            //view dashboard
              // $this->load->view('userdashboard', $session_data);
              return redirect('Admin/admindashboard', $session_data);  
            }
           
            else {
                $this->session->set_flashdata('error', 'Invalid Credentials');
                return redirect('Admin/adminlogPage');
            }
        }
    Public function CheckUserAuthentication(){

        $email = $this->input->post('Email');
        $password = $this->input->post('Password');       
            
     
        $result = $this->Users_model->checkuserauthentication($email, $password);
         
        if (sizeof($result)>0) {
          
               $session_data = array(
                  'Id' => $result[0]['Id'],
                  'FullName' => $result[0]['FullName'],
                   'Address' => $result[0]['Address'],
                  'City' => $result[0]['City'],
                  'Password' => $result[0]['Password'],
                  'Email'=>$result[0]['Email'],
                  'Allergies'=>$result[0]['Allergies'],
                  'IsDoctor'=>$result[0]['IsDoctor']
              );
               unset($session_data['submit']);
              $sd = $this->session->set_userdata($session_data);
             
            //view dashboard
              // $this->load->view('userdashboard', $session_data);
              return redirect('User/userdashboard', $session_data);  
            }
           
            else {
                $this->session->set_flashdata('error', 'Invalid Credentials');
                return redirect('User/LoginPage');
            }
        }
   Public function CheckDoctorAuthentication(){

        $email = $this->input->post('Email');
        $password = $this->input->post('Password');       
            
     
        $resultdoctor = $this->Users_model->checkdoctorauthentication($email, $password);
         
        if (sizeof($resultdoctor)>0) {
          
               $session_data = array(
                  'Id' => $resultdoctor[0]['Id'],
                  'Name' => $resultdoctor[0]['FullName'],
                  'Email'=>$resultdoctor[0]['Email'],
                  'IsDoctor'=>$resultdoctor[0]['IsDoctor']
              );
              $sd = $this->session->set_userdata($session_data);
             
            //view dashboard
              // $this->load->view('userdashboard', $session_data);
              return redirect('Doctor/doctordashboard', $session_data);  
            }
           
            else {
                $this->session->set_flashdata('error', 'Invalid Credentials');
                return redirect('Doctor/DoctorLoginPage');
            }
        }
       
 
    }
        


