<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title><?php echo $title.' - Jagannath University'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    
    <link href="css/style.css" rel="stylesheet" media="screen">
        
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="Javascript:void(0);" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a href="<?php echo base_url(); ?>"Home</a></li>
                <li><a href="index.html#">Events</a>
                    <ul>
                        <li><a href="events-grid.html">Events Grid</a></li>
                        <li><a href="events-list.html">Events List</a></li>
                        <li><a href="event-single.html">Event Details</a></li>
                    </ul>
                </li>
                <li><a href="index.html#">Courses</a>
                    <ul>
                        <li><a href="courses.html">Course List</a></li>
                        <li><a href="course-single.html">Course Single</a></li>
                    </ul>
                </li>
                <li><a href="index.html#">Blog Entries</a>
                    <ul>
                        <li><a href="blog.html">Blog Grid</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-disqus.html">Blog Disqus</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Pages</a>
                    <ul>
                        <li><a href="archives.html">Archives</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="gallery.html">Our Gallery</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
            </ul> <!-- /.main_menu -->
            <ul class="social_icons">
                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="index.html#"><i class="fa fa-rss"></i></a></li>
            </ul> <!-- /.social_icons -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="logo">
                        <a href="index.html" title="Universe" rel="home">
                            <img src="images/logo.png" alt="Universe">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-6 header-right">

                
                    <ul class="small-links">
                        <li><i class="fa fa-phone"></i> +01 2334 853</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:email@universe.com">email@universe.com</a></li>
                    </ul>
                
                    <ul class="small-links">
                        <li><a href="index.html#">About Us</a></li>
                        <li><a href="index.html#">Contact</a></li>
                        <li><a href="index.html#">Admission</a></li>
                    </ul>
                    <div class="search-form">
                        <form name="search_form" method="get" action="index.html#" class="search_form">
                            <input type="text" name="s" placeholder="Search the site..." title="Search the site..." class="field_search">
                        </form>
                    </div>
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="index.html#">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="events-grid.html">Events Grid</a></li>
                                    <li><a href="events-list.html">Events List</a></li>
                                    <li><a href="event-single.html">Events Details</a>
                                </ul>
                            </li>
                            <li><a href="index.html#">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.html">Courses List</a></li>
                                    <li><a href="course-single.html">Course Single</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html#">Blog Entries</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="blog-disqus.html">Blog Disqus</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="gallery.html">Our Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="index.html#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="index.html#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="index.html#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="index.html#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="index.html#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->