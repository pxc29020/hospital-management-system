<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <style>
   html {
 background-image: url("<?php echo base_url();?>images/backimg.jpg");
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
    </style> 
   
</head>
<body>
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 
                    <a class="navbar-brand" href="<?php echo base_url();?> ">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
               
                      <li><a href="<?php echo base_url().'Welcome/about'; ?>">About US</a></li>
                            <li><a class="hidden" href="<?php echo base_url().'Welcome/contactus'; ?>">Contact</a></li>
                        </ul>
                </div>
            </div>
        </nav> 

    <div id="form-wrapper">
        <p class="h1" style="color:white;">Patient Login</p>
	<?php echo form_open('Login/CheckUserAuthentication');?>
   
<?php  if($this->session->flashdata('error')){  ?>

      
        <a href="<?php echo base_url().'user/Loginpage'; ?>" class="close" data-dismiss="alert">&times;</a>
<div class="alert alert-danger"><strong>Error!</strong> <?php echo $this->session->flashdata('error'); echo '</div>'; }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'user/Loginpage'; ?>" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        
    <?php } ?>	
           <table>
               <tbody>
                  <tr>
                 
                     <td>								
<?php echo form_input(['name'=>'Email','placeholder'=>'Email','type'=>'email','class'=>'form-control','required'=>'true'])  ?>
                         <br></td></tr>
                   <tr>
                          <td>              
<?php echo form_input(['name'=>'Password','placeholder'=>'Password','type'=>'password','class'=>'form-control','required'=>'true'])  ?>
                              <br></td></tr>  <tr><td>
								<button type="submit" class="btn btn-primary" name="submit">
									Login 
                                                                </button> </td></tr>
                   <tr><td>
							
                       <span class="h6" style="color:#cccccc">  Don't have an account?</span><a class="h6" style="color:lightblue;" href="registration">
									Register
                                                                </a></td></tr></tbody>
            </table>


    <p class="h6" style="color:white;">Sample login and password</p>
    <p class="h3" style="color:white;">t@t.com and admin123</p>

        <?php echo form_close() ?></div>

</body>


</html>
