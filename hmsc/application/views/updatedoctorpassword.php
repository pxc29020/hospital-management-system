<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
    margin-top: -155px;     /* Half of height */
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
   
   <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="list-group-item active"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'doctor/updatedoctorprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'Doctor/doctorprescripction'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
 
    <a href="updatespecilization" class="list-group-item"><i class="fa fa-compass"></i> <span>Update specialization</span></a>




      </div>
<div id="form-wrapper">
    <table><tbody>
   <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'doctor/updatedoctorpassword'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'doctor/updatedoctorpassword'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"> <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
</div>        
    <?php } ?>     
              <?php $t = $this->session->userdata('Id');
       // print_r($t); 
       $result = $this->Users_model->doctordetails($t);
      //   echo '<br>';
     // print_r($result);
       // echo '<br>';
        foreach($result as $r){
        //    echo $r;
        //    echo '<br>';
        //} ?>
          <?php echo form_open('Doctor/update_doctorpassword');?>
        <label class="h6" style="color: white;" > Password</label>		
<?php echo form_input(['name'=>'Password','placeholder'=>'Password','type'=>'password','class'=>'form-control','required'=>'true','value'=>$r['Password']])  ?>
               </td></tr>
								
							
    <tr><td><br></td></tr> <tr><td>							

<button type="submit" class="btn btn-primary pull-left" name="submit">update</button>
<?php 

/*  <tr><td></td></tr>
									Update <i class="fa fa-arrow-circle-right"></i>
								</button>
 * 
 */

}
echo form_close() ?></td></tr></tbody></table>
</div>
    </body>
</html>

