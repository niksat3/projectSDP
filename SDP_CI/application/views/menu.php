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

<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery-migrate-1.2.1.js"></script>
<script src="<?=base_url();?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/modernizr.custom.js"></script>

	
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
						<li><a id="menu5" href="" class="nav-link selected"><?php echo ($this->session->userdata('user') ? 'Order' : 'Menu');?></a>
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
			<img src="<?php echo base_url() . $galrandom->LINK_GALLERY_HOME;?>" alt="The Spice Lounge" class="fullBg">
			<div class="content">
                             
				<div class="content_overlay"></div>
				<div class="content_inner">
					<div class="row contentscroll">
	<div class="container col-md-12">
          <div class="col-md-6 empty">&nbsp;</div>
                          <div class="col-md-6 content_text">
                          <h1>Our Menu</h1><p class="pad_top13">We give our best menu from the best and fresh ingredients for customer. Feel free to see and order our menu.</p> <br />
                          <div class="clearfix">
							<div class="main">

<!-- div one created -->
<div class='clearfix'>
<?php 
	$ctr = 0;
	foreach ($kategori as $k)	{
		if ($ctr == 0)	{
			echo "<div class='pad_top50'>";
		}
		else {
			echo "<div class='clearfix'>";
		}
		echo "
				<div class='toggle-container'>
					<div class='toggle-header'>
						<div class='toggle-link toggle-open'>$k->NAMA_KATEGORI</div>
					</div>
					<div class='toggle-content'>";
		$ctrr = 0;
		foreach ($menu as $m)	{
			if ($m->ID_KATEGORI == $k->ID_KATEGORI)	{
				if ($ctrr == 0)	{
					echo "<div class='pad_top20 clearfix'>";
				}
				else	{
					echo "<div class='clearfix'>";
				}
				echo "
					<img class='specials-round' src=". base_url() . $m->LINK_PICTURE . " />
						<div class='specials-content' >
							<h4>$m->NAMA_MENU (Rp. ". $this->cart->format_number($m->HARGA) .")</h4>
							<p>$m->DESKRIPSI</p>
						</div>";
				if($this->session->userdata('user'))
				{
					echo    "<div class='right'>
								<input type='hidden' name='id_menu' value='$m->ID_MENU' />
								<input type='hidden' name='nama_menu' value='$m->NAMA_MENU' />
								<input type='hidden' name='harga_menu' value='$m->HARGA' />
								<input type='number' name='order' placeholder='* Amount : ' onFocus='this.placeholder = ''' onBlur='this.placeholder = '* Amount :'' />
								<input type='submit' value='Add to Cart' name='AddToCart' class='submitBtn' />
							</div>";
				}
				echo "</div>";
				$ctrr++;
			}
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";
		$ctr++;
	}

?><!-- div one created ends here -->

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
	$.notify("Success Add To Cart");
	<?php } ?>
</script>
	

</body>

</html>