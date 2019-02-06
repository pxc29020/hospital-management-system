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
    <style>
    html {
 background-image: url("<?php echo base_url();?>images/app.jpg");
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
    </style>
       <?php include_once 'navbar.php'; ?>
    

    </head>
 <body>
 
    
           <?php include_once 'sidenavbar.php'; ?>
     
<div id="form-wrapper">  
   <?php

if($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } elseif($this->session->flashdata('warning')){  ?>

      
            <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); } ?></p>
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
        $appointments = $this->Users_model->getappointmnets($id);
        //print_r($appointments);
        ?>
    <p class="h2" style="color: white;">Appointments</p>
 
      <table class="table table-bordered" style="color: white;">
        <thead class="thead-dark">
          <tr>
            <th style="width:20px">Appointment Id</th>
            <th style="width:20px">Doctor Name</th>
           <th style="width:20px">Doctor Specilization</th>
           <th style="width:20px">Appointment Date</th>
           <th style="width:20px">Appointment Time</th>
   <!--        <th style="width:20px">Posting Date</th>  -->
           <th style="width:20px">Cancel appointment</th>
          </tr>
        </thead>
        <tbody><?php  
         foreach ($appointments as $row)  
         {  
            ?>
          <tr>
            <td><?php echo $row['Id'];?></td>
            <td><?php echo $row['DoctorName'];?></td>
            <td><?php echo $row['Specilization'];?></td>
            <td><?php echo $row['AppointmentDate'];?></td>
            <td><?php echo $row['AppointmentTime'];?></td>
     <!--        <td><?php echo $row['PostingDate'];?></td>  -->
            <td><a href="<?php echo base_url() . 'User/deleteappointment/' . $row['Id'] ; ?>" ><span class="glyphicon glyphicon-remove-sign"></span> Cancel</a></td>
          </tr>
          <?php }  
         ?>  
        </tbody>
      </table>
    </div>
  </body>

</html>