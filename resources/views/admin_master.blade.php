<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Car Rent</title>
    <!-- Bootstrap Core CSS -->
    <link href="cssadmin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="cssadmin/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="cssadmin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="cssadmin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="cssadmin/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    
    <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="#"><span class="hidden-xs"><img src="cssadmin/images/logo.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="cssadmin/images/users/Admin.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="adminuser" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data User</span></a>
                    </li>
                    <li>
                        <a href="adminmobil" class="waves-effect"><i class="fa fa-tree fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Mobil</span></a>
                    </li>
                    <li>
                        <a href="adminblog" class="waves-effect"><i class="fa fa-file-text fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Blog</span></a>
                    </li>       
                    <li>
                        
                    </li>             
                </ul>
                
            </div>
        </div>

    @yield('admin_konten')
    
    <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="cssadmin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="cssadmin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="cssadmin/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="cssadmin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="cssadmin/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="cssadmin/js/custom.min.js"></script>
</body>

</html>
