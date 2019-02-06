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

.dropdown-menu{
  width: 200px;
  text-align:center !important;
  float: none !important;
  margin: 0 auto !important;
}
 #form-wrapper {     
    width: 800px;           /* Set this to your convenience */
    height: 200px;          /* Set this to your convenience */
    position: absolute;
    top: 50%;
    left: 30%;
    margin-top: -155px;     /* Half of height */
    margin-left: -180px;     /* Half of width */
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
      <script type="text/javascript">
      history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
      </script>
   </head>
   <body background="<?php echo base_url('images/aaa.jpg'); ?>">
      <?php if(isset($_SESSION['success'])){ ?>
      <div class="form_error"><?php echo $_SESSION['success']; ?></div>
      <?php
         } ?>
      <?php
         //session with name error is declared the condition $rowcount==0 in the login of welcome controller
         if(isset($_SESSION['error'])){ ?>
      <div class="form_error"><?php echo $_SESSION['error']; ?></div>
      <?php
         } ?>
  <?php //$t = $this->Users_model->about();
  
 //print_r($t);
  
  ?>
     <div id="form-wrapper">
     
      <p class="h3" style="color: white;">Welcome to UCM Health Sciences</p>
 <p class="h5" style="color: white;">
    About,</p>
 <p class="h5" style="color: white;">
   
Welcome to UCM Health care Services and thank you for visiting our Web site.  We hope that it provides the information that you are seeking and want to hear from you if you have suggestions about how we can make it even more useful to you. You can suggest in contact us. 

As you may know, UCM Health care Services includes Education and providing more health care services in different specializations like Gynecologist/Obstetrician,General Physician,Dermatologist,Homeopath,Ayurveda,Dentist,Ear-Nose-Throat (Ent) Specialist,Bones Specialist demo.also we have minimum two doctors available in the above specializations.
 </p>
  <p class="h4" style="color: white;">
   
Our Motive
  </p><p class="h5" style="color: white;">
   
To Provide good health care services for the patients as well as doctors this website was developed using 
front-end pages will be developed using HTML5, CSS3, Ajax, JavaScript and PHP will be used. For database, I used MySQL Server 
and CodeIgniter Framework.

  </p>
     <p class="h4" style="color: white;">
   
Founder
  </p><p class="h5" style="color: white;">
      This was developed by: Pradeep Chandra Chitti</p><p class="h5" style="color: white;">
      
 email: pxc29020@ucmo.edu</p>  <p class="h5" style="color: white;">
     University of Central Missouri </p>
  <p class="h5" style="color: white;">
     student id : 700672902</p>
   
  <p class="h5" style="color: white;">
 phone number : +1-571-419-9244</p><p class="h5" style="color: white;">
 </p>    <p class="h3" style="color: white;">
   
     Contact Us </p>
  <p class="h5" style="color: white;">
 You can contact use at</p><p class="h5" style="color: white;">
Mail:<a href="mailto:pxc29020@ucmo.edu">   Email</a></p><p class="h5" style="color: white;">
  1101 NW Innovation Parkway,</p><p class="h5" style="color: white;">
  Lee's Summit,</p><p class="h5" style="color: white;">
  MO 64086</p><p class="h5" style="color: white;">
  </p>  
     </div>   
   </body>
</html>