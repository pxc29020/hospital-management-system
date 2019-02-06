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
                          <form action="" method="POST">
    
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
  
         <center>
             <p class="h3" style="color:white">UCM Health Care</p>
            <div>
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url('images/downl.jpg') ?>" alt="test" height="130px" width="130px"></a>
            </div>
            <br>
            <p class="h5"style="color:white"><b>Select your role and Login into the system</b></p>

            <div  class="roleS">
               <span></span><span></span><span></span>
<div class="dropdown">
      <button class="btn btn-default dropdown-toggle"  type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        Select Role
        <span class="caret"></span>
      </button>

      <ul class="dropdown-menu" style="right: 0; left: 0;" role="menu" aria-labelledby="dropdownMenu1">
        <li class="text-center" role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url().'User/LoginPage'; ?>">Patient</a>
        </li>
        <li class="text-center" role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url().'Doctor/DoctorLoginPage'; ?>">Doctor</a>
        </li>
        <li class="text-center" role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url().'Admin/adminlogPage'; ?>">Administrator</a>
        </li>
      </ul>
    </div> 
            </div>
            <br>
            <table>
               <tr>
                  <td>
                     <!--redirect to user registration form when click on link-->
                     <span class="h6" style="color:white">  Don't have an account?</span><a class="h6" style="color:lightblue;" href="user/registration">
									Register
                                                                </a>
                  </td>
               </tr>
            </table>
         </center>
      </form>
   </body>
</html>