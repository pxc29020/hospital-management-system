<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     
    <!-- Script 
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <style>
       body {
 background-image: url("<?php echo base_url();?>images/admin.jpg");
  background-size: cover;
  height: 100%;
  
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
    </head>
    <body>
        <?php
        include_once 'navbar.php';
        ?> <div class="list-group">
   
    <a href="<?php echo base_url().'admin/manageusers'; ?>" class="list-group-item "><i class="fa fa-key"></i> <span>Manage Active Patient's</span></a>
    <a href="<?php echo base_url().'admin/manageinactiveusers'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Manage Inactive Patient's</span></a>
    <a href="<?php echo base_url().'admin/managedoctors'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Manage Active Doctor's</span></a>
    <a href="<?php echo base_url().'admin/manageinactivedoctors'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Manage inactive Doctor's</span></a>
    <a href="<?php echo base_url().'admin/manageinactivedoctors'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Delete Doctors</span></a>
      <a href="<?php echo base_url().'admin/manageinactiveusers'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Delete Patients</span></a>
  <a href="<?php echo base_url().'admin/adddoctor'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Add Doctor</span></a>
  <a href="<?php echo base_url().'admin/addpatient'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Add Patient</span></a>
   <a href="<?php echo base_url().'admin/addspl'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Add Specialization</span></a>
  





      </div>
    
   <!--     <a class="" href="<?php echo base_url().'Admin/logout'; ?>">Logout
            </a><br>
            <p>need to complete update doctor specilization and gender update </p>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">manage user's<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'admin/manageusers'; ?>">Active Patient's</a></li>
          <li><a href="<?php echo base_url().'admin/manageinactiveusers'; ?>">Inactive Patient's</a></li>
     
        </ul>  

     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">manage doctor's<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'admin/managedoctors'; ?>">Active Doctor's</a></li>
          <li><a href="<?php echo base_url().'admin/manageinactivedoctors'; ?>">Inactive Doctor's</a></li>   
        </ul>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Delete Users<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'admin/manageinactivedoctors'; ?>">Delete Doctor's</a></li>
          <li><a href="<?php echo base_url().'admin/manageinactiveusers'; ?>">Delete Patient's</a></li>
        
        </ul>
 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Users<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'admin/adddoctor'; ?>">Add Doctor's</a></li>
          <li><a href="<?php echo base_url().'admin/addpatient'; ?>">Add Patient's</a></li>
        
        </ul>-->
    </body>
</html>
