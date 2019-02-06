  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
        
          <?php if($this->session->userdata('IsDoctor') == 0) {?>      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
         
                    <a class="navbar-brand" href="<?php echo base_url().'user/userdashboard'; ?> ">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
               
                            <li><a class="hidden"href="#">About US</a></li>
                            <li><a class="hidden" href="#">Contact</a></li>
                        </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li> <a href="<?php echo base_url().'user/updatepassword'; ?>" >Update Password</a></li>
       <li><a href="<?php echo base_url().'user/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
                </div>
            </div>
        </nav>  
             <?php }elseif($this->session->userdata('IsDoctor') == 1) {?>      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
         
                    <a class="navbar-brand" href="<?php echo base_url().'doctor/doctordashboard'; ?> ">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
               
                            <li><a class="hidden" href="#">About US</a></li>
                            <li><a class="hidden" href="#">Contact</a></li>
                        </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li> <a href="<?php echo base_url().'doctor/updatedoctorpassword'; ?>" >Update Password</a></li>
       <li><a href="<?php echo base_url().'doctor/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
                </div>
            </div>
        </nav>  
             <?php }elseif($this->session->userdata('IsDoctor') == 2) {?>      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
         
                    <a class="navbar-brand" href="<?php echo base_url().'admin/admindashboard'; ?> ">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
               
                            <li><a class="hidden" href="#">About US</a></li>
                            <li><a class="hidden" href="#">Contact</a></li>
                        </ul>
              <ul class="nav navbar-nav navbar-right">
  <li><a href="<?php echo base_url().'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
                </div>
            </div>
        </nav>  
             <?php }