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
     
            <a href="<?php echo base_url().'admin/manageinactiveusers'; ?>" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        
    <?php } elseif($this->session->flashdata('warning')){  ?>

      
            <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); } ?>
                <a class="" href="<?php echo base_url().'Admin/admindashboard'; ?>">Admin home
            </a><br>
        <?php
     $users = $this->Users_model->getinactiveusers(); 
    // print_r($users);
        ?>
   <h2>Manage Users</h2>
 
      <table class="table">
        <thead>
          <tr>

            <th style="width:20px">Patient Id</th>
            <th style="width:20px">Patient Name</th>
          <th style="width:20px">Patient Address</th>
     <th style="width:20px">Patient Gender</th>
     <th style="width:20px">Patient Email</th>
     <th style="width:20px">Patient Password</th>
           <th style="width:20px">Allergies</th>
       <!--     <th style="width:20px">Active</th>-->
          <th style="width:20px">Delete user permanently</th>  
      <th style="width:20px">Make User active </th>  
          

          </tr>
        </thead>
        <tbody><?php  
         foreach ($users as $row)  
         {  
              //[Password] => test [Insurence] => 1
               //[Allergies] => No allergies [LastUpdated] => 2018-09-15 14:27:59.827229
             //    [Active] => 1 [IsDoctor] => 0 
            ?>
          <tr>
        
            <td><?php echo $row->Id ?></td>
            <td><?php echo $row->FullName ?></td>
             <td><?php echo $row->Address ?></td>
              <td><?php echo $row->Gender ?></td>
                  <td><?php echo $row->Email ?></td>
                      <td><?php echo $row->Password ?></td>
          <td><?php echo $row->Allergies ?></td>
              <!--    <td><?php echo $row->Active ?></td>-->
                      
     <td><a href="<?php echo base_url() . 'Admin/deleteuser/' . $row->Id ?>" ><span class="glyphicon glyphicon glyphicon-refresh"></span> Delete Users permanently</a></td>
            
            <td><a href="<?php echo base_url() . 'Admin/activeuser/' . $row->Id ?>" ><span class="glyphicon glyphicon glyphicon-refresh"></span> Make User active</a></td>
      
  
          </tr>
          <?php }  
         ?>  
        </tbody>
      </table>
    </body>
</html>
