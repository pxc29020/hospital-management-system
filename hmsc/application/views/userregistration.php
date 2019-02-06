<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <style type="text/css">
         .container.body-content {
    padding-bottom: 110px;
    height: 500px; /* Force height on body */
}

  
       body {
 background-image: url("<?php echo base_url();?>images/backimg.jpg");
 background-size: cover;
        }
  
  
  .center {
  text-align: center;
    margin-top: -100px;  
}

.dropdown-menu{
  width: 200px;
  text-align:center !important;
  float: none !important;
  margin: 0 auto !important;
}
 

</style>
    <body>
         <?php include_once 'navbarregistrationpage.php'; ?>
   <center>
            
   <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'user/registration'; ?>" class="close" data-dismiss="alert">&times;</a>
 <div class="alert alert-danger"><strong>Warning!</strong> <?php  echo $this->session->flashdata('warning');?></div><?php }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'user/registration'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } elseif($this->session->flashdata('FullName')){?>
     
            <a href="<?php echo base_url().'user/registration'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } ?>   
     
       <label class="h3" style="color:white">User Registration</label>>
             <div class="hidden">
                <img src="<?php echo base_url('images/usr.jpg') ?>" alt="test" height="100px" width="80px">
            </div>
                    <table><tbody>
                           
                  <?php echo form_open('User/register_user')?>
                             <tr><td>    <p style="color:white" class="h5">Full Name:</p>
   </td></tr>           <tr><td>  <input type="text" id="FullName" name="FullName" required="true" />
             </td></tr>  <tr><td> 
<input type="hidden" name="Active" id="Active" value="1"/></td></tr> 
                <tr><td>             <label class="h5" style="color:white" for="password" class="col-sm-3 control-label">Password:</label>
            </td></tr>     <tr><td>                   <input type="password" id="Password" name="Password" required="true"/>
    </td></tr>    <tr><td>                  <label class="h5" style="color:white" for="Address" class="col-sm-3 control-label">Address:</label>
     </td></tr>        <tr><td>             <textarea id="Address" rows="3" cols="20" name="Address" required="true"></textarea>
             </td></tr>              

                  <tr><td>          <label class="h5" style="color:white" for="Gender"  class="col-sm-3 control-label">Gender:</label>
         </td></tr>         <tr><td>             <select name="Gender" class="form-control" value="" required="true">
                              <option value="">select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    
                                </select> </td></tr>
        <tr><td>                  <label class="h5" style="color:white;" for="Email" class="col-sm-3 control-label">Email:</label>
                       </td></tr>   <tr><td>      <input type="Email" id="Email" name="Email" required="true"/>
                     
            </td></tr><tr><td><label class="h5" style="color:white;" for="phno">Phone Number</label></td></tr><tr><td><?php $data = array(
  'name' => 'phno',
  'id'   => 'phno',
  'class'=> 'form-control',
   'placeholder'=>'',
  'type' => 'number',
    'required'=>TRUE
);

            echo form_input($data); ?></td></tr>   <tr><td>                        <label class="h5" for="insurance" style="color:white" >Insurance:</label>
                            </td></tr>
        <tr><td> <?php $insurance = $this->Users_model->insurance();  ?>
                <select name="Insurence" class="form-control" required="true">
                  <?php  foreach($insurance as $item){ ?>
    <option value="<?php  echo $item['Id']; ?>" id="<?php echo $item['Id']; ?>"><?php  echo $item['PolicyNumber']; ?> </option> <?php  } ?></select>
 
                
                </select>
                         </td></tr>
          <tr><td>                 <label class="h5" style="color:white" for="Allergies" class="col-sm-3 control-label">Allergies:</label>
              </td></tr>         <tr><td>             <textarea id="Allergies" rows="3" cols="18" name="Allergies" required="true"></textarea>
              </td></tr> <tr><td><br></td></tr>    <tr><td> <button type="submit" class="btn btn-success btn-sm">Register</button>
                            <?php    echo form_close();?> </td></tr>  </tbody></table>
                <!--form close    </form>-->
    
             
      
            
         </center>
      
    </body>
      
</html>