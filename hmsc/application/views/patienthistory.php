<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
 
    <a href="updatespecilization" class="list-group-item"><i class="fa fa-compass"></i> <span>Update specialization</span></a>
  

      </div>
  
        <?php
    $id  = $this->uri->segment(3);
       //print_r($id);
       $history = $this->Users_model->history($id);
      // print_r($history);
        ?>
  <div id="form-wrapper">    
  <p class="h2" style="color:white;">Patient Appointment History</p>
      <div class="card-body table-responsive" style="color: white;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width:20px">Appointment Id</th>
            <th style="width:20px">Patient Id</th>
            <th style="width:20px">Patient Name</th>
           <th style="width:20px">Doctor Name</th>
       <th style="width:20px">Doctor Specialization</th>
           <th style="width:20px">Appointment Date</th>
           <th style="width:20px">Appointment Time</th>
   <!--        <th style="width:20px">Posting Date</th>  -->
            <th style="width:20px">Patient Allergies</th>
           <th style="width:20px">Back To Appointments</th>
          </tr>
        </thead>
        <tbody><?php  
         foreach ($history as $row)  
         {  
            ?>
          <tr>
            <td><?php echo $row['Id'];?></td>
            <td><?php echo $row['Pid'];?></td>
            <td><?php echo $row['PatientName'];?></td>
             <td><?php echo $row['Doctorname'];?></td>
             <td><?php echo $row['Specialization'];?></td>
            <td><?php echo $row['AppointmentDate'];?></td>
            <td><?php echo $row['AppointmentTime'];?></td>
     <!--        <td><?php echo $row['PostingDate'];?></td>  -->
            <td><?php echo $row['Allergies'];?></td>
            <td><a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" >Back to View Appointments<span class="glyphicon glyphicon-chevron-left"></span></a></td>
          </tr>
          <?php }  
         ?>  
        </tbody>
      </table>
  
      </div>
  </div>
    </body>
</html>
