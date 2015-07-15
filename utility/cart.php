<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<title>Shopping Cart • MORIMOTO • High Quality HID Projectors, Ballasts, and Bulbs</title>
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

<body class="utility cart">

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
                        <h5>Lorem Ipsum</h5>
                        <h2>Shopping Cart</h2>
                    </div>  
                </div>
            </div>

            <div class="container"><hr></div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <!-- If User is logged in -->
                        <div class="panelWrap panel-product hidden-xs hidden-sm">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Morimoto Account of:</h5>
                                    <h3>Joshua Kossoff</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="small lead text-uppercase">Default Billing Address</p>
                                            <p class="small">
                                                <span class="user-name">Matt Kossoff</span></br>
                                                <span class="user-address">8385 Allegiance Rd. Unit E</span></br>
                                                <span class="user-city">Columbus</span>, <span class="user-state">OH</span>, <span class="user-zip">43235</span></br>
                                                <span class="user-country">United States</span></br>
                                                <span class="user-phone">4406668214</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body panel-footer">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="small lead text-uppercase">Default Shipping Address</p>
                                            <p class="small">
                                                <span class="user-name">Matt Kossoff</span></br>
                                                <span class="user-address">8385 Allegiance Rd. Unit E</span></br>
                                                <span class="user-city">Columbus</span>, <span class="user-state">OH</span>, <span class="user-zip">43235</span></br>
                                                <span class="user-country">United States</span></br>
                                                <span class="user-phone">4406668214</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panelWrap">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h4 class="text-white">Order Summary</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <h3 class="col-sm-6 panel-title text-gray">Subtotal:</h3>
                                                <h3 class="col-sm-6 panel-title">$399.99</h3>
                                            </div>
                                        </div>
                                        <div class="panel-body panel-footer">
                                            <div class="row">
                                                <h4 class="col-sm-6 text-tertiary">Total:</h4>
                                                <h4 class="col-sm-6 text-tertiary">$399.99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- If User is not logged in launch login modal -->
                                <a class="btn-group pull-right" href="/client/TRS/MorimotoHID/utility/checkout.php">
                                    <div type="button" class="btn btn-primary-icon"><span class="icon icon-secure icon-withText"></span></div>
                                    <div type="button" class="btn btn-primary">Secure Checkout</div>
                                </a>
                            </div>
                        </div>
                    </div> 

                    <div class="col-xs-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panelWrap">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h5>Product Category</h5>
                                            <h3 class="text-gray">XB35 AMP Ballast</h3>
                                        </div>
                                        <div class="panel-body panel-footer">
                                            <div class="row">
                                                <p class="col-sm-3 small"><span class="lead text-uppercase">Price:</span> <span class="order-price">$399.99</span></p>
                                                <div class="col-sm-4">
                                                    <form class="form-horizontal">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <p class="col-sm-3 small"><span class="lead text-uppercase">QTY:</span></p>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="inputQTY" placeholder="1">
                                                                </div>
                                                                <p class="col-sm-3 small cartProduct-qtyCTA">
                                                                    <button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="cartQtySubmit">Update</button>
                                                                    <a href="#">Remove</a>
                                                                </p>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <h4 class="col-sm-5 text-right">Total: <span class="order-total">$399.99</span></h4>
                                            </div>
                                        </div>
                                        <div class="thumbnail-image col-sm-5 pull-right">
                                            <img src="../img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">
                                        </div>
                                        <div class="panel-body col-sm-7">
                                            <p class="small">
                                                <span class="small"><span class="lead text-uppercase">Bi-xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Ballast Igniters (Required):</span> 2 x Morimoto XB Igniter (AMP) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">H1 HID Bulbs:</span> 2 x H1: XB 4500K $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Shroud Style:</span> 2 x Mini Gatling Gun $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Wire Harness:</span> 1 x HD Relay: 9006 $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">LED Halos:</span> 2 x 70mm XSB Switchback $25.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Headlight Sealant:</span> 1 x Gray: RetroRubber $12.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xs-12">
                                <div class="panelWrap">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h5>Product Category</h5>
                                            <h3 class="text-gray">XB35 AMP Ballast</h3>
                                        </div>
                                        <div class="panel-body panel-footer">
                                            <div class="row">
                                                <p class="col-sm-3 small"><span class="lead text-uppercase">Price:</span> <span class="order-price">$399.99</span></p>
                                                <div class="col-sm-4">
                                                    <form class="form-horizontal">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <p class="col-sm-3 small"><span class="lead text-uppercase">QTY:</span></p>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" id="inputQTY" placeholder="1">
                                                                </div>
                                                                <p class="col-sm-3 small cartProduct-qtyCTA">
                                                                    <button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="cartQtySubmit">Update</button>
                                                                    <a href="#">Remove</a>
                                                                </p>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <h4 class="col-sm-5 text-right">Total: <span class="order-total">$399.99</span></h4>
                                            </div>
                                        </div>
                                        <div class="thumbnail-image col-sm-5 pull-right">
                                            <img src="../img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">
                                        </div>
                                        <div class="panel-body col-sm-7">
                                            <p class="small">
                                                <span class="small"><span class="lead text-uppercase">Bi-xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Ballast Igniters (Required):</span> 2 x Morimoto XB Igniter (AMP) $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">H1 HID Bulbs:</span> 2 x H1: XB 4500K $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Shroud Style:</span> 2 x Mini Gatling Gun $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Wire Harness:</span> 1 x HD Relay: 9006 $0.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">LED Halos:</span> 2 x 70mm XSB Switchback $25.00 </br></span>
                                                <span class="small"><span class="lead text-uppercase">Headlight Sealant:</span> 1 x Gray: RetroRubber $12.00</span>
                                            </p>
                                        </div>
                                    </div>
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

    

    <!-- Google Analytics-->
    

    <!-- End Document
    ================================================== -->

</body>
</html>