<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<title>My Account Login/Register • MORIMOTO • High Quality HID Projectors, Ballasts, and Bulbs</title>
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

<body class="utility account">

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
                        <h5>My Morimoto</h5>
                        <h2>Login/Register</h2>
                    </div>  
                </div>
            </div>

            <div class="container"><hr></div>
                
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="large">To continue, please create a new account or login with an existing username and password.</p>
                        <p>With an account, we'll save your contact and shipping information so that you can take always advantage of a more convenient shopping experience.</p>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="panelWrap">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Returning Customer</h4></div>
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Email">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Password">
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="small pull-right"><a href="/client/TRS/MorimotoHID/utility/account.php">Forgot Password</a></div>
                                                </div>
                                            </div>
                                            <hr class="aligncenter">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="btn btn-large pull-right"><input class="submit-input" type="submit" value=""/><span class="submit-input-text">Login</span></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>            
                                </div>
                            </div>
                        </div> 

                        <div class="panelWrap">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>New Customer Registration</h4></div>
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="inputDefault" value="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Password">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Confirm Password">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="First Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="inputDefault" value="Company Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Street Address 1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Street Address 2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Region/State">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <select class="" id="country">
                                                        <option value="">Country</option>
                                                        <option value="#">#</option>
                                                        <option value="#">#</option>
                                                        <option value="#">#</option>
                                                        <option value="#">#</option>
                                                        <option value="#">#</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Postal Code">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputDefault" value="Phone">
                                                </div>
                                            </div>                            
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="btn btn-large pull-right"><input class="submit-input" type="submit" value=""/><span class="submit-input-text">Register</span></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>            
                                </div>
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



    <!-- End Document
    ================================================== -->

</body>
</html>