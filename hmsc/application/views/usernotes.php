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
    <a href="<?php echo base_url().'user/doctornotes'; ?>" class="list-group-item active"><i class="fa fa-arrow-circle-o-left"></i> <span>Doctor Notes</span></a>
    <a href="<?php echo base_url().'user/viewuserappointments'; ?>" class="list-group-item"><i class="fa fa-book"></i> <span>Cancel Appointment</span></a>
   
    <a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Update Insurance</span></a>
    <a href="#" class="hidden"><i class="fa fa-compass"></i> <span>List of doctors</span></a>



      </div>
       <div id="form-wrapper">
             <table>
               <tbody>
                   <tr><td> <p class="h5" style="color:white;">Appointment Id:</p></td></tr><tr><td>
        <?php
        $id = $this->session->userdata('Id');
      
     //  print_r($getnotes);
        ?>
     <?php 
                             $getnotes= $this->Users_model->getnotes($id);
                            $options = array();
                            $options[""]="Select Appointment Id No in the View Appointments ";
                            foreach($getnotes as $item){
                                $options[$item->Id] = $item->Id;
                            }
                            
                            echo form_dropdown('appointmentid', $options, 'large',['class'=>'form-control','required'=>True]);?><br>
 <?php $options = array(
                                
                            );?>
                    </td></tr><tr><td> <p class="h5" style="color:white;">Doctor Notes:</p></td></tr><tr><td> <?php     
//echo form_dropdown('DoctorId', $options, 'large',['class'=>'form-control','required'=>True]);
echo form_dropdown('doctornotes', $options, 'large',['class'=>'form-control','required'=>True]);?>
                       </td></tr><tr><td>                  <p class="h4" style="color: lightblue;">If notes are blank</p><p class="h4" style="color: lightblue;">Not yet available at this moment</p>
                       </td></tr></tbody></table>
                           </div>
                            </body>
    <script>
        $(document).ready(function(){
   
    $("select[name = appointmentid]").change(function(){
     debugger;
    var specId = $("select[name = appointmentid]").val();
    var parms = {id:specId};
    var url = "<?php echo base_url(); ?>user/doctorinstructions";

    var promise = ajaxCall(url,parms,"GET");
    
})
});


function ajaxCall(url,parms,type){
    var specId = $("select[name = appointmentid]").val();
    debugger;
    $.ajax({
        url: "<?php echo base_url(); ?>user/doctorinstructions/"+specId+"",
        type:type,
        data: {id:specId},
        async: false,
        dataType: "html",
        success:function(result){
      
            $('select[name="doctornotes"]').html(result); 

        },
        error:function(textStatus, errorThrown){
            debugger;
        }
    });
} 


        </script>
</html>
