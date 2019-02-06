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
 background-image: url("<?php echo base_url();?>images/app.jpg");
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
   
    <a href="<?php echo base_url().'user/bookuserappointment'; ?>" class="list-group-item "><i class="fa fa-key"></i> <span>Book appointment</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'user/updateuserprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'user/doctornotes'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Cancel Appointment</span></a>
   
    <a href="updateuserinsurance" class="list-group-item active"><i class="fa fa-compass"></i> <span>Update Insurance</span></a>
    <a href="#" class="hidden"><i class="fa fa-compass"></i> <span>List of doctors</span></a>



      </div>
<div id="form-wrapper">
    <table><tbody>
        
   <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'user/updateuserinsurance'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'user/updateuserinsurance'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } ?>  
          <?php
      echo form_open('User/user_updateinsurance');
          $id = $this->session->userdata('Id');
       // print_r($t); 
       $insurance = $this->Users_model->insurance();
       //print_r($insurance);
       //$speciality = $this->Users_model->doctorspeciality();
      // $doctors = $this->Users_model->getdoctors();
      // $appointments = $this->Users_model->appointments($id);
      //   echo '<br>';
     // print_r($result); 
       // echo '<br>';
       $current = $this->Users_model->insurancepolicy($id);
      // print_r($current);
       ?>
          <tr><td><p class="h5" style="color: white;">Policies available</p></td></tr><tr><td>
<select name="Insurence" id="Insurence" class="form-control" required="true">
<?php
 foreach($insurance as $item){ ?>
    <option value="<?php  echo $item['Id']; ?>" id="<?php echo $item['Id']; ?>"><?php  echo $item['PolicyNumber']; ?> </option> <?php  } ?></select>
                </td></tr>          
      <?php
 foreach($current as $i){ ?> 
            
             
                    
        <input id="pid" name="pid" type="hidden" value="<?php echo $i->Id; ?>"/>
        <tr><td> <p class="h6" style="color: white">Currently Your Policy </p> </td></tr> <tr><td>
        <input type="text"id="cpolicy" name="cpolicy"value="<?php echo $i->policyno ; ?>" disabled="true" class="form-control" />
            </td></tr>
       <tr><td> <p class="h6" style="color: white">Overview </p> </td></tr> <tr><td>
               <textarea id="about" name="about" disabled="true" class="form-control" cols="20" rows="5">  <?php echo $i->viewpolicy;?> </textarea>
 </td></tr>
            <?php } ?>

								
							
    <tr><td><br></td></tr> <tr><td>							

<button type="submit" class="btn btn-primary pull-left" name="submit">update</button>
<?php 

/*  <tr><td></td></tr>
									Update <i class="fa fa-arrow-circle-right"></i>
								</button>
 * 
 */


echo form_close() ?></td></tr></tbody></table>
</div>
    </body>
</html>

