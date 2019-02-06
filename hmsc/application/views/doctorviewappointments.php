<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<link data-require="bootstrap-css@3.2.0" data-semver="3.2.0" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>   
    <style>
    html {
 background-image: url("<?php echo base_url();?>images/doc.jpg");
  background-size: cover;
  height: 100%;
        }
       
        .table {
  table-layout:fixed;
}

td, th {
  width: 90px;
}
#form-wrapper {     
    width: 1000px;           /* Set this to your convenience */
    height: 200px;          /* Set this to your convenience */
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -155px;     /* Half of height */
    margin-left: -400px;     /* Half of width */
}
.list-group {
     
     margin:auto;
     float:left;
     padding-top:20px;
     color:black;
    }
    .lead {
     
     margin:auto;
     left:0;
     right:0;
     padding-top:10%;
    }
    </style>
    

  <body>
             <?php include_once 'navbar.php'; ?>
        <div class="list-group">
   
  <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="list-group-item active"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'doctor/updatedoctorprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'Doctor/doctorprescripction'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
 
    <a href="updatespecialization" class="list-group-item"><i class="fa fa-compass"></i> <span>Update specialization</span></a>



      </div>
    
   <?php
if($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        
    <?php } elseif($this->session->flashdata('warning')){  ?>

      
            <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); } ?>

<div id="form-wrapper">    
        <?php
        /*
         * tomorrow should complete below things
         * 1 view app and delete with conditions applied  date 7
         * 2 view app in doctor search type date 7
         * 3 doctor notes date 7
         * 4 patient appointment history  by selecting appointment no if doctor press view he should get all his
         * previous appointments date 8
         * date 9 whole day design css email
         */
        $id= $this->session->userdata('Id');
        $appointments = $this->Users_model->getdoctorappointmnets($id);
        //print_r($appointments);
        ?>
    <p class="h2" style="color:white;">Appointments</p>
      <div class="card-body table-responsive" style="color: white;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width:20px">Appointment Id</th>
            <th style="width:20px">Patient Id</th>
            <th style="width:20px">Patient Name</th>
           
     
           <th style="width:20px">Appointment Date</th>
           <th style="width:20px">Appointment Time</th>
   <!--        <th style="width:20px">Posting Date</th>  -->
            <th style="width:20px">Patient Allergies</th>
           <th style="width:20px">Patient History</th>
         <th style="width:20px">Patient Insurance</th>
          </tr>
        </thead>
        <tbody><?php  
         foreach ($appointments as $row)  
         {  
            ?>
          <tr>
            <td><?php echo $row['Id'];?></td>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['PatientName'];?></td>
            <td><?php echo $row['AppointmentDate'];?></td>
            <td><?php echo $row['AppointmentTime'];?></td>
     <!--        <td><?php echo $row['PostingDate'];?></td>  -->
            <td><?php echo $row['Allergies'];?></td>
            <td><a href="<?php echo base_url() . 'Doctor/patienthistory/' . $row['id'] ; ?>" >View Patient History <span class="glyphicon glyphicon-chevron-right"></span></a></td>
      <td><a href="<?php echo base_url() . 'Doctor/patientinsurance/' . $row['id'] ; ?>" >View Patient insurance <span class="glyphicon glyphicon-chevron-right"></span></a></td>
                
          </tr>
          <?php }  
         ?>  
        </tbody>
      </table>
 </div>
    </div>
  </body>

</html>