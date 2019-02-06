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
    <body>
        <?php
if($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'admin/managedoctors'; ?>" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        
    <?php } ?>
                <a class="" href="<?php echo base_url().'Admin/admindashboard'; ?>">Admin home
            </a><br>
        <?php
     $doctors = $this->Users_model->get_doctors(); 
   // print_r($doctors);
        ?>
   <h2>Manage Doctors</h2>
 
      <table class="table">
        <thead>
          <tr>

            <th style="width:20px">Doctor Id</th>
            <th style="width:20px">Doctor Name</th>
          <th style="width:20px">Doctor Address</th>
     <th style="width:20px">AboutDoctor</th>
     <th style="width:20px">IsDoctor</th>
     <th style="width:20px">Gender</th>
           <th style="width:20px">Password</th>
           <th style="width:20px">PhoneNo</th>
           <th style="width:20px">Email</th>
           <th style="width:20px">specilization name</th>
         <!--   <th style="width:20px">Active</th>-->
 
             <th style="width:20px">Make Doctor inactively</th>  
     <th style="width:20px">Update user information </th>  

          </tr>
        </thead>
        <tbody><?php  
         foreach ($doctors as $row)  
         {  
              //[Password] => test [Insurence] => 1
               //[Allergies] => No allergies [LastUpdated] => 2018-09-15 14:27:59.827229
             //    [Active] => 1 [IsDoctor] => 0 
            ?>
          <tr>
        
            <td><?php echo $row->Id ?></td>
            <td><?php echo $row->Name ?></td>
             <td><?php echo $row->Address ?></td>
              <td><?php echo $row->AboutDoctor ?></td>
            <td><?php echo $row->IsDoctor ?></td>
            <td><?php echo $row->Gender ?></td>
                  <td><?php echo $row->Password ?></td>
             <td><?php echo $row->PhoneNo ?></td>
           <td><?php echo $row->Email ?></td>
         <td><?php echo $row->specilizationname ?></td>
  <!--   <td><?php echo $row->Active ?></td>-->
                      
    
            <td><a href="<?php echo base_url() . 'Admin/inactivedoctor/' . $row->Id ?>" ><span class="glyphicon glyphicon glyphicon-refresh"></span> Make Doctor inactive</a></td>
             <td><a href="<?php echo base_url() . 'Admin/updatedoctor/' . $row->Id ?>" ><span class="glyphicon glyphicon glyphicon-refresh"></span> Update User Information</a></td>
         
          </tr>
          <?php }  
         ?>  
        </tbody>
      </table>
    </body>
</html>
