<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
    				<li class="text-center"><img src="assets/img/find_user.png" class="user-image img-responsive"/></li>

                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=brio"><i class="fa fa-dashboard fa-3x"></i> Brio</a></li>
                    <li><a href="index.php?halaman=mobilio"><i class="fa fa-dashboard fa-3x"></i> Mobilio</a></li>
                    <li><a href="index.php?halaman=brv"><i class="fa fa-dashboard fa-3x"></i> BR-V</a></li>
                    <li><a href="index.php?halaman=jazz"><i class="fa fa-dashboard fa-3x"></i> Jazz</a></li>
                    <li><a href="index.php?halaman=hrv"><i class="fa fa-dashboard fa-3x"></i> HR-V</a></li>
                    <li><a href="index.php?halaman=civichatchback"><i class="fa fa-dashboard fa-3x"></i> Civic Hatchback</a></li>
                    <li><a href="index.php?halaman=civicsedan"><i class="fa fa-dashboard fa-3x"></i> Civic Sedan</a></li>
                    <li><a href="index.php?halaman=crv"><i class="fa fa-dashboard fa-3x"></i> CR-V</a></li>
                    <li><a href="index.php?halaman=accord"><i class="fa fa-dashboard fa-3x"></i> Accord</a></li>
                    <li><a href="index.php?halaman=oddysey"><i class="fa fa-dashboard fa-3x"></i> Odyysey</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> Logout</a></li>
                    
     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php   
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman']=="brio") {
                       include 'brio.php';
                    }elseif ($_GET['halaman']=="mobilio"){
                            include 'mobilio.php';
                    }elseif ($_GET['halaman']=="brv") {
                        include 'brv.php';
                    }elseif ($_GET['halaman']=="jazz") {
                        include 'jazz.php';
                    }elseif ($_GET['halaman']=="hrv"){
                        include 'hrv.php';
                    }elseif ($_GET['halaman']=="civichatchback"){
                        include 'civichatchback.php';
                    }elseif ($_GET['halaman']=="civicsedan") {
                        include 'civicsedan.php';
                    }elseif ($_GET['halaman']=="crv") {
                        include 'crv.php';
                    }elseif($_GET['halaman']=="accord"){
                        include 'accord.php';
                    }elseif ($_GET['halaman']=="oddysey") {
                        include 'oddysey.php';
                    }
                }else{
                    include 'home.php';
                } 
                ?>

            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
