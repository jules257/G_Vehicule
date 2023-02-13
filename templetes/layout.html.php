
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>REGIDESO - <?= $pageTitle ?></title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/plugins/js/dataTables.bootstrap4.min.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <script src="assets/js/jQuery-2.1.3.min.js"></script>

</head>
<?php 
if(@$_SESSION['Profile']){
$d=array();
foreach ($_SESSION['droits'] as $ress) {
array_push($d,$ress['menu_droit']);
}
?>
<?php if(isset($_SESSION['Profile'])):?>
<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/REG.jpg" width="300px" height="50px" class="logo-iconl" alt="logo icon">
     </a>
   </div>
   
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <?php if(in_array('2-0',$d)){?>
      <li>
        <a href="index.php?controller=vehicule&task=index">
          <i class="zmdi zmdi-directions-car animated infinite fadeInLeft zmdi-hc-fw"></i> <span>VEHICULES</span>
        </a>
      </li>
      <?php }?>
      <?php if(in_array('3-0',$d)){?>
      <li>
        <a href="index.php?controller=service&task=index">
          <i class="zmdi zmdi-help"></i> <span>SERVICES</span>
        </a>
      </li>
      <?php }?>
      <?php if(in_array('4-0',$d)){?>
      <li>
        <a href="index.php?controller=fournisseur&task=index">
       <i class="zmdi zmdi-directions-bike animated infinite fadeInLeft zmdi-hc-fw"></i> <span>FOURNISSEURS</span>
        </a>
      </li>
      <?php }?>
      <?php if(in_array('5-0',$d)){?>
      <li>
        <a href="index.php?controller=vehicule&task=v_service">
          <i class="zmdi zmdi-car"></i> <span>VEHICULE_SERVICES</span>
        </a>
      </li>
      <?php }?>
      <?php if(in_array('1-0',$d)){?>
      <li>
      <a href="index.php?controller=user&task=index">
          <i class="zmdi zmdi-face"></i> <span>UTILISATEURS</span>
        </a>
      </li>
      <?php }?>
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
    </li>
  </ul>

    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/img/<?=   $_SESSION['Profile']['photo'] ?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/img/<?=   $_SESSION['Profile']['photo'] ?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?=   $_SESSION['Profile']['nom'] ?></h6>
            <p class="user-subtitle"><?=   $_SESSION['Profile']['prenom'] ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
  <!--<li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>-->
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="index.php?controller=user&task=logout">Logout</a> </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<?php endif ?>
<?php }?>
  <!--Start Dashboard Content-->
 
  <?= $pageContent ?>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
  <!--start overlay-->

		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer" style="margin-bottom:1200px">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <script src="assets/plugins/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/js/jquery.dataTables.min.js"></script>
  <!-- Index js -->
  <script src="assets/js/index.js"></script>
<script>
  $(".table").DataTable();
  </script>
  
</body>
</html>
