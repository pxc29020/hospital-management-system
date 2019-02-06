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
    <a href="<?php echo base_url().'Doctor/doctorprescripction'; ?>" class="list-group-item active"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
 
    <a href="updatespecialization" class="list-group-item"><i class="fa fa-compass"></i> <span>Update specialization</span></a>




      </div>
   <div id="form-wrapper">
   <?php  if($this->session->flashdata('warning')){  ?>

      
            <a href="<?php echo base_url().'doctor/doctorprescripction'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-danger"><strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); echo '</div>'; } 
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'doctor/doctorprescripction'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } ?>
          <p class="h4" style="color: white;">prescribe Medicine to the patient</p>
<?php echo form_open('doctor/sentdoctorprescripction');?>
<input type="hidden" id="UserId" name="UserId" value="<?php echo $this->session->userdata('Id') ?>"/>
 <?php $id = $this->session->userdata('Id');
       // print_r($t); 
       //$timeslot = $this->Users_model->timeslot();
       //$speciality = $this->Users_model->doctorspeciality();
      // $doctors = $this->Users_model->getdoctors();
       $appointments = $this->Users_model->appointments($id);
      //$td=84;
      //getpatientnames($td)
      // $tt = $this->Users_model->getpatientnames($td);
      // print_r($tt);
       ?>
<?php
/*logic for getting appointment step by step
 * 1 on click submit
 * get all the table data 
 * display it in search and table format
 * radio button list
 * click the radiobutton
 * book it for the doctor
 */
?>          
   <table><tbody>
                <tr><td>
                        <label for="Patient" class="h6" style="color: white;">Select Appointment No:</label>      
               </td></tr>  
                             <tr><td>
<?php 
                            $patients = $this->Users_model->medication($id);
                            $options = array();
                            $options[""]="Select Appointment No";
                            foreach($patients as $item){
                                $options[$item['Id']] = $item['Id'];
                            }
                            
echo form_dropdown('Appointmentno', $options, 'large',['class'=>'form-control','required'=>True]);?>               
               </td></tr> 
                   <tr><td>
 <label class="h6" style="color: white;">patient Full Name:</label>
               
               </td></tr> 
                              <tr><td>
                              <?php 
                            
  $options = array(
                                
      );
                            
 echo form_dropdown('patients', $options, 'large',['class'=>'form-control','required'=>True]);?>
           
               </td></tr> 
                           <tr><td>
 <label class="h6" style="color: white;"> Doctor Prescription</label>
              
               </td></tr> 
                           <tr><td>
  <?php echo form_textarea(['name'=>'doctornotes','placeholder'=>'Type your notes here','type'=>'textarea','class'=>'form-control','required'=>'true','cols'=>19,'rows'=>4])  ?>
             
               </td></tr> 
                            <tr><td>
                                    <br> 
               </td></tr> 
                          <tr><td>
    <input type="submit" class="btn btn-primary pull-left" name="submit" placeholder="Prescribe" />
   <?php echo form_close();
//print_r($appointments);?>            
               </td></tr> 
       </tbody></table>




<br>
                           
  
<br>
<br>
 
   </div>
 </body>
                            <script>
          
 $(document).ready(function(){
   
    $("select[name = Appointmentno]").change(function(){
     debugger;
    var specId = $("select[name = Appointmentno]").val();
    var parms = {id:specId};
    var url = "<?php echo base_url(); ?>Doctor/listofpatients";
   var promise = ajaxCall(url,parms,"GET");
    
  
});
});


function ajaxCall(url,parms,type){
    var specId = $("select[name = Appointmentno]").val();
    debugger;
    $.ajax({
        url: "<?php echo base_url(); ?>Doctor/listofpatients/"+specId+"",
        type:type,
        data: {id:specId},
        async: false,
        dataType: "html",
        success:function(result){
            $('select[name="patients"]').html(result);

        },
        error:function(textStatus, errorThrown){
            debugger;
        }
    });
 
}

                                </script>
                                
                                </html>