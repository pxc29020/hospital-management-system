<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
$id  = $this->uri->segment(3);
-->
<html>
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .selector-for-some-widget {
  box-sizing: content-box;
}

</style>
        <title></title>
    </head>
    <body>
         <li><a href="<?php echo base_url().'admin/manageusers'; ?>">Active users</a></li>
        <?php
     $id  = $this->uri->segment(3);
 $getuserdata = $this->Users_model->admingetuserdata($id);
 print_r($getuserdata);
 
        ?>
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
         <?php  foreach($getuserdata as $r){
 //Gender;  ?>
            <!---form open--><?php echo form_open('Admin/adminupdateuser')?>
                        <div class="form-group">
                        <div class="col-sm-9">
                            <input type="hidden" id="Id" name="Id" value="<?php print_r($id) ?>" />
                            </div>
                            <label for="username" class="col-sm-3 control-label">Full Name:</label>
                            <div class="col-sm-9">
                                <input type="text" id="username" name="FullName" value="<?php echo $r->FullName; ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" value="<?php echo $r->Password; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Address" class="col-sm-3 control-label">Address:</label>
                            <div class="col-sm-9">
                                <textarea id="Address" rows="3" cols="20" name="Address" ><?php echo $r->Address; ?></textarea>
                            </div>
                        </div>
<?php //[City] => kansas city [Gender] => Male
// [Email] => sam@ucmoedu.com [Password] => test 
// [Insurence] => 1 [Allergies] => test

?>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Gender:</label>
                            <div class="col-sm-9">
                                <select name="Gender" value="">
                                    
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="col-sm-3 control-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="Email" id="Email" name="Email" value="<?php echo $r->Email; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="insurance" class="col-sm-3 control-label">Insurance:</label>
                            <div class="col-sm-9">
                                <input type="text" id="insurance" name="insurance" value="<?php echo $r->Insurence; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Allergies" class="col-sm-3 control-label">Allergies:</label>
                            <div class="col-sm-9">
                                <input type="Allergies" id="password" name="Allergies" value="<?php echo $r->Allergies; ?>"/>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                            </div>
                        </div><?php }   echo form_close();?>
                <!--form close    </form>-->
           
        </div>
    </div>
</div>
    </body>
</html>
