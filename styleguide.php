<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<title>Styleguide • Morimoto</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="SHIMITS Design/Development">

	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
    ================================================== -->
    <link href="css/bootstrap-theme-full.css" rel="stylesheet">
    <!-- <link href="../mag_trs_design/skin/frontend/morimoto/default/css/morimoto-theme.css" rel="stylesheet"> -->
    <link href="css/morimoto-theme.css" rel="stylesheet">

	<!-- Javascript [primary]
    ================================================== -->
  	<script src="js/modernizr.custom.63321.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
    <link rel="icon" sizes="32x32" href="img/favicon-32.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon-152.png">

</head>

<body class="styleguide utility">



	<!-- Header
	================================================== -->

	<?php require('shared/header.html');?>

	
	<!-- Primary Page Layout
	==================================================
	==================================================
	================================================== -->

	<a name="carousel"></a> 
	<div class="container-fluid">	
		<div class="row" style="margin-bottom: 20px;">
	       
                <div class="carousel slide article-slide" id="morimotoCarousel">
					<!-- Carousel Slides -->
                    <div class="carousel-inner cont-slider">
                        <div class="item active">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 1.jpg" class="img-responsive" alt="" border="none">
                        </div>
                        <div class="item">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 2.jpg" class="img-responsive" alt="" border="none">
                        </div>
                        <div class="item">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">
                        </div> 
                        <div class="item">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 4.jpg" class="img-responsive" alt="" border="none">
                        </div> 
                        <div class="item">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 5.jpg" class="img-responsive" alt="" border="none">
                        </div>
                        <div class="item">
                          	<img src="img/temp--Morimoto XB35 AMP Ballast 6.jpg" class="img-responsive" alt="" border="none">
                        </div> 
                    </div>
                    <!-- Carousel Nav Controls --> 
	      			<a class="left carousel-control" href="#morimotoCarousel" role="button" data-slide="prev"><span class=" btn btn-lg btn-empty icon icon-arrowL939598 icon-prev"></span></a>
	      			<a class="right carousel-control" href="#morimotoCarousel" role="button" data-slide="next"><span class="btn btn-lg btn-empty icon icon-arrowR939598 icon-next"></span></a> 
	      			
                    <!-- Indicators -->
                    <div class="container">
		                    <ol class="carousel-indicators col-md-12 visible-lg visible-md">
		                        <li class="col-md-1 active" data-slide-to="0" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 1.jpg" class="img-responsive" alt="" border="none">
		                        </li>
		                        <li class="col-md-1" data-slide-to="1" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 2.jpg" class="img-responsive" alt="" border="none">
		                        </li>
		                        <li class="col-md-1" data-slide-to="2" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">
		                        </li>  
		                        <li class="col-md-1" data-slide-to="3" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 4.jpg" class="img-responsive" alt="" border="none">
		                        </li>  
		                        <li class="col-md-1" data-slide-to="4" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 5.jpg" class="img-responsive" alt="" border="none">
		                        </li>
		                        <li class="col-md-1" data-slide-to="5" data-target="#morimotoCarousel">
		                          	<img src="img/temp--Morimoto XB35 AMP Ballast 6.jpg" class="img-responsive" alt="" border="none">
		                        </li>    
		                    </ol> 
		            </div>                        
                </div>

        </div>
    </div>    

	<div class="container">

		<!-- Colors
		================================================== -->
		
		<a name="colors"></a>   	
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="colors">Colors</h2>
					</div>

					<h4 class="text-primary">Primary: Gold <span class="text-lowercase">#e2c675 <span class="text-gold hover small">(Hover #c6a571)</span></span></h4>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-primary" style="width: 100%;"></div>
				  		</div>
					</div>
					<h4 class="text-secondary">Secondary: Dark Gold <span class="text-lowercase">#c6a571 <span class="text-golddark hover small">(#e2c675)</span></span></h4>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-secondary" style="width: 66%;"></div>
				  		</div>
					</div>
					<h4 class="text-tertiary">Tertiary: Copper <span class="text-lowercase">#ff6d00 <span class="text-copper hover small">(#905444)</span></span></h4>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-tertiary" style="width: 33%;"></div>
				  		</div>
					</div>
					<h4 class="text-gray">Structural: Gray <span class="text-lowercase">#423f3f <span class="text-gray hover small">(#363232)</span> // <span class="text-graylight">GrayLight #939598</span> // <span class="text-graydark">GrayDark #363232</span></span></h4>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-gray" style="width: 34%"></div>
							<div class="progress-bar bg-graylight" style="width: 33%"></div>
							<div class="progress-bar bg-graydark" style="width: 33%"></div>
				  		</div>
					</div>

			  	</div>
			</div>
		</div>


		<!-- Typography
		================================================== -->
		
		<a name="typography"></a>  
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="type">Typography</h2>
					</div>
			  	</div>
			</div>

			<!-- Headings -->
			<div class="row">
			  	<div class="col-lg-5">
					<div class="bs-component">
				  		<h1 style="margin-bottom: 10px;">H1 - Page</h1>
				  		<h2 style="margin-bottom: 10px;">H2 - Section</h2>
				  		<h3 style="margin-bottom: 10px;">H3 - Products/News</h3>
				  		<h4 style="margin-bottom: 10px;">H4 - Home Sub/Panels/Cat$</h4>
				  		<h5 style="margin-bottom: 10px;">H5 - Sub Titles</h5>
				  		<h6>H6 - Sub Foots</h6>
					</div>
			  	</div>
			  	<div class="col-lg-4">
					<div class="bs-component">
				  		<h4>Example body text</h4>
				  		<p><span class="lead">Paragraph Lead</span> Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
				  		<p><small>This line of text is meant to be treated as fine print.</small></p>
				  		<p>The following snippet of text is <strong>bold</strong>.</p>
				  		<p>The following snippet of text is <em>italicized</em>.</p>
				  		<p>The following snippet of text is <span class="text-strikethrough">strikethrough</span>.</p>
					</div>
			  	</div>
			  	<div class="col-lg-3">
					<div class="bs-component">
				  		<h4>Emphasis classes</h4>
				  		<p class="text-muted">Muted: Fusce dapibus, tellus ac cursus commodo.</p>
				  		<p class="text-danger text-warning">Warning/Danger: Donec ullamcorper nulla non metus.</p>
				  		<p class="text-success">Success: Duis mollis, est non commodo luctus.</p>
				  		<!-- <p class="text-info">Info: Maecenas sed diam eget risus varius blandit.</p> -->
					</div>
			  	</div>
			</div>

		</div>


		<!-- Buttons
		================================================== -->
		
		<a name="buttons"></a> 
		<div class="bs-docs-section">
			<div class="page-header">
			  	<div class="row">
					<div class="col-lg-12">
				 		<h2 id="buttons">Buttons</h2>
					</div>
			  	</div>
			</div>

			<div class="row">
			  	<div class="col-lg-12">
					<!-- <h4>Sizes</h4>
					<div class="bs-component" style="margin-bottom: 10px;">  
					  	<a href="#"><div type="button" class="btn btn-large btn-lg">Large button</div></a>
					  	<a href="#"><div type="button" class="btn btn-primary">Primary button</div></a>
					 	<a href="#"><div type="button" class="btn btn-large btn-sm">Small button</div></a>
					</div> -->
					<!-- <div class="bs-component" style="margin-bottom: 10px;">
				  		<a href="#"><div type="button" class="btn btn-large btn-lg btn-block">Block level button</div></a>
					</div> -->
					<h4>Types</h4>
					<div class="bs-component" style="margin-bottom: 10px;">
						<div class="col-lg-4">
							<a type="button" class="btn btn-primary" href="#" style="margin-bottom: 10px;">Primary button</a>
						  	<a class="btn-group" href="#">
						  		<div type="button" class="btn btn-primary-icon"><span class="icon icon-download icon-withText"></span></div>
						  		<div type="button" class="btn btn-primary">Primary with Icon</div>
						  	</a>
						  	<a type="button" class="btn btn-primary btn-sm" href="#" style="margin-top: 20px;">Primary Small button</a>
						</div>	

						<div class="col-lg-4">
						  	
						  	<a type="button" class="btn btn-large" href="#" style="margin-bottom: 10px;">Large button</a>
						
							<div class="input-group spinner">
							    <input type="text" class="form-control input-lg" value="1">
							    <div class="input-group-btn-vertical">
							      	<div class="btn btn-large" type="button">+</div>
							      	<div class="btn btn-large" type="button">–</div>
							    </div>
							    <div class="input-group-btn">
							    	<a type="button" class="btn btn-large" href="#">Add <span class="hidden-xs">to Cart</span></a>
							  	</div>
							</div>
						</div>

						<div class="col-lg-2 col-lg-offset-1"> 	
					  		<a type="button" class="btn btn-empty icon icon-arrowR939598" href="#" style="margin-right: 10px;"></a>
					  		<a type="button" class="btn btn-lg btn-empty icon icon-arrowR939598" href="#"></a>
					  	</div>	
					  	<div class="col-lg-1"> 	
					  		<a type="button" class="btn btn-lg btn-empty-outline" href="#"><span class="icon icon-arrowR939598"></span></a>
					  	</div>	
					</div> 
				</div>	
				<!-- <div class="col-lg-6">	
					<h4>Styles</h4>
					<div class="bs-component" style="margin-bottom: 5px;">
					  	<a href="#"><div type="button" class="btn bg-blue btn-lg"><span class="icon icon-cart icon-withText"></span>Add to Cart</div></a>
					  	<a href="#"><div type="button" class="btn bg-orange">Shop Now</div></a>
					  	<a href="#"><div type="button" class="btn bg-green">Live Chat</div></a>
					  	<a href="#"><div type="button" class="btn btn-outline btn-outline-orange btn-lg icon icon-arrow-drop"></div></a>
					  	<a href="#"><div type="button" class="btn btn-empty btn-lg"><span class="icon icon-message"></span><span class="badge">3</span></div></a>
					</div> 
					<div class="bs-component" style="margin-bottom: 10px;">
					  	<a href="#"><div type="button" class="btn bg-blue btn-lg disabled"><span class="icon icon-cart icon-withText"></span>Disabled</div></a>
					</div> 
			  	</div> -->
			  	
			</div>
		</div>


		<!-- Navs
		================================================== -->
		
		<!-- <a name="navs"></a>   
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="nav">Navs</h2>
					</div>
			  	</div>
			</div>

			<div class="row"> -->
			  	<!-- <div class="col-lg-4">
					<a name="tabs"></a> 
					<h2 id="nav-tabs">Tabs</h2>
					<div class="bs-component">
				  		<ul class="nav nav-tabs" style="margin-bottom: 15px;">
							<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
							<li><a href="#profile" data-toggle="tab">Profile</a></li>
							<li class="disabled"><a>Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#dropdown1" data-toggle="tab">Action</a></li>
									<li class="divider"></li>
									<li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
					  			</ul>
							</li>
				  		</ul>
				  		<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="home">
					  			<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="profile">
						  		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
							</div>
							<div class="tab-pane fade" id="dropdown1">
						  		<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
							</div>
							<div class="tab-pane fade" id="dropdown2">
						  		<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
							</div>
				  		</div>
					</div>
			  	</div> -->
			  	<!-- <div class="col-lg-4">
					<a name="pills"></a> 
					<h2 id="nav-pills">Pills</h2>
					<div class="bs-component">
				  		<ul class="nav nav-pills">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li class="disabled"><a href="#">Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</li>
				  		</ul>
					</div>
					<br>
					<div class="bs-component">
				  		<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li class="disabled"><a href="#">Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</li>
				  		</ul>
					</div>
			  	</div> -->
			  	<!-- <div class="col-lg-4">
					<a name="breadcrumbs"></a> 
					<h2 id="nav-breadcrumbs">Breadcrumbs</h2>
					<div class="bs-component">
				  		<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active">Wake</li>
				  		</ul>
				  		<ul class="breadcrumb" style="margin-bottom: 5px;">
							<li><a href="#">Home</a></li>
							<li><a href="#">Wake</a></li>
							<li class="active">Liquid Force Trip Wakeboard</li>
				  		</ul>
					</div>
			  	</div> -->
			
			  	<!-- <div class="col-lg-4">
					<a name="pagination"></a> 
					<h2 id="pagination">Pagination</h2>
					<div class="bs-component">
				  		<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul>
				  		<ul class="pagination pagination-lg">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul>
				  		<ul class="pagination pagination-sm">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul>
					</div>
			  	</div> -->
			  	<!-- <div class="col-lg-4">
					<a name="pager"></a> 
					<h2 id="pager">Pager</h2>
					<div class="bs-component">
				  		<ul class="pager">
				  			<li class="previous disabled"><a href="#"><div type="button" class="btn btn-large btn-lg icon icon-chevron-left"></div></a></li>
							<li><a href="#"><div type="button" class="btn btn-large btn-lg icon icon-chevron-left"></div></a></li>
							<li><a href="#"><div type="button" class="btn btn-large btn-lg icon icon-chevron-right"></div></a></li>
							<li class="next active"><a href="#"><div type="button" class="btn btn-large btn-lg icon icon-chevron-right"></div></a></li>
				  		</ul>
					</div>
			  	</div>
			</div>
		</div> -->


		<!-- Containers
		================================================== -->
	
		<a name="containers"></a> 
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="container">Containers</h2>
					</div>
				</div>
			</div>
		</div>
	</div>		
	
	<div class="container-fluid">
		<div class="row">			
			<div class="jumbotron">
				<img src="img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">		
		 	</div>
	 	</div>
	</div>

	<div class="container">

			<!-- <div class="row">
			  	<div class="col-lg-12">
					<a name="listgroups"></a> 
					<h2>List groups</h2>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-4">
					<div class="bs-component">
					  	<ul class="list-group">
							<li class="list-group-item">
						  		<span class="badge">14</span>
						  		Cras justo odio
							</li>
							<li class="list-group-item">
						  		<span class="badge">2</span>
						  		Dapibus ac facilisis in
							</li>
							<li class="list-group-item">
						  		<span class="badge">1</span>
						  		Morbi leo risus
							</li>
					  	</ul>
					</div>
			  	</div>
			  	<div class="col-lg-4">
					<div class="bs-component">
					  	<div class="list-group">
							<a href="#" class="list-group-item active">Cras justo odio</a>
							<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
							<a href="#" class="list-group-item">Morbi leo risus</a>
					  	</div>
					</div>
			  	</div>
			  	<div class="col-lg-4">
					<div class="bs-component">
				  		<div class="list-group">
							<a href="#" class="list-group-item">
					  			<h4 class="list-group-item-heading">List group item heading</h4>
					  			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							</a>
							<a href="#" class="list-group-item">
					  			<h4 class="list-group-item-heading">List group item heading</h4>
					  			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							</a>
				  		</div>
					</div>
			  	</div>
			</div> -->
			
			<div class="row">
			  	<div class="col-lg-12">
					<a name="panels"></a> 
					<h4>Panels</h4>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-12">
			  		<div class="row">
					  	<!-- <div class="panelWrap">
						  	<div class="panel panel-blank">
								<div class="panel-body">Panel (blank)</div>
					  		</div>
					  	</div> -->	

				  		<div class="col-md-6">
					  		<div class="panelWrap">
						  		<div class="panel panel-default">
									<div class="panel-heading"><h4>Panel Details</h4></div>
									<div class="panel-body">
										<p class="lead">Description</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
									</div>
						  		</div>
						  	</div>	
						</div>
						<div class="col-md-6">  	
						  	<div class="panelWrap panel-product">
						  		<div class="panel panel-default">
									<div class="panel-heading">
										<h5>Product Category</h5>
										<h3>MOPAR SPEC: 13-14 DODGE RAM LOW BEAM HARNESS</h3>
									</div>
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
									</div>
						  		</div>
						  	</div>
						</div>  	
					</div>
			  	</div>
			  	<div class="col-lg-12">
					<div class="row">

						<div class="col-md-2">
							<div class="panelWrap">
							  	<div class="panel">
									<div class="panel-body">Basic panel</div>
						  		</div>
						  	</div>	
						</div>  	

						<div class="col-md-4">
					  		<div class="panelWrap">
						  		<div class="panel panel-default list-group">
									<div class="panel-heading"><h4>Panel Highlights</h4></div>
									<div class="panel-body">
										<div class="row">
											<p class="col-sm-6 small lead text-uppercase">Ballasts:</p>
											<p class="col-sm-6 small">35W, 50W</p>
										</div>
									</div>
									<div class="panel-body panel-footer">
										<div class="row">
											<p class="col-sm-6 small lead text-uppercase">Stock Bulb Size:</p>
											<p class="col-sm-6 small">9006, HB4</p>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
											<p class="col-sm-6 small lead text-uppercase">HID Systems:</p>
											<p class="col-sm-6 small">Low or High Beams and Fog Lights</p>
										</div>	
									</div>
									<div class="panel-body panel-footer">
										<div class="row">
											<p class="col-sm-6 small lead text-uppercase">Bi-xenon Capable:</p>
											<p class="col-sm-6 small">With <a href="#">High Beam Splitters</a></p>
										</div>	
									</div>
						  		</div>
						  	</div>	
						</div>  	

				  		<!-- <div class="panel panel-primary">
							<div class="panel-heading">
					  			<h3 class="panel-title">Panel primary</h3>
							</div>
							<div class="panel-body">Panel content</div>
				  		</div> -->
				  		<div class="col-md-3">
					  		<div class="panelWrap">
						  		<div class="panel panel-success">
									<div class="panel-heading">
							  			<h3 class="panel-title">Panel success</h3>
									</div>
									<div class="panel-body">Panel content</div>
						  		</div>
						  	</div>	
						</div>
						  	
					  	<div class="col-md-3">
					  		<div class="panelWrap">
						  		<div class="panel panel-warning panel-danger">
									<div class="panel-heading">
							  			<h3 class="panel-title">Panel warning/danger</h3>
									</div>
									<div class="panel-body">Panel content</div>
						  		</div>
						  	</div>	
						</div>  	

				  		<!-- <div class="panel panel-danger">
							<div class="panel-heading">
					  			<h3 class="panel-title">Panel danger</h3>
							</div>
							<div class="panel-body">Panel content</div>
				  		</div>

				  		<div class="panel panel-info">
							<div class="panel-heading">
					  			<h3 class="panel-title">Panel info</h3>
							</div>
							<div class="panel-body">Panel content</div>
				  		</div> -->
					</div>
			  	</div>
			</div>

			<!-- <div class="row">
			  	<div class="col-lg-12">
					<a name="wells"></a> 
					<h4>Wells</h4>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-4">
					<div class="bs-component">
				  		<div class="well">Look, I'm in a well!</div>
					</div>
			  	</div>
				<div class="col-lg-4">
					<div class="bs-component">
				  		<div class="well well-sm">Look, I'm in a small well!</div>
					</div>
			  	</div>
			  	<div class="col-lg-4">
					<div class="bs-component">
				  		<div class="well well-lg">Look, I'm in a large well!</div>
					</div>
			  	</div>
			</div> -->

			<!-- <div class="row">
			  	<div class="col-lg-12">
					<a name="mediaobjects"></a> 
					<h4>Media Objects</h4>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-8">
			  		<div class="row">
					  	<div class="col-lg-11 pull-right">
							<div class="bs-component">
								<div class="panel panel-default">
									<span class="label"><span class="btn btn-outline btn-outline-gray btn-lg icon-review icon-review-text"></span></span>
									<div class="panel-body">
									  	<div class="media">
									  	    <div class="media-body">
												<div class="bs-component">
													<div class="btn-group">  	
														<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													</div>
													<h5><span class="text-gray">6/23/2014</span></h5>
												</div>
									  	        <h3 class="media-heading">Can't get enough of this board!</h3>
									  	        <h5><span class="text-gray text-lowercase">Jonathan Moore</span></h5>
									  	        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
									  	    </div>
									  	</div>
									</div>
								</div>	
							</div>	
							<div class="bs-component">
								<div class="panel panel-default">
									<span class="label"><span class="btn btn-outline btn-outline-gray btn-lg icon-review icon-review-pic"></span></span>
									<div class="panel-body">
									  	<div class="media">
									  	    <div class="media-body">
												<div class="bs-component">
													<div class="btn-group">  	
														<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating active"><span class="icon icon-star"></span></div>
													  	<div type="button" class="btn bg-gray btn-xs btn-rating"><span class="icon icon-star"></span></div>
													</div>
													<h5><span class="text-gray">6/23/2014</span></h5>
												</div>
									  	        <h3 class="media-heading">Awesome board!</h3>
									  	        <h5><span class="text-gray text-lowercase">Jonathan Moore</span></h5>
									  	        <img class="img-responsive" src="img/placeholderImage-lifestyle.png" alt="Generic placeholder image" border="0">
									  	        
									  	        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
									  	    </div>
									  	</div>
									</div>
								</div>	
							</div>
					 	</div>
					 	
					</div>
				</div>
			</div> -->
				
			
      		<div class="row">
			  	<div class="col-lg-12">
					<a name="thumbnails"></a> 
					<h4>Thumbnails</h4>
			  	</div>
			</div>
			<div class="row">	    
		        <div class="col-md-12">
		        	<div class="row">
			        	<div class="col-sm-12">
						<a class="thumbnailWrap">
							<div class="thumbnail special">
								<div class="thumbnail-image col-sm-6 pull-right">
		                			<img src="img/temp--Morimoto XB35 AMP Ballast 3.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-sm-6">
						            <h5>Apr 24, 2015</h5>
						            <h2>XB35 AMP Ballast</h2>
						            <p class="small">On the success of other automotive lighting products from Morimoto: we're proud to finally introduce the line of XB LED Marker and Signal Bulbs. Despite the rapid pace of changing trends and the fact that they took two years to develop, these bulbs are still as modern as it gets.</br></br>
									Beautiful, bright light. Nearly infinite life span. Great for signal, marker, brake, and tail lights. The XB LED bulbs are an instant upgrade in the looks and performance for the lighting on your car from bumper to bumper.</p>
						            <div type="button" class="btn btn-primary" href="#">Learn More</div>
						        </div>
						    </div>    
	                	</a>
	                	</div>
			        	<div class="col-sm-6">
						<a class="thumbnailWrap">
							<div class="thumbnail">
								<div class="thumbnail-image">
		                			<img src="img/news/temp--news--rByQnAGh.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-xs-12">
						            <h5>Apr 24, 2015</h5>
						            <h3>Morimoto XB HID Ballasts, an aftermarket best</h3>
						            <p class="small">TRS stocks the largest supply of the unique and incredibly-reliable Morimoto XB35 and XB55 ballasts</p>
						            <hr>
						            <h6 class="text-right text-primary text-weight900pluto">More Info ></h6>
						        </div>
						    </div>    
	                	</a>
	                	</div>
	                	<div class="col-sm-6">
						<a class="thumbnailWrap">
							<div class="thumbnail">
								<div class="thumbnail-image">
		                			<img src="img/news/temp--news--10633805_635806703199248_4357793130007574471_o.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-xs-12">
						            <h5>Apr 24, 2015</h5>
						            <h3>You're invited to our 10th Anniversary Party!</h3>
						            <p class="small">Join us June 27th, 2015 from 4-9pm for free food and drinks, live music, door prizes, games, car show, and an all-around rockin' good time. Fuller Hot Rods and JPM Coachworks will... be joining us!</p>
						            <hr>
						            <h6 class="text-right text-primary text-weight900pluto">More Info ></h6>
						        </div>
						    </div>    
	                	</a>
	                	</div>	
	                	<div class="col-sm-6">
						<a class="thumbnailWrap">
							<div class="thumbnail">
								<div class="thumbnail-image">
		                			<img src="img/temp--Morimoto XB35 AMP Ballast 1.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-xs-12">
						            <h5>Ballasts</h5>
						            <h3>MOPAR SPEC: 13-14 DODGE RAM LOW BEAM HARNESS</h3>
						            <hr>
						            <h4 class="text-right"><span class="text-goldlight">$439.99</span> <span class="h5">MSRP</span></h4>
						        </div>
						    </div>    
	                	</a>
	                	</div>
	                	<div class="col-sm-6">
						<a class="thumbnailWrap">
							<div class="thumbnail">
								<div class="thumbnail-image">
		                			<img src="img/temp--Morimoto XB35 AMP Ballast 5.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-xs-12">
						            <h5>Ballasts</h5>
						            <h3>AMP: XB35</h3>
						            <hr>
						            <h4 class="text-right"><span class="text-goldlight">$110.00</span> <span class="h5">MSRP</span></h4>
						        </div>
						    </div>    
	                	</a>
	                	</div>	
					</div>
		        </div>
		    </div>    
			
		</div>


		<!-- Tables
		================================================== -->
		  
		<!-- <a name="tables"></a>   
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="tables">Tables</h2>
					</div>

					<div class="bs-component">
				  		<table class="table table-striped table-hover ">
							<thead>
							  	<tr>
									<th>#</th>
									<th>Column heading</th>
									<th>Column heading</th>
									<th>Column heading</th>
							  	</tr>
							</thead>
							<tbody>
							  	<tr>
									<td>1</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr>
									<td>2</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="info">
									<td>3</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="success">
									<td>4</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="danger">
									<td>5</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="warning">
									<td>6</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="active">
									<td>7</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							</tbody>
						</table> 
					</div>
			  	</div>
			</div>
		</div> -->


		<!-- Forms
		================================================== -->
		
		<a name="forms"></a> 
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="forms">Forms</h2>
					</div>
			  	</div>
			</div>

			<div class="row">
			  	<div class="col-lg-8">
					<div class="panelWrap">
					  	<div class="panel panel-default">
					  		<div class="panel-heading"><h4>Legend</h4></div>
							<div class="panel-body">
								<form class="form-horizontal">
									<fieldset>
									  	<div class="form-group">
											<label for="inputEmail" class="col-lg-2 control-label h5">Email</label>
											<div class="col-lg-10">
										  		<input type="text" class="form-control" id="inputEmail" placeholder="Email">
											</div>
									  	</div>
									  	<div class="form-group">
											<label for="inputPassword" class="col-lg-2 control-label h5">Password</label>
											<div class="col-lg-10">
										  		<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										  		<div class="checkbox">
													<label>
											  			<input type="checkbox"> Checkbox
													</label>
										  		</div>
											</div>
									  	</div>
									  	<div class="form-group">
											<label for="textArea" class="col-lg-2 control-label h5">Textarea</label>
											<div class="col-lg-10">
										  		<textarea class="form-control" rows="3" id="textArea"></textarea>
										  		<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
											</div>
									  	</div>
									  	<div class="form-group">
											<label class="col-lg-2 control-label h5">Radios</label>
											<div class="col-lg-10">
										  		<div class="radio">
													<label>
											  			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Option one is this
													</label>
										  		</div>
										  		<div class="radio">
													<label>
											  			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Option two can be something else
													</label>
										  		</div>
											</div>
									  	</div>
									  	<div class="form-group">
											<label for="select" class="col-lg-2 control-label h5">Selects</label>
											<div class="col-lg-10">
											  	<select class="form-control drop" id="select">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
											  	</select>
											</div>
									  	</div>
									  	<div class="form-group">
											<div class="col-lg-10 col-lg-offset-2">
										  		<div class="btn btn-primary btn-sm">Cancel</div>
										  		<div type="submit" class="btn btn-primary">Submit</div>
											</div>
									  	</div>
									</fieldset>
								</form>
							</div>
				  		</div>
					</div>
			  	</div>
			  	<div class="col-lg-4">
					<div class="panelWrap">
				  		<div class="panel panel-default">
							<div class="panel-heading"><h4>Input Types</h4></div>
							<div class="panel-body">
								<form class="bs-component">
									<div class="form-group">
									  	<label class="control-label h5" for="inputDefault">Default input</label>
									  	<input type="text" class="form-control" id="inputDefault">
									</div>
									<div class="form-group">
									  	<label class="control-label h5" for="focusedInput">Focused input</label>
									  	<input class="form-control" id="focusedInput" type="text" value="This is focused...">
									</div>
									<div class="form-group">
									  	<label class="control-label h5" for="disabledInput">Disabled input</label>
									  	<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
									</div>
									<!-- <div class="form-group has-warning">
									  	<label class="control-label h5" for="inputWarning">Input warning</label>
									  	<input type="text" class="form-control" id="inputWarning">
									</div> -->
									<div class="form-group has-error">
									  	<label class="control-label h5" for="inputError">Input error</label>
									  	<input type="text" class="form-control" id="inputError">
									</div>
									<!-- <div class="form-group has-success">
									  	<label class="control-label h5" for="inputSuccess">Input success</label>
									  	<input type="text" class="form-control" id="inputSuccess">
									</div> -->
									<div class="form-group">
									  	<label class="control-label h5" for="inputLarge">Large input</label>
									  	<input class="form-control input-lg" type="text" id="inputLarge">
									</div>
									<!-- <div class="form-group">
									  	<label class="control-label h5" for="inputSmall">Small input</label>
									  	<input class="form-control input-sm" type="text" id="inputSmall">
									</div> -->
									<!-- <div class="form-group">
									  	<label class="control-label h5">Input addons</label>
									  	<div class="input-group">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control">
											<span class="input-group-btn">
										  		<div class="btn btn-large" type="button">Button</div>
											</span>
									  	</div>
									</div> -->
							  	</form>
							</div>

				  		</div>
					</div>
			  	</div>
			</div>  	
		</div>

		  

		<!-- Indicators
		================================================== -->
		
		<a name="indicators"></a>   
		<div class="bs-docs-section">

			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="indicators">Indicators</h2>
					</div>
			  	</div>
			</div>

			<div class="row">
			  	<div class="col-lg-12" style="margin-bottom: 10px;">
			  		<div class="alert alert-danger">
						<p class="small"><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.</h5>
			  		</div>
			  	</div>
			  	<div class="col-lg-12" style="margin-bottom: 10px;">
			  		<div class="alert alert-dismissable alert-success">
						<div type="button" class="close" data-dismiss="alert">&times;</div>
						<p class="small"><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.</h5>
			  		</div>
			  	</div>
			  	<div class="col-lg-12" style="margin-bottom: 10px;">
			  		<div class="alert alert-dismissable alert-info">
						<div type="button" class="close" data-dismiss="alert">&times;</div>
						<p class="small"><strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.</h5>
			  		</div>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-6">
					<a name="labels"></a> 
					<h4>Labels</h4>
					<div class="col-sm-12">
						<a class="thumbnailWrap">
							<div class="thumbnail">
								<div class="thumbnail-image">
		                			<img src="img/temp--Morimoto XB35 AMP Ballast 1.jpg" class="img-responsive" alt="" border="none">
						        </div>
						        <div class="caption col-xs-12">
						            <h5>Ballasts</h5>
						            <h3>MOPAR SPEC: 13-14 DODGE RAM LOW BEAM HARNESS</h3>
						            <hr>
						            <h4 class="text-right"><span class="text-goldlight">$439.99</span> <span class="h5">MSRP</span></h4>
						        </div>
						        <span class="label label-default"><img class="img-responsive" src="img/label-new.svg" alt="" border="0"/></span>
						    </div>    
	                	</a>
	                </div>
			  	</div>
			  	
			  	<div class="col-lg-6">
					<a name="badges"></a> 
					<h4>Badges</h4>
			  		<ul class="nav nav-pills">
						<li class="active"><a href="#">Home <span class="badge">42</span></a></li>
						<li><a href="#">Profile <span class="badge">2</span></a></li>
			  		</ul>
			  	</div>
			</div>
		</div>



		<!-- Progress bars
		================================================== -->
		
		<!-- <a name="progressbars"></a>   	
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="progress">Progress bars</h2>
					</div>

					<h3 id="progress-basic">Basic</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar" style="width: 60%;"></div>
				  		</div>
					</div>

					<h3 id="progress-alternatives">Alternatives</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar progress-bar-info" style="width: 20%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-info" style="width: 20%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 40%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-success" style="width: 40%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
				  		</div>
					</div>

					<h3 id="progress-animated">Animated</h3>
					<div class="bs-component">
				  		<div class="progress progress-striped active">
							<div class="progress-bar" style="width: 45%"></div>
				  		</div>
					</div>

					<h3 id="progress-stacked">Stacked</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"></div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"></div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"></div>
				  		</div>
					</div>
			  	</div>
			</div>
		</div> -->

		  

		<!-- Dialogs
		================================================== -->
		
		<a name="dialogs"></a> 
		<div class="bs-docs-section">
			<div class="row">
			  	<div class="col-lg-12">
					<div class="page-header">
				  		<h2 id="dialogs">Dialogs</h2>
					</div>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-lg-6">
					<a name="modals"></a> 
					<h4>Modals</h4>
					<div class="bs-component">
						<div class="bs-example" style="padding-bottom: 24px;">
						    <div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</div>
						</div>

						<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<div type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</div>
						          		<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
						        	</div>
						        	<div class="modal-body">
						          		<h4>Text in a modal</h4>
						          		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
						          		<h4>Popover in a modal</h4>
						          		<p>This <a href="#" role="button" class="btn btn-large popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>
						          		<h4>Tooltips in a modal</h4>
						          		<p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

						          		<hr>

						          		<h4>Overflowing text to show scroll behavior</h4>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						        	</div>
						        	<div class="modal-footer">
						          		<div type="button" class="btn btn-large" data-dismiss="modal">Close</div>
						          		<div type="button" class="btn btn-primary">Save changes</div>
						        	</div>
						      	</div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						
					</div>	
			  	</div>

			  	<div class="col-lg-6">
					<a name="popovers"></a> 
					<h4>Popovers</h4>
					<div class="bs-component">
					  	<div type="button" class="btn btn-lg btn-empty-outline" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="icon icon-arrowR939598"></span></div>
					  	<div type="button" class="btn btn-lg btn-empty-outline" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="icon icon-arrowR939598"></span></div>
					  	<div type="button" class="btn btn-lg btn-empty-outline" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="icon icon-arrowR939598"></span></div>
					  	<div type="button" class="btn btn-lg btn-empty-outline" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="icon icon-arrowL939598"></span></div>
					</div>
					<!-- <a name="tooltips"></a> 
					<h4>Tooltips</h4>
					<div class="bs-component">
				  		<div type="button" class="btn btn-large" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</div>
				  		<div type="button" class="btn btn-large" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</div>
				  		<div type="button" class="btn btn-large" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</div>
				  		<div type="button" class="btn btn-large" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</div>
					</div> -->
			  	</div>
			</div>
		</div>

	</div> 
	<!-- /container -->

	<!-- End Primary Page Layout
	==================================================
	==================================================
	================================================== -->


	<?php require('shared/footer.html');?>
	

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

    <!-- PRODUCT PAGES: For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning you must initialize them yourself. -->
	<script type="text/javascript">
		$('.btn').popover('hide');
		$('.btn').tooltip('hide');
	</script>	
	
	<!-- PRODUCT PAGES: Carousel -->
	<script>
  		$('#morimotoCarousel').carousel({
  		    interval: 10000
  		});
	</script>

	<!-- PRODUCT PAGES: Added to style the Spinner for Numeric Inputs -->
	<script type="text/javascript">
		(function ($) {
		  $('.spinner .btn:first-of-type').on('click', function() {
		    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
		  });
		  $('.spinner .btn:last-of-type').on('click', function() {
		    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
		  });
		})(jQuery);
	</script>



  
<!-- End Document
================================================== -->
</body>

</html>