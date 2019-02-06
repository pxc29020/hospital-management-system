
<!DOCTYPE html>
<html lang="en">
 <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <style>
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
    margin-top: -100px;     /* Half of height */
    margin-left: -125px;     /* Half of width */
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
    <div class="sidenav">
        
    </div>
</body>
 

   <?php $session_data = $this->session->userdata;
  // print_r($session_data);
   $now = new DateTime();
//$now->setTimezone(new DateTimezone('America/Chicago'));
//echo $now->format('Y-m-d H:i:s');
   ?>
   <div class="list-group">
   
    <a href="<?php echo base_url().'user/bookuserappointment'; ?>" class="list-group-item active"><i class="fa fa-key"></i> <span>Book appointment</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'user/updateuserprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'user/doctornotes'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Cancel Appointment</span></a>
   
    <a href="updateuserinsurance" class="list-group-item"><i class="fa fa-compass"></i> <span>Update Insurance</span></a>
    <a href="#" class="hidden"><i class="fa fa-compass"></i> <span>List of doctors</span></a>



      </div>  
 
</html>
