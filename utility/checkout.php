<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<title>Checkout • MORIMOTO • High Quality HID Projectors, Ballasts, and Bulbs</title>
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

<body class="utility checkout">

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
                        <h2>Checkout</h2>
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
                    </div>


                    <div class="col-xs-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="panelWrap">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Billing Address</h4></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option1" checked=""><span class="small lead text-uppercase">Select an entry from your Address Book</span>
                                                                    <div class="reveal-if-active">
                                                                        <div class="form-group">
                                                                            <div class="col-xs-12">
                                                                                <select class="form-control drop" id="select">
                                                                                    <option value="">DEFAULT BILLING ADDRESS: Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                                    <option value="#">Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option2"><span class="small lead text-uppercase">Bill to a different address</span>
                                                                    <div class="reveal-if-active">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Full Name">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Company Name">
                                                                            </div>
                                                                        </div>
                                                                        <hr class="aligncenter">
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
                                                                                <select class="form-control drop" id="select">
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
                                                                        <hr class="aligncenter">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Phone">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Email Address">
                                                                            </div>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox"><span class="small">Save to My Address Book</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="aligncenter">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <div type="button" class="btn btn-primary pull-right">Continue</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>            
                                        </div>
                                    </div>
                                </div>

                                <div class="panelWrap disabled">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Shipping Address</h4></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option1" checked=""><span class="small lead text-uppercase">Ship to Billing Address</span>
                                                                    <div class="reveal-if-active"><!-- Needs to be here to keep spacing consistent --></div>
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option2"><span class="small lead text-uppercase">Select an entry from your Address Book</span>
                                                                    <div class="reveal-if-active">
                                                                        <div class="form-group">
                                                                            <div class="col-xs-12">
                                                                                <select class="form-control drop" id="select">
                                                                                    <option value="">Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                                    <option value="#">Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option3"><span class="small lead text-uppercase">Ship to a different address</span>
                                                                    <div class="reveal-if-active">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Full Name">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Company Name">
                                                                            </div>
                                                                        </div>
                                                                        <hr class="aligncenter">
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
                                                                                <select class="form-control drop" id="select">
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
                                                                        <hr class="aligncenter">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Phone">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Email Address">
                                                                            </div>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox"><span class="small">Save to My Address Book</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="aligncenter">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <div type="button" class="btn btn-primary pull-right">Continue</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>            
                                        </div>
                                    </div>
                                </div>

                                <div class="panelWrap disabled">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Shipping Method</h4></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                        <span class="small lead text-uppercase">Ship to Billing Address</span>
                                                            <select class="form-control drop" id="select">
                                                                <option value="">Flat Rate ... $5.00</option>
                                                                <option value="">USPS ... First Class Mail - Package ... $24.63</option>
                                                                <option value="">USPS ... Priority Mail - Package ... $5.35</option>
                                                                <option value="">UPS ... Ground ... $6.79</option>
                                                                <option value="">UPS ... 3 Day Select ... $10.22</option>
                                                                <option value="">UPS ... Next Day Air Saver ... $40.16</option>
                                                                <option value="">UPS ... Next Day Air ... $44.02</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <span class="small lead text-uppercase">Special Order Instructions</span>
                                                            <textarea class="form-control" rows="5" id="textArea" placeholder="Message..."></textarea>
                                                        </div>
                                                    </div>
                                                        
                                                    <hr class="aligncenter">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <div type="button" class="btn btn-primary pull-right">Continue</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>            
                                        </div>
                                    </div>
                                </div>

                                <div class="panelWrap disabled">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Payment Information</h4></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option1" checked=""><span class="small lead text-uppercase">Credit Card</span>
                                                                    <div class="reveal-if-active">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Name on Card">
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <select class="form-control drop" id="select">
                                                                                    <option value="">Credit Card Type</option>
                                                                                    <option value="#">Visa</option>
                                                                                    <option value="#">Mastercard</option>
                                                                                    <option value="#">American Express</option> 
                                                                                    <option value="#">Discover</option>   
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="inputDefault" value="Credit Card Number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-6">
                                                                                <select class="form-control drop" id="select">
                                                                                    <option value="">Expiration Month</option>
                                                                                    <option value="jan">January</option>
                                                                                    <option value="feb">February</option>
                                                                                    <option value="mar">March</option> 
                                                                                    <option value="apr">April</option> 
                                                                                    <option value="may">May</option>
                                                                                    <option value="jun">June</option>
                                                                                    <option value="jul">July</option> 
                                                                                    <option value="aug">August</option> 
                                                                                    <option value="sep">September</option>
                                                                                    <option value="oct">October</option>
                                                                                    <option value="nov">November</option> 
                                                                                    <option value="dec">December</option> 
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <select class="form-control drop" id="select">    
                                                                                    <option value="">Expiration Year</option>
                                                                                    <option value="15">2015</option>
                                                                                    <option value="16">2016</option>
                                                                                    <option value="17">2017</option>
                                                                                    <option value="18">2018</option>
                                                                                    <option value="19">2019</option>
                                                                                    <option value="20">2020</option>
                                                                                    <option value="21">2021</option>
                                                                                    <option value="22">2022</option>
                                                                                    <option value="23">2023</option>
                                                                                    <option value="24">2024</option>
                                                                                    <option value="25">2025</option>
                                                                                    <option value="26">2026</option>
                                                                                    <option value="27">2027</option>
                                                                                    <option value="28">2028</option>   
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <input type="text" class="form-control" id="inputDefault" value="CVV2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="" value="option2"><span class="small lead text-uppercase">PayPal</span>
                                                                    <div class="reveal-if-active">
                                                                    <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" border="0" alt="Now accepting PayPal"></a></td></tr></table><!-- PayPal Logo -->
                                                                    </div>    
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="aligncenter">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <div type="button" class="btn btn-primary pull-right">Continue</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>            
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <hr>
                                        <h3 class="text-gray">Order Items:</h3>
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
                                                        <p class="col-sm-3 small"><span class="lead text-uppercase">Order QTY:</span> <span class="order-qty">1</span></p>
                                                        <h4 class="col-sm-6 text-right">Total: <span class="order-total">$399.99</span></h4>
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
                                                        <p class="col-sm-3 small"><span class="lead text-uppercase">Order QTY:</span> <span class="order-qty">1</span></p>
                                                        <h4 class="col-sm-6 text-right">Total: <span class="order-total">$399.99</span></h4>
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

                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <hr>
                                        <h3 class="text-gray">Order Summary:</h3>
                                    
                                        <div class="section description">
                                            <div class="col-xs-12 col-md-8 pull-right">
                                                <div class="row">
                                                    <h4 class="col-xs-8">Subtotal:</h4>
                                                    <h4 class="col-xs-4 text-right">$399.99</h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8 pull-right">
                                                <div class="row">
                                                    <h4 class="col-xs-8">Shipping &amp; Handling:</h4>
                                                    <h4 class="col-xs-4 text-right">$24.04</h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8 pull-right">
                                                <div class="row">
                                                    <h4 class="col-xs-8">Sales Tax:</h4>
                                                    <h4 class="col-xs-4 text-right">$16.38</h4>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8 pull-right">
                                                <hr>
                                                <div class="row">
                                                    <h3 class="col-xs-8 text-tertiary">Total:</h3>
                                                    <h3 class="col-xs-4 text-right text-tertiary">$840.40</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="section description">
                                            <hr>
                                            <h6 class="text-weight900pluto"><a href="/client/TRS/MorimotoHID/utility/cart.php">&lt; Forgot an Item? Edit Your Cart</a></h6>
                                            <a class="btn-group pull-right" href="#">
                                                <div type="button" class="btn btn-primary-icon"><span class="icon icon-confirm icon-withText"></span></div>
                                                <div type="button" class="btn btn-primary">Confirm Order</div>
                                            </a>
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