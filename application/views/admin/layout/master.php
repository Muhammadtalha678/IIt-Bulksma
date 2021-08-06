
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?> | IIT Bulk SMS</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- NEED TO WORK ON -->

    <link href="/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link  href="/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dropzone.css">

    <!-- BEGIN CORE JS FRAMEWORK--> 
    <script src="/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
    <script src="/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="/assets/plugins/breakpoints.js" type="text/javascript"></script> 
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
    <script src="/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
    <!-- END CORE JS FRAMEWORK --> 
    <!-- BEGIN PAGE LEVEL JS -->    
    <script src="/assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>    
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
    <script src="/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.stringToSlug.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->     
    
    <!-- BEGIN CORE TEMPLATE JS --> 
    <script src="/assets/js/core.js" type="text/javascript"></script> 
    <script src="/assets/js/chat.js" type="text/javascript"></script> 
    <script src="/assets/js/demo.js" type="text/javascript"></script>
     <script src="/assets/js/my_script.js"></script>
    <!-- END CORE TEMPLATE JS --> 

    <!-- END NEED TO WORK ON -->

</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <!-- BEGIN NAVIGATION HEADER -->
        <div class="header-seperation"> 
            <!-- BEGIN MOBILE HEADER -->
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">    
                <li class="dropdown">
                    <a id="main-menu-toggle" href="#main-menu" class="">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>        
            </ul>
            <!-- END MOBILE HEADER -->
            <!-- BEGIN LOGO --> 
            <h4 style="margin-left: 40px"><strong style="color:white">IIT Bulksms<br>CMS Panel</strong></h4>
            <!-- END LOGO --> 
            </div>
        <!-- END NAVIGATION HEADER -->
        <!-- BEGIN CONTENT HEADER -->
        <div class="header-quick-nav"> 
            <!-- BEGIN HEADER LEFT SIDE SECTION -->
            <!-- END HEADER LEFT SIDE SECTION -->
            <!-- BEGIN HEADER RIGHT SIDE SECTION -->
            <div class="pull-right"> 
                <div class="chat-toggler">  
                    <!-- BEGIN NOTIFICATION CENTER -->
                    <a href="#">
                        <div class="user-details"> 
                            <div class="username">
            
                                <span class="bold"><?php echo $this->session->userdata('fullname'); ?></span>
                            </div>                      
                        </div> 
                        &nbsp; &nbsp; &nbsp; &nbsp; 
                    </a>    
                    
                    <!-- END NOTIFICATION CENTER -->
                    <!-- BEGIN PROFILE PICTURE -->
                    <div class="profile-pic"> 
                        <img src="/assets/img/image-5.jpg" alt="" data-src="/assets/img/image-5.jpg" data-src-retina="/assets/img/image-5.jpg" width="35" height="35" />
                    </div>  
                    <!-- END PROFILE PICTURE -->                
                </div>
                <!-- BEGIN HEADER NAV BUTTONS -->
                <ul class="nav quick-section">
                    <!-- BEGIN SETTINGS -->
                    <li class="quicklinks"> 
                        <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
                            <div class="iconset top-settings-dark"></div>   
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="#" target="_blank">Preview</a></li>
                            <li><a href="/admin/Home/change_password">Change Password</a></li>
                            <li class="divider"></li>                 
                            <li><a href="/admin/Home/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
                        </ul>
                    </li>
                    <!-- END SETTINGS -->
                </ul>
                <!-- END HEADER NAV BUTTONS -->
            </div>
            <!-- END HEADER RIGHT SIDE SECTION -->
        </div> 
        <!-- END CONTENT HEADER --> 
    </div>
    <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN MENU -->
    <div class="page-sidebar" id="main-menu"> 
          <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <!-- BEGIN MINI-PROFILE -->
        <div class="user-info-wrapper"> 
            <div class="profile-wrapper">
                <img src="/assets/img/image-5.jpg" alt="" data-src="/assets/img/image-5.jpg" data-src-retina="/assets/img/image-5.jpg" width="69" height="69" />
            </div>
            <div class="user-info">
                <div class="greeting">Welcome</div>
                <div class="username"><span class="semi-bold"><?php echo $this->session->userdata('fullname'); ?></span></div> &nbsp; &nbsp;
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU --> 
        <p class="menu-title"></p>
        <ul>
            <?php $segment = $this->uri->segment(2) ?>
            <li class="start <?php if ($segment == 'member'){echo 'active';} ?>"><a href="/admin/member"><i class="fa fa-users"></i><span class="title">Member</span><span class="selected"></span></a></li>
            <li class="start  <?php if ($segment == 'category'){echo 'active';} ?>"><a href="/admin/category"><i class="fa fa-tasks"></i><span class="title">Category</span><span class="selected"></span></a></li>
            <li class="start  <?php if ($segment == 'message'){echo 'active';} ?>"><a href="/admin/message"><i class="fa fa-briefcase"></i><span class="title">SMS</span><span class="selected"></span></a></li>
            <li class="start  <?php if ($segment == 'media'){echo 'active';} ?>"><a href="/admin/media"><i class="fa fa-film"></i><span class="title">Media</span><span class="selected"></span></a></li>
            <li class="start  <?php if ($segment == 'subscriber'){echo 'active';} ?>"><a href="/admin/subscriber"><i class="fa fa-check-square-o"></i><span class="title">Subscriber</span><span class="selected"></span></a></li>
            <li class="start  <?php if ($segment == 'webmaster'){echo 'active';} ?>"><a href="/admin/webmaster"><i class="fa fa-user"></i><span class="title">Webmaster</span><span class="selected"></span></a></li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    </div>
    <!-- END MENU -->
    <!-- BEGIN SIDEBAR FOOTER WIDGET -->
    <div class="footer-widget">     
       <a href="http://www.alfateemacademy.com" target="_blank"> Al-Fateem Academy  <small>&reg;</small> </a>
    </div>
    <!-- END SIDEBAR FOOTER WIDGET -->
    <!-- END SIDEBAR --> 
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
             <h2> <?php echo $title ?>     </h2>
        </div>
            <?php $this->load->view($maincontent) ?>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
     <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
</body>
</html>



