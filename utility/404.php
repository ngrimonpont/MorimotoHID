<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<title>404 Page Missing • MORIMOTO • High Quality HID Projectors, Ballasts, and Bulbs</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="SHIMITS Design/Development">

	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
    ================================================== -->
    <link href="../css/bootstrap-theme-full.css" rel="stylesheet">
    <link href="../css/morimoto-theme.css" rel="stylesheet">

	<!-- Javascript [primary]
    ================================================== -->
  	<script src="../js/modernizr.custom.63321.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="icon" sizes="32x32" href="../img/favicon-32.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="../img/favicon-152.png">

</head>

<body class="utility">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

        <div class="section description intro">
            <div class="container">
                <div class="row">
                    <div class="lead col-xs-12">
                        <h5>WHOOPS, OUR BAD...</h5>
                        <h2>The page requested was not found.</h2>
                    </div>  
                </div>
            </div>

            <div class="container"><hr></div>

            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>If you typed the URL directly, please make sure the spelling is correct. If you clicked on a link to get here, the link is outdated.</p>
                                <p><span class="lead">What can you do?</span></p>
                                <p><a href="#">Go back to the previous page.</a> Or,</p>
                                <p>Follow these links to get you back on track!</br>
                                <a href="#">Morimoto Home</a> | <a href="#">My Account</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    
        


    <!-- End Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <?php require('../shared/footer.html');?>
    <?php require('../shared/modals.html');?>


    

	<!-- Javascript [secondary]
  	================================================== -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- ALL: TOGGLE SCRIPT for Nav -->
    <script type='text/javascript'>
        $(function() {
            $('.navbar-main .products').click(function() {
                $('.header-under .dropdown-menu').slideToggle('fast');
                return false;
                });
            });

        $(document).click(function() {
            $('.header-under .dropdown-menu').slideUp('fast');
            });

            $(".header-under .dropdown-menu").click(function(e) {
            e.stopPropagation(); 
        });
    </script>  

    <!-- ALL: iOS Viewport Fix -->
    <script type="text/javascript">
    var iOS = navigator.userAgent.match(/(iPod|iPhone|iPad)/);
    if(iOS){

       function iosVhHeightBug() {
          var height = $(window).height();
          $(".dropdown-menu").css('min-height', height);
       }

       iosVhHeightBug();
       $(window).bind('resize', iosVhHeightBug);
    }  
    </script> 

    

    <!-- Google Analytics-->
    

    <!-- End Document
    ================================================== -->

</body>
</html>