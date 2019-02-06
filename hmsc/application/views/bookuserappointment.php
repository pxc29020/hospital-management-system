<html>
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
<body>
     <?php include_once 'navbar.php'; ?>
     <div class="list-group">
   
    <a href="<?php echo base_url().'user/bookuserappointment'; ?>" class="list-group-item active"><i class="fa fa-key"></i> <span>Book appointment</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-credit-card"></i> <span>view appointment</span></a>
    <a href="<?php echo base_url().'user/updateuserprofile'; ?>" class="list-group-item"><i class="fa fa-question-circle"></i> <span>update profile</span></a>
    <a href="<?php echo base_url().'user/doctornotes'; ?>" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Cancel Appointment</span></a>
   
    <a href="updateinsurance" class="list-group-item"><i class="fa fa-compass"></i> <span>Update Insurance</span></a>
    <a href="#" class="hidden"><i class="fa fa-compass"></i> <span>List of doctors</span></a>



      </div> 
 
     

   
<div id="form-wrapper">
       <table>
               <tbody>
       <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'user/bookuserappointment'; ?>" class="close" data-dismiss="alert">&times;</a>
<tr> <div class="alert alert-success"><strong>Warning!</strong> <?php echo $this->session->flashdata('warning');?> </div></tr><?php }
elseif($this->session->flashdata('success')){?>
    
            <a href="<?php echo base_url().'user/bookuserappointment'; ?>" class="close" data-dismiss="alert">&times;</a>
              <tr><td> <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div></td></tr>
        
    <?php } ?> 
                   <tr><td>
    <p class="h5" style="color:white;">Select the date which you want to book Appointment</p>
   
                       </td></tr>
                   <tr><td>
<?php echo form_open('user/bookappointment');?>
    <p class="h5" style="color:white;">Appointment Date</p>
<input type="date" id="AppointmentDate" class="form-control" name="AppointmentDate" required="true" /></td></tr>
<input type="hidden" id="UserId" name="UserId" value="<?php echo $this->session->userdata('Id') ?>"/>
 <?php $id = $this->session->userdata('Id');
       // print_r($t); 
       $timeslot = $this->Users_model->timeslot();
       //$speciality = $this->Users_model->doctorspeciality();
      // $doctors = $this->Users_model->getdoctors();
       $appointments = $this->Users_model->appointments($id);
      // print_r($appointments);
       ?><tr><td>
<p class="h5" style="color:white;">Appointment time</p>
<select name="AppointmentTime" id="AppointmentTime" class="form-control" required="true">
    <option id=""value="">select time</option>
<?php
 foreach($timeslot as $item){ ?>
    <option id="<?php echo $item['time']; ?>"><?php  echo $item['time']; ?> </option> <?php  } ?></select>
<?php //echo form_dropdown('time', $options, 'large',['class'=>'form-control','required'=>True]);
/*logic for getting appointment step by step
 * 1 on click submit
 * get all the table data 
 * display it in search and table format
 * radio button list
 * click the radiobutton
 * book it for the doctor
 */
?></td></tr>
       <tr><td>
 <p class="h5" style="color:white;">Doctor Specialization:</p>
<?php 
                            $ddlData = $this->Users_model->doctorspeciality();
                            $options = array();
                            $options[""]="Select Specialization";
                            foreach($ddlData as $item){
                                $options[$item['Id']] = $item['Name'];
                            }
                            
                            echo form_dropdown('DoctorSpecialization', $options, 'large',['class'=>'form-control','required'=>True]);?></td></tr>
 
  <tr><td>
 <p class="h5" style="color:white;">Doctors :</p>                          
                            <?php 
    $options[""]="Select Doctor";                        
  $options = array(
                                
      );
                            
  echo form_dropdown('DoctorId', $options, 'large',['class'=>'form-control','required'=>True,'placeholder'=>'Select Doctor']);?> </td></tr>
 <tr><td> <br><input type="submit" class="btn btn-primary" name="submit" placeholder="Book Appointment" />
   <?php echo form_close();
//print_r($appointments); table table-striped table-dark?> </td></tr>  </tbody>  
   </table>  
<table class="hidden">
    <thead>
    <tr>
        
      <th scope="col">Appointment Id</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Time</th>
      
    </tr>
  </thead>
      <tbody>  
 
         <?php  
         foreach ($appointments as $row)  
         {  
            ?><tr>
                 
            <td><?php echo $row['Id'];?></td>
            <td><?php echo $row['AppointmentDate'];?></td>  
            <td><?php echo $row['AppointmentTime'];?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
</div>
</body>
                            <script>
         
                     $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate() + 1;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#AppointmentDate').attr('min', minDate);
});            
 $(document).ready(function(){
   
    $("select[name = DoctorSpecialization]").change(function(){
     debugger;
    var specId = $("select[name = DoctorSpecialization]").val();
    var parms = {id:specId};
    var url = "<?php echo base_url(); ?>User/doctorslist";

    var promise = ajaxCall(url,parms,"GET");
    
});
});


function ajaxCall(url,parms,type){
    var specId = $("select[name = DoctorSpecialization]").val();
    debugger;
    $.ajax({
        url: "<?php echo base_url(); ?>User/doctorslist/"+specId+"",
        type:type,
        data: {id:specId},
        async: false,
        dataType: "html",
        success:function(result){
            $('select[name="DoctorId"]').html(result);

        },
        error:function(textStatus, errorThrown){
            debugger;
        }
    });
 
} 
                                </script>
                                
                                </html>