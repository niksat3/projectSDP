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
	hr {
		border-top: 1px solid #ccc;
	}

	#cartcontent {
		font-size: 16px;
	}
	#cartleft {
		width:60%;
		float:left;
		padding: 10px;
		border: 1px solid rgba(0,0,0,0.2);
	}
	#cartright {
		width:28%;
		float:right;
		padding: 10px;
		border: 1px solid rgba(0,0,0,0.2);
	}
	@media(max-width: 601px){
		#cartleft span{
			clear:both;
		}
	}
	@media(max-width: 452px){
		#cartleft, #cartright {
			margin-top: 25px;
			width:100%;
			float:none;
		}
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
<?php date_default_timezone_set('Asia/Jakarta'); ?>
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
							<li><a id="order" href="" class="nav-link">Order Our Menu</a>
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
						<li><a id="cart" href="" class="nav-link selected"><img id='cartimg' src="<?=base_url();?>assets/img/cart2.png" width='25px' /></a></li>
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

<div id="cart" class="item">
			<img src="<?=base_url()?>assets/img/2.jpg" alt="The Spice Lounge" class="fullBg">
			<div class="content">
                             
				<div class="content_overlay" style='width:100%'></div>
				<div class="content_inner">
					<div class="row contentscroll">
	<div class="container col-md-12">
                          <div class="col-md-12 content_text">
                          <center><h1>Order Summary</h1><p class="pad_top13">Please check your order and hit the Check Out button.</p></center><br><br>
                          <div class="clearfix"></div>
							<div class="main">

<!-- div one created -->
<div class='clearfix' id='cartcontent'>
<?php
	if(count($this->cart->contents()))
	{
?>
<div id='cartleft'>
<?php 
	foreach ($this->cart->contents() as $content){
		echo "
		<span style='width:30%;'>
			<H1 style='display:inline;float:left;'>" . $content['qty'] . "</H1>
			<H6 style='display:inline;float:left;'> pcs</H6>
		</span>
		<span style='width:70%'>
			<img class='specials-round' src='" . base_url() . $content['options']['link_picture'] . "' style='margin:20px 30px 20px 50px;width:100px;height:100px;' />" . $content['name'] . "<br>
			<H6 style='display:inline;float:left;color:green'>@Rp. " . $this->cart->format_number($content['price']) . "</H6>";
		echo "
			<span style='float:right'>
				<H2 style='display:inline;float:left;color:green'>Rp. " . $this->cart->format_number($content['price']*$content['qty']) . "</H2>
			</span>";
		echo '
		</span>
		<div style="clear:both"></div>';
		echo "<hr>";
	}
?><!-- div one created ends here -->
</div>
<div id='cartright'>
<?php
	$date = new DateTime(date('Y-m-j h:i:s'));
	$date->add(new DateInterval('PT30M'));
	echo '<center>Deliver To: <br>' . $this->session->userdata('alamat') . '<hr>';
	echo 'Estimated Delivery Time: <br>' . $date->format('j/m/Y h:i:s A') . '</center><hr>';
	echo '
	<center>
		<H4>
			<span style="float:left">
				Subtotal:
			</span>
			<span style="float:right;"> 
				Rp. ' . $this->cart->format_number($this->cart->total()) . 
			'</span>
		</H4>';
	echo '<div style="clear:both"></div>';
	echo '
		<H4>
			<span style="float:left">Delivery Charge:</span>
			<span style="float:right;"> Rp. ' . $this->cart->format_number('13000') . '</span>
		</H4>';
	echo '<div style="clear:both"></div>';
	echo '
		<H4>
			<span style="float:left">Tax:</span>
			<span style="float:right;"> Rp. ' . $this->cart->format_number($this->cart->total()/10) . '</span>
		</H4>';
	echo '<div style="clear:both"></div><hr>';
	$totalall = $this->cart->total() + $this->cart->total()/10 + 13000;
	echo '
		<H4>
			<span style="float:left">Total:</span>
			<span style="float:right;color:green;"> Rp. ' . $this->cart->format_number($totalall) . '</span>
		</H4>';
	echo '
		<div style="clear:both"></div>
	</center><hr>';
?><br>
</div>
<div class="clearfix"></div>
<?php
	echo form_open('Controller/cart',array('class'=>'formcart'));
	echo "<input type='submit' value='Check Out' name='checkout' class='submitBtn' style='margin:10px;width:99%;height:120%;'  />";
	echo form_close();
	}
	else
	{
		echo "<center><H4 style=''>There're no order that you make at the time. Please order first to do checkout.</p></center>";
	}
?>
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
	

</body>

</html>