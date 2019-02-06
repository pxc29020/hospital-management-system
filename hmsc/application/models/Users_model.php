<?php

class Users_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function checkuserauthentication($email,$password){
      $query = $this->db->where(['email'=>$email,'password'=>$password,'active'=>1])
                      ->get('tbl_user');
        return    $query->result_array();   
    } 
       public function getuserdata($id){
        $query = $this->db->where(['Id'=>$id])
                ->get('tbl_user');
        return $query->result_array();
    }
    public function about(){
        return $this->db->get('abt');
    }

    public function contactus($data){
    return $this->db->insert("contactus",$data);
}
public function addspl($data){
    return $this->db->insert('tbl_doctorspecialization',$data);
}

public function insurance(){
        $query= $this->db->get('tbl_insurance');
         return    $query->result_array(); 
    }

    public function checkdoctorauthentication($email,$password){
      $query = $this->db->where(['email'=>$email,'password'=>$password,'active'=>1])
                      ->get('tbl_doctor');
        return    $query->result_array();   
    } 
    public function patientdetails($id){
        $query = $this->db->where(['Id'=>$id,'active'=>1])
                      ->get('tbl_user');
        return    $query->result_array(); 
    }
 public function doctordetails($id){
        $query = $this->db->where(['Id'=>$id,'active'=>1])
                      ->get('tbl_doctor');
        return    $query->result_array(); 
    }
    public function specialization(){
        $query = $this->db->get('tbl_doctorspecialization');
         return    $query->result_array(); 
    }
    public function currentspl(){

    $query = $this->db->select('tbl_doctor.Specialization, tbl_doctorspecialization.Name as specilizationname, tbl_doctorspecialization.Id as specilizationid '); 
         $this->db->from('tbl_doctor');
        $this->db->join('tbl_doctorspecialization', 'tbl_doctor.Specialization = tbl_doctorspecialization.Id');
        $this->db->where("tbl_doctor.Active",true);
        $this->db->where("tbl_doctor.Id", $this->session->userdata('Id'));
        $query =   $this->db->get();  return $query->result(); }

    public function updateprofile($id, $data){
        //
    //    $t = $data;
    /*    $FullName = $data[`FullName`];
        $Email = $data[`Email`];
        $Address = $data[`Address`];
       $password = $data[`Password`];
       $allergies = $data[`Allergies`];
       $city = $data[`City`];
     * 
     */

       //$id = $data[`Id`];      
     //  print_r($data);
       // die();
 //$data['FullName'];
        $this->db->where("Id",$id);  
       return $this->db->update("tbl_user",$data);
      
 
    //$this->db->query("UPDATE `tbl_user` SET `FullName` = $FullName, `Email` = $Email, `Address` = $Address, `Password` = $password, `Allergies` = $allergies, `City` = $city WHERE `Id` = $id ");
  //  return;
}
public function doctor_specialization($id, $data){
    $this->db->where("Id",$id);
    return $this->db->update("tbl_doctor",$data);
      
}

public function getusers(){
    $query = $this->db->select('*')->from('tbl_user')->where('Active',TRUE)->get();
    return $query->result();
}
//admingetuserdata ,
public function admingetuserdata($id){
    $query = $this->db->where(['Id'=>$id])->where(['Active'=>TRUE])->get('tbl_user');  
            
          //  $this->db->select('*')->from('tbl_user')->where('Active',TRUE)->get();
    return $query->result();
}
public function admingetdoctordata($id){
    $query = $this->db->where(['Id'=>$id])->where(['Active'=>TRUE])->get('tbl_doctor');  
            
          //  $this->db->select('*')->from('tbl_user')->where('Active',TRUE)->get();
    return $query->result();
}

public function getinactiveusers(){
    $query = $this->db->select('*')->from('tbl_user')->where('Active',FALSE)->get();
    return $query->result();
}
public function get_doctors(){
    /*$query = $this->db->select('*')->from('tbl_doctor')->get();
    return $query->result();
     * 
     */
    $query = $this->db->select('tbl_doctor.Id, tbl_doctor.Name, tbl_doctor.Address, tbl_doctor.AboutDoctor, tbl_doctor.IsDoctor, tbl_doctor.Gender, tbl_doctor.Active, tbl_doctor.Password, tbl_doctor.PhoneNo, tbl_doctor.Email, tbl_doctorspecialization.Name as specilizationname, '); 
         $this->db->from('tbl_doctor');
        $this->db->join('tbl_doctorspecialization', 'tbl_doctor.Specialization = tbl_doctorspecialization.Id');
        $this->db->where("tbl_doctor.Active",true);
        $query =   $this->db->get();  return $query->result();
}
public function insurancepolicy(){
    $query = $this->db->select('tbl_user.Insurence, tbl_insurance.Id as Id, tbl_insurance.PolicyNumber as policyno, tbl_insurance.AboutPolicy as viewpolicy');
    $this->db->from('tbl_user');
    $this->db->join('tbl_insurance', 'tbl_user.Insurence = tbl_insurance.Id');
     $this->db->where("tbl_user.Id", $this->session->userdata('Id'));
      $this->db->where("tbl_user.Active",true);
          $query =   $this->db->get();  return $query->result();
  
}
public function user_updateinsurance($id,$data){
   $this->db->where("Id",$id);  
       return $this->db->update("tbl_user",$data);  
}

public function get_inactivedoctors(){
    /*$query = $this->db->select('*')->from('tbl_doctor')->get();
    return $query->result();
     * 
     */
    $query = $this->db->select('tbl_doctor.Id, tbl_doctor.Name, tbl_doctor.Address, tbl_doctor.AboutDoctor, tbl_doctor.IsDoctor, tbl_doctor.Gender, tbl_doctor.Active, tbl_doctor.Password, tbl_doctor.PhoneNo, tbl_doctor.Email, tbl_doctorspecialization.Name as specilizationname, '); 
         $this->db->from('tbl_doctor');
        $this->db->join('tbl_doctorspecialization', 'tbl_doctor.Specialization = tbl_doctorspecialization.Id');
        $this->db->where("tbl_doctor.Active",FALSE);
        $query =   $this->db->get();  return $query->result();
}
public function inactivedoctor($id){
    $data = array(
            'Active'=>0 , 
            );
         $this->db->where("Id",$id);  
       return $this->db->update("tbl_doctor",$data);
       
}
public function activeuser($id){
    $data = array(
            'Active'=>1 , 
            );
         $this->db->where("Id",$id);  
       return $this->db->update("tbl_user",$data);
       
}
public function deleteuser($id){
    $data = array(
              'Id' => $id,
            'Active'=>0 , 
            );
        // $this->db->where("Id",$id);  
       return $this->db->delete("tbl_user",$data);
       
}
public function deletedoctor($id){
    $data = array(
              'Id' => $id,
            'Active'=>0 , 
            );
        // $this->db->where("Id",$id);  
       return $this->db->delete("tbl_doctor",$data);
       
}
public function inactiveuser($id){
    $data = array(
            'Active'=>0 , 
            );
         $this->db->where("Id",$id);  
       return $this->db->update("tbl_user",$data);
       
}
public function activedoctor($id){
    $data = array(
            'Active'=>1 , 
            );
         $this->db->where("Id",$id);  
       return $this->db->update("tbl_doctor",$data);
       
}
public function updatedoctorprofile($id, $data){
        //
    //    $t = $data;
    /*    $FullName = $data[`FullName`];
        $Email = $data[`Email`];
        $Address = $data[`Address`];]
     * 
       $password = $data[`Password`];
       $allergies = $data[`Allergies`];
       $city = $data[`City`];
     * 
     */

       //$id = $data[`Id`];      
     //  print_r($data);
       // die();
 //$data['FullName'];
        $this->db->where("Id",$id);  
       return $this->db->update("tbl_doctor",$data);
      
 
    //$this->db->query("UPDATE `tbl_user` SET `FullName` = $FullName, `Email` = $Email, `Address` = $Address, `Password` = $password, `Allergies` = $allergies, `City` = $city WHERE `Id` = $id ");
  //  return;
}
public function updatedoctorpassword($id, $data){
        //
    //    $t = $data;
    /*    $FullName = $data[`FullName`];
        $Email = $data[`Email`];
        $Address = $data[`Address`];]
     * 
       $password = $data[`Password`];
       $allergies = $data[`Allergies`];
       $city = $data[`City`];
     * 
     */

       //$id = $data[`Id`];      
     //  print_r($data);
       // die();
 //$data['FullName'];
        $this->db->where("Id",$id);  
       return $this->db->update("tbl_doctor",$data);
      
 
    //$this->db->query("UPDATE `tbl_user` SET `FullName` = $FullName, `Email` = $Email, `Address` = $Address, `Password` = $password, `Allergies` = $allergies, `City` = $city WHERE `Id` = $id ");
  //  return;
}
//adminupdateuser
    public function adminupdateuser($id,$data){
        $this->db->where("Id",$id);  
       return $this->db->update("tbl_user",$data); 
    }//
     public function adminupdatedoc($id,$data){
        $this->db->where("Id",$id);  
       return $this->db->update("tbl_doctor",$data); 
    }
    public function admin_adddoctor($data){
       return $this->db->insert("tbl_doctor",$data);
    }
    public function admin_adduser($data){
       return $this->db->insert("tbl_user",$data);
    }
      public function register($data){
       return $this->db->insert("tbl_user",$data);
    }
    public function timeslot(){
    $query = $this->db->get('tbl_slot');
     $ret = $query->result_array();


    return $ret;
}

public function getdoctors($id){
           //for getting doctors
        $query = $this->db->where(['Specialization'=>$id])->get('tbl_doctor');
        $output = '<option value=""> Select Doctor </option>';
       foreach($query->result() as $row){
           $output.= '<option value="'.$row->Id.'"> '.$row->Name.' </option>';
       }

        return $output;
       }
       public function sample($id){
            $query =$this->db->select('tbl_appointments.Id, tbl_user.FullName as PatientName');    
        $this->db->from('tbl_appointments');
        $this->db->join('tbl_user', 'tbl_appointments.UserId = tbl_user.Id');
        $this->db->where("tbl_appointments.DoctorId",$this->session->userdata('Id'));
        $this->db->where("tbl_appointments.Id",$id);
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");                                       //PhoneNo  
        $query =   $this->db->get();
        
        return $query->result();
      /* $query = $this->db->select('tbl_doctor.Id, tbl_doctor.Name, tbl_doctor.Address, tbl_doctor.AboutDoctor, tbl_doctor.IsDoctor, tbl_doctor.Gender, tbl_doctor.Active, tbl_doctor.Password, tbl_doctor.PhoneNo, tbl_doctor.Email, tbl_doctorspecialization.Name as specilizationname, '); 
         $this->db->from('tbl_doctor');
        $this->db->join('tbl_doctorspecialization', 'tbl_doctor.Specialization = tbl_doctorspecialization.Id');
        $query =   $this->db->get();  return $query->result();
       */  
        
       }
       public function getnotes($id){
       $query = $this->db->where(['UserId'=>$id])
       ->get('tbl_appointments');
return $query->result();
       }
 public function doctorinstructions($id){
       
       $query = $this->db->where(['appointmentid'=>$id])->get('tbl_notes');
 
     //   if($query !='') {
       foreach($query->result() as $row){
           $output.= '<option value="'.$row->notes.'"> '.$row->notes.' </option>';
        }   return $output;
            // print_r($output);
       // die();
    }
       public function getpatientnames($id){
           /*
            * 
            */
        //$query = $this->db->where(['Id'=>$id])->get('tbl_appointments');
        $query =$this->db->select('tbl_appointments.Id, tbl_user.FullName as PatientName');    
        $this->db->from('tbl_appointments');
        $this->db->join('tbl_user', 'tbl_appointments.UserId = tbl_user.Id');
        $this->db->where("tbl_appointments.DoctorId",$this->session->userdata('Id'));
        $this->db->where("tbl_appointments.Id",$id);
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");
        $query =   $this->db->get();
     //   $output = '<option value=""> Select Patients </option>';
       foreach($query->result() as $row){
           $output.= '<option value="'.$row->Id.'"> '.$row->PatientName.' </option>';
       }

        return $output;    
       }
       public function checknotes($data){
             $query = $this->db->where(['appointmentid'=>$data['Appointmentno']])
        ->get('tbl_notes');
        //,'notes'=>$Data['comments'],'UserId'=>$this->session->userdata('Id')
        return $query->result_array();
       }

       public function sentdoctorprescripction($appointmentno,$notes){
      $data = array(
       'appointmentid'  => $appointmentno,
           'notes'   => $notes,
           'lastupdated' => '2018-10-22 12:42:00.000000'
           
     ); 
        return $this->db->insert('tbl_notes',$data);
       }

       public function appointments($id){
          // $id = $this->session->userdata('Id');[],
         $query = $this->db->where(['UserId'=>$this->session->userdata('Id')])
                 ->where(['Active'=>TRUE])
                 ->get('tbl_appointments');
         return $query->result_array();
       }
       public function getappointmnets(){
       //getdoctorappointmnets
           $query =    $this->db->select('tbl_appointments.Id,tbl_doctor.Name as DoctorName,tbl_doctorspecialization.Name as Specilization, tbl_appointments.AppointmentDate, tbl_appointments.AppointmentTime,tbl_appointments.PostingDate');    
        $this->db->from('tbl_doctorspecialization');
        $this->db->join('tbl_appointments', 'tbl_doctorspecialization.Id = tbl_appointments.DoctorSpecialization');
        $this->db->join('tbl_doctor', 'tbl_appointments.DoctorId = tbl_doctor.Id');
        $this->db->where("tbl_appointments.UserId",$this->session->userdata('Id'));
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");
        $query =   $this->db->get();
         return $query->result_array();
       }
       public function medication(){
   /*    $query = $this->db->where(['UserId'=>$this->session->userdata('Id')])
                 ->where(['Active'=>TRUE])
                 ->get('tbl_appointments');
         return $query->result_array(); 
    * 
    */
  //_____________________________________________________________
 $query =$this->db
  ->select('tbl_appointments.Id, tbl_user.FullName as PatientName,tbl_appointments.AppointmentDate,
  tbl_appointments.AppointmentTime,
  tbl_appointments.PostingDate');    
        $this->db->from('tbl_appointments');
  
        $this->db->join('tbl_user', 'tbl_appointments.UserId = tbl_user.Id');
        $this->db->where("tbl_appointments.DoctorId",$this->session->userdata('Id'));
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");
        $query =   $this->db->get();
         return $query->result_array();
       }
       public function sampledocapp(){
           echo 'test';
       }

       public function getdoctorappointmnets(){
       //getdoctorappointmnets
 $query =$this->db->select('tbl_appointments.Id,tbl_user.Insurence as PatientInsurence,tbl_user.FullName as PatientName, `tbl_user`.`Id` as `id`, `tbl_user`.`Allergies` as `Allergies`, tbl_appointments.AppointmentDate, tbl_appointments.AppointmentTime,tbl_appointments.PostingDate');    
        $this->db->from('tbl_appointments');
     //   $this->db->join('tbl_appointments', 'tbl_doctorspecialization.Id = tbl_appointments.DoctorSpecialization');
        $this->db->join('tbl_user', 'tbl_appointments.UserId = tbl_user.Id');
        $this->db->where("tbl_appointments.DoctorId",$this->session->userdata('Id'));
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");
        $query =   $this->db->get();
        
        /*
         * SELECT `tbl_appointments`.`Id`, `tbl_user`.`FullName` as `PatientName`, `tbl_appointments`.`AppointmentDate`, `tbl_appointments`.`AppointmentTime`, `tbl_appointments`.`PostingDate` FROM `tbl_appointments` JOIN `tbl_user` ON `tbl_appointments`.`UserId` = `tbl_user`.`Id` WHERE `tbl_appointments`.`DoctorId` = '6' AND `tbl_appointments`.`Active` = 1 AND `tbl_appointments`.`Status` = 'Draft'
         */
         return $query->result_array();
       }
       public function deleteappointment($id){
  
   $query = $this->db->query("UPDATE `tbl_appointments` SET `Active` = 0 WHERE `Id` = '$id'"); 
          return $query;
       }

       public function doctorspeciality(){
    $this->db->select('Id,Name');
        $this->db->where(['Active'=>1]);
        return $this->db->get('tbl_doctorspecialization')->result_array();
}
public function check($data){
   $query = $this->db->where(['AppointmentDate'=>$data['AppointmentDate'],'AppointmentTime'=>$data['AppointmentTime'],'Active'=>1])
        ->get('tbl_appointments');
//$query = $this->db->where(['AppointmentDate'=>$Data['AppointmentDate'],'AppointmentTime'=>$Data['AppointmentTime'],'UserId'=>$this->session->userdata('Id')])
        //->get('tbl_appointments');
        return $query->result_array();
}
public function history($id){
  
  //  $query = $this->db->where(['Active'=>'1'], ['UserId'=>$id])
       //         ->get('tbl_appointments');
   
    
     
       
  // return $query->result_array();  
    //_______________________________________________________tbl_user.FullName as PatientName

 $query =    $this->db->select('tbl_appointments.Id,tbl_user.FullName as PatientName,
tbl_user.Allergies as Allergies,
tbl_user.Id as Pid,
tbl_doctor.Name as Doctorname,
tbl_doctorspecialization.Name as Specialization,
tbl_appointments.DoctorId,
tbl_appointments.DoctorSpecialization,
tbl_appointments.AppointmentDate, 
tbl_appointments.AppointmentTime, 
tbl_appointments.PostingDate');
 $this->db->from("tbl_appointments");
 $this->db->join('tbl_user', 'tbl_appointments.UserId = tbl_user.Id');
 $this->db->join('tbl_doctor', 'tbl_appointments.DoctorId = tbl_doctor.Id');
 $this->db->join('tbl_doctorspecialization', 'tbl_appointments.DoctorSpecialization = tbl_doctorspecialization.Id');
  $this->db->where("tbl_appointments.UserId",$id);
        $this->db->where("tbl_appointments.Active",true);
        $this->db->where("tbl_appointments.Status","Draft");
        $query =   $this->db->get();
      //  $this->db->join('tbl_appointments', 'tbl_doctorspecialization.Id = tbl_appointments.DoctorSpecialization');
	 
       // $this->db->join('tbl_doctor', 'tbl_appointments.DoctorId = tbl_doctor.Id');
       
        return $query->result_array();
     
}
public function patientinsurance($id){
  
  //  $query = $this->db->where(['Active'=>'1'], ['UserId'=>$id])
       //         ->get('tbl_appointments');
   
    
     
       
  // return $query->result_array();  
    //_______________________________________________________tbl_user.FullName as PatientName

 $query =    $this->db->select('tbl_user.Insurence,tbl_user.FullName, tbl_insurance.Id as inid, tbl_insurance.PolicyNumber as PolicyNumber, tbl_insurance.AboutPolicy as AboutPolicy');
 $this->db->from("tbl_user");
 $this->db->join('tbl_insurance', 'tbl_insurance.Id = tbl_user.Insurence');
 //$this->db->join('tbl_doctor', 'tbl_appointments.DoctorId = tbl_doctor.Id');
// $this->db->join('tbl_doctorspecialization', 'tbl_appointments.DoctorSpecialization = tbl_doctorspecialization.Id');
  $this->db->where("tbl_user.Id",$id);
        $this->db->where("tbl_user.Active",true);
        $this->db->where("tbl_user.Id","$id");
        $query =   $this->db->get();
      //  $this->db->join('tbl_appointments', 'tbl_doctorspecialization.Id = tbl_appointments.DoctorSpecialization');
	 
       // $this->db->join('tbl_doctor', 'tbl_appointments.DoctorId = tbl_doctor.Id');
       
        return $query->result_array();
     
}
public function bookappointment($data){
    return $this->db->insert('tbl_appointments',$data);
}
      
}