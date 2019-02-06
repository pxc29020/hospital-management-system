<html>
   <head>
      <title>HOME</title>
        <meta charset="utf-8">
        
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
.dropdown-menu{
  width: 200px;
  text-align:center !important;
  float: none !important;
  margin: 0 auto !important;
}
 



        </style>


   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                     
                    <a class="navbar-brand" disable="true" href="<?php echo base_url(); ?>">Welcome</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url().'Welcome/about'; ?>">About US</a></li>
                            <li><a class="hidden" href="<?php echo base_url().'Welcome/contactus'; ?>">Contact</a></li>
                        </ul>
                </div>
            </div>
        </nav> 

   </head>
   <body background="<?php echo base_url('images/aaa.jpg'); ?>">
       <div id="form-wrapper">
 
       <table>
           <tbody>
                <?php //$this->load->helper('form');
                
                echo form_open("Welcome/Contact_us"); ?>
        
      <?php  if($this->session->flashdata('warning')){  ?>
 <a href="<?php echo base_url().'welcome/contactus'; ?>" class="close" data-dismiss="alert">&times;</a>
<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); }
elseif($this->session->flashdata('success')){?>
     
            <a href="<?php echo base_url().'welcome/contactus'; ?>" class="close" data-dismiss="alert">&times;</a>
            <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?></div>
        
    <?php } ?>  
              
               <tr><p class="h4" style="color: white;">Contact Us</p></tr>
       <tr><input class="form-control" required="true" placeholder="Enter Name*" name="Name" id="Name"/></tr>
<tr><input class="form-control" required="true" placeholder="Enter Subject*" id="Subject" name="Subject"/></tr>
<tr><input class="form-control" id="Email" required="true"  placeholder="Enter Email*" name="Email"/></tr>
<tr><?php $data = array(
  'name' => 'phno',
  'id'   => 'phno',
  'class'=> 'form-control',
   'placeholder'=>'Enter phone number',
  'type' => 'number',
    'required'=>TRUE
);

echo form_input($data); ?></tr>      
<tr><textarea class="form-control" cols="20" rows="5" required="true" placeholder="Enter Comments*" name="Comments"></textarea></tr>
<tr><button type="submit" class="btn btn-primary" name="submit">
									submit 
                                                                </button>

</tr> 
</tbody>
       </table><?php echo form_close() ?>
       </div>       <a href="mailto:pxc29020@ucmo.edu">You can email us</a>
   
</body>
</html>