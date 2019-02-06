<html>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <title></title>
        <style>
 
  body {
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
 <body>
      <?php include_once 'navbar.php'; ?>

              <div class="list-group">
   
   <a href="<?php echo base_url().'doctor/viewdoctorappointments'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'doctor/updatedoctorprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'Doctor/doctorprescripction'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
 
    <a href="updatespecialization" class="list-group-item active"><i class="fa fa-compass"></i> <span>Update specialization</span></a>




      </div>
   <div id="form-wrapper">
   
      <table><tbody>
  <?php  if($this->session->flashdata('warning')){  ?>

      
            <a href="<?php echo base_url().'doctor/updatespecialization'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'doctor/updatespecialization'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"> <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } ?>   
          <?php
      echo form_open('Doctor/doctor_specialization');
          $id = $this->session->userdata('Id');
       // print_r($t); 
       $specialization = $this->Users_model->specialization();
       //print_r($insurance);
       //$speciality = $this->Users_model->doctorspeciality();
      // $doctors = $this->Users_model->getdoctors();
      // $appointments = $this->Users_model->appointments($id);
      //   echo '<br>';
     // print_r($result); 
       // echo '<br>';
       $currentspl = $this->Users_model->currentspl();
      // print_r($current);
       ?>
          <tr><td><p class="h5" style="color: white;">Update Specialization to</p></td></tr><tr><td>
<select name="Specialization" id="Specialization" class="form-control" required="true">
    <option value="">Select Specialization</option>
    <?php
 foreach($specialization as $item){ ?>
    <option value="<?php  echo $item['Id']; ?>" id="<?php echo $item['Id']; ?>"><?php  echo $item['Name']; ?> </option> <?php  } ?></select>
                </td></tr>          
      <?php
 foreach($currentspl as $i){ ?> 
            
             
                    
        <input id="Special" name="Special" type="hidden" value="<?php echo $i->specilizationid; ?>"/>
        <tr><td> <p class="h6" style="color: white">Current Specialization </p> </td></tr> <tr><td>
        <input type="text"id="cpolicy" name="cpolicy"value="<?php echo $i->specilizationname ; ?>" disabled="true" class="form-control" />
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


echo form_close() ?></td></tr></tbody></table></div>
 </body>
                  
                                </html>