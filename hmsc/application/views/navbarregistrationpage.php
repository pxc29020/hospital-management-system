  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <?php if($this->session->userdata('Id') == '') {?>      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
         
                    <a class="navbar-brand" href="<?php echo base_url(); ?> ">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
               
                             <li><a href="<?php echo base_url().'Welcome/about'; ?>">About US</a></li>
                            <li><a class="hidden" href="<?php echo base_url().'Welcome/contactus'; ?>">Contact</a></li>
                          </ul>
              
                </div>
            </div>
        </nav>  
             <?php }