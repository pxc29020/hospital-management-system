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
        <title></title>
        <style>
            textarea {
    width: 200px;
}
input[type="text"] {
    width: 200px;
}
  html {
 background-image: url("<?php echo base_url();?>images/doc.jpg");
  background-size: cover;
  height: 100%;
  
        }
#form-wrapper {     
    width: 300px;           /* Set this to your convenience */
    height: 200px;          /* Set this to your convenience */
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -185px;     /* Half of height */
    margin-left: -180px;     /* Half of width */
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
        <?php include_once 'navbar.php'; ?>
<div class="list-group">
   
  <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'doctor/updatedoctorprofile'; ?>" class="list-group-item active"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'Doctor/doctorprescripction'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
 
    <a href="updatespecialization" class="list-group-item"><i class="fa fa-compass"></i> <span>Update specialization</span></a>



      </div>
  <div id="form-wrapper">
    <table><tbody> <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'doctor/updatedoctorrprofile'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'doctor/updatedoctorprofile'; ?>" class="close" data-dismiss="alert">&times;</a>
            <tr><td><div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>   </div></td></tr>
        
    <?php } ?>  <tr><td>
          
   
              <?php $t = $this->session->userdata('Id');
       // print_r($t);      <p class="h6" style="color: white;">Details to update</p></td></tr>
     
       $result = $this->Users_model->doctordetails($t);
      //   echo '<br>';
     // print_r($result);
       // echo '<br>';
        foreach($result as $r){
        //    echo $r;
        //    echo '<br>';
        //} ?>
          <?php echo form_open('doctor/update_profile');?>
        <tr><td><label class="h6" style="color: white;"> Full Name</label></td></tr><tr><td>		
<?php echo form_input(['name'=>'Name','placeholder'=>'Name','type'=>'text','class'=>'form-control','required'=>'true','value'=>$r['Name']])  ?>
</td></tr><tr><td>
                <label class="h6" style="color: white;"> email</label></td></tr><tr><td>
<?php echo form_input(['name'=>'Email','placeholder'=>'Email','type'=>'email','class'=>'form-control','required'=>'true','value'=>$r['Email']])  ?>
            </td></tr><tr><td>
                <label class="h6" style="color: white;"> Address</label></td></tr><tr><td>
<?php echo form_textarea(['name'=>'Address','placeholder'=>'Address','type'=>'comments','class'=>'form-control','required'=>'true','cols'=>3,'rows'=>3,'value'=>$r['Address']])  ?>
            </td></tr>
<tr><td>
        <label class="h6" style="color: white;"> About me</label></td></tr><tr><td>
<?php echo form_textarea(['name'=>'AboutDoctor','placeholder'=>'About me','type'=>'comments','class'=>'form-control','required'=>'true','value'=>$r['AboutDoctor'],'cols'=>3,'rows'=>3])  ?>
    </td></tr>

								
							
							
<tr><td><br></td></tr><tr><td><button type="submit" class="btn btn-primary pull-left" name="submit">update</button>
    </td></tr>
<?php 

/*
									Update <i class="fa fa-arrow-circle-right"></i>
								</button>
 * 
 */

}
echo form_close() ?>
</tbody></table>
  </div>
    </body>
</html>

