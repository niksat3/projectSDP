<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>The Silver Paradise</title>
<meta name="description" content="The Spice Lounge" />
<meta name="keywords" content="The Spice Lounge" />
<meta name="author" content="The Spice Lounge" />

<!-- Loading Google Web fonts-->
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link rel="icon" href="<?=base_url().$ico?>" type="image/x-icon" />
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-datetimepicker.min.css" type="text/css"/>
<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/css/animate.min.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/css/jquery-ui.css" type="text/css" />

<!--Menu-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/menu.css" type="text/css" />
<!--SlickNavigation For Mobile Device-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/slicknav.css">
<!--SlickNavigation For Mobile Device End-->
<!--Menu End-->

<!--Home Tiled Slider-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/component.css" type="text/css" />
<!--Home Tiled Slider End-->

<!-- Vegas Slider-->
<!--<link rel="stylesheet" href="assets/css/vegas_styles.css" />-->
<!-- Vegas Slider End-->

<!--Gallery-->

<!--Gallery Cycle Slider-->
<!--<link rel="stylesheet" href="assets/css/cycleslider.css">-->
<!--Gallery Cycle Slider End-->

<!--Gallery SuperSized Slider-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=base_url();?>assets/css/supersized.shutter.css" type="text/css" media="screen" />
<!--Gallery SuperSized Slider End-->

<!--Gallery Filer-->
<!--<link type="text/css" rel="stylesheet" href="assets/css/portfolio_new.css"/>
<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" />-->
<!--Gallery Filer End-->

<!--Color Change-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/colors/color1.css" id="color" type="text/css" />
<!--Color Change End-->

<style>
strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(rgba(243,242,242,0.6), rgba(143,142,142,0.9));
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #000;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #fff;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
</style>

<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-migrate-1.2.1.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/modernizr.custom.js"></script>
<script>
	$( function() {
		$(document).ready(function(){
			$('.specials-round').tooltip({
				position: {
					tooltipClass: "info-tooltip"
				}
			});
		});
	} );
</script>

</head>

<body>
<!--PRELOADER-->
	<!--section id="jSplash">
		<div id="circle"></div>
	</section-->
<div id="menutop"></div>	

<!--Wrapper 
=============================-->
<div id="wrapper">
<div id="mask">
	
	<!--Header 
=============================-->
<div id="header" class="header">
<div class="menu-inner">
<div class="container"><div class="row">
				<div class="header-table col-md-12 header-menu">
        			<!--  Logo section -->
                	<div class="brand"><a id='logo' href=""  class="nav-link">The <span> Silver </span>Paradise</a></div>
                    <!--  // Logo section -->

		<!--  Sub Page Menu section -->
	  <nav class="main-nav">
						<a href="#" class="nav-toggle"></a>
						<ul id="sub-nav" class="nav">
						<li><a id="home" href="" class="nav-link">Main</a></li>
						<li><a id="about" href="" class="nav-link">About</a></li>
						<li><a id="menu5" href="" class="nav-link"><?php echo ($this->session->userdata('user') ? 'Order' : 'Menu');?></a>
						<?php
							if($this->session->userdata('user'))
							{
						?>
							<ul>
							<li><a id="order" href="" class="nav-link selected">Order Our Menu</a>
							<li><a id="orderhistory" href="" class="nav-link">1 Week Order History</a>
							</ul>
						<?php 
							}
						?>
						</li>
						<li><a id="galleryss" href="" class="nav-link">Gallery</a></li>	
						<li><a id="event" href="" class="nav-link">Events</a></li>
						<?php 
							if($this->session->userdata('user'))
							{
						?> 
						<li><a id="reservation" href="" class="nav-link">Reservation</a>
							<ul>
							<li><a id="reserve" href="" class="nav-link">Reserve</a>
							<li><a id="reservationhistory" href="" class="nav-link">Reservation History</a>
							</ul>
						</li>
						<?php } ?>
						<li><a id="contact" href="" class="nav-link">Contact</a></li>
						<?php 
							if(!$this->session->userdata('user'))
							{
						?>
						<li><a id="login" href="" class="nav-link">Login</a></li>	
						<li><a id="register" href="" class="nav-link">Register</a></li>	
						<?php } ?>	
						<?php 
							if($this->session->userdata('user'))
							{
						?> 
						<li><a id="logout" href="" class="nav-link">Logout</a></li>
						<li><a id="cart" href="" class="nav-link"><img id='cartimg' src="<?=base_url();?>assets/img/cart.png" width='25px' /></a></li>
						<?php } ?>
				  </ul>
				  </nav>
                  <!--  // Sub Page Menu section -->
				</div>
</div></div>
</div>
</div>
<!-- // Header 
=============================-->

<!--Home Page
=============================-->
<!-- // Home Page
=============================-->



<!--Menu Toggle 
=============================--> 

<div id="menu5" class="item">
			<img src="<?=base_url()?>assets/img/2.jpg" alt="The Spice Lounge" class="fullBg">
			<div class="content">
                             
				<div class="content_overlay" style='width:100%'></div>
				<div class="content_inner">
					<div class="row contentscroll">
	<div class="container col-md-12">
                          <div class="col-md-12 content_text">
                          <h1>Order History</h1><?php if(count($htrans)!=0) { ?><p class="pad_top13">Your last order in 1 week.</p> <br /> <?php } ?>
                          <div class="clearfix">
							<div class="main">
	<?php
		if(count($htrans)!=0)
		{
	?>
	<table>
	<tbody>
	<hr>
	<?php
		
	?>
	</tbody>
	</table>
	<?php
		}
		else
		{
			echo "<H4 style=''>There're no order that you make since last week.</p>";
		}
	?>
<!-- div one created -->
<div class='clearfix'>
<div class="clearfix"></div>
</div>
</div>
</div>
           </div>
    </div>
                </div>
				</div>
	  </div>
    </div>
</div>
</div>
<!-- // Wrapper =============================-->

		
<script>
	var url = "<?=base_url();?>";
	var b_url = "<?=base_url();?>";
	var site_url = "<?=site_url();?>";
</script>

<!--java script-->
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<!-- Form Validation-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.validate.min.js"></script>
<!-- Form Validation End-->
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="	"></script>

<!-- SlickNavigation For Mobile Device-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.slicknav.min.js"></script>
<!-- SlickNavigation For Mobile Device Ends-->

<!-- Content NiceScroll -->
<script src="<?=base_url();?>assets/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>

<!-- Content NiceScroll End-->

<!-- include retina js -->
<!-- include retina js Ends-->

<!-- Optional Scripts Starts -->

<!-- Preloader Starts -->
<script type="text/javascript" src="<?=base_url();?>assets/js/jpreloader.min.js"></script>
<!-- Preloader End -->
<!-- Cycle Slider Gallery Starts-->
<!--<script type="text/javascript" src="assets/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="assets/js/jquery.cycle2.caption2.js"></script>-->
<!-- Cycle Slider Gallery End-->

<!--SuperSized Gallery-->
<!--SuperSized Gallery End-->

<!-- Filter Gallery And PrettyPhoto-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mixitup.min.js"></script>
<!-- Filter Gallery And PrettyPhoto End-->


<!-- Home Tiled Sldier -->
<script type="text/javascript" src="<?=base_url();?>assets/js/classie.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/wait.js"></script>
<!-- Home Tiled Sldier End-->


<!-- Home Cycle Slider Sldier -->
<!--<script type="text/javascript" src="assets/js/jquery_cycle_custom.js"></script>-->
<!-- Home Cycle Slider Sldier -->


<!-- Vegas sliders -->
<!--<script src="assets/js/jquery.vegas.js"></script>-->
<!-- Vegas sliders End-->

<!-- YT Player -->
<!--  <script src="assets/js/jquery.mb.YTPlayer.js"></script>
  <script src="assets/js/video_custom.js"></script>-->
<!-- YTPlayer End -->

<!-- Optional Scripts Ends -->
	
<!-- Custom Scripts -->
<script type="text/javascript" src="<?=base_url();?>assets/js/custom_general.js"></script>
<!-- Custom Scripts End-->

<!-- History.js -->
<!--[if (gte IE 10) | (!IE)]><!-->
        <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.history.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/ajaxify-html5.js"></script>
<!--<![endif]-->

<!-- Notification -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/notify.min.js"></script>
<!-- Notification End -->

<!-- Redirect -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/redirect_url.js"></script>
<!-- Redirect End -->
<script type='text/javascript'>
	<?php
		if($this->session->flashdata('insert')=='success')
		{
	?>
	$.notify("Success Add To Cart","success");
	<?php } ?>
	
</script>
	

</body>

</html>