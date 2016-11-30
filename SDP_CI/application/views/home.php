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

<style>
@media screen and (min-width: 1077px) {
	#header{
		display:none;
	}
}
@media screen and (max-width: 1077px) {
	#mainheader{
		display:none;
	}
}
</style>

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
	
<!-- // Header 
=============================-->
<!-- // Header 
=============================-->
<!--Home Page
=============================-->
<div id="home1" class="item">
				<img src="<?=base_url();?>assets/img/2.jpg" alt="The Spice Lounge" class="fullBg">
				<div class="clearfix">
			<div class="header_details">
				<div class="container">
					<div class="header_icons accura-header-block accura-hidden-2xs">
						<ul class="accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix">
						<li id="1"><a href="<?=$facebook;?>" target="_blank" class="accura-social-icon-facebook circle"><i class="fa fa-facebook"></i></a></li>
					    <li id="2"><a href="<?=$twitter;?>" target="_blank" class="accura-social-icon-twitter circle"><i class="fa fa-twitter"></i></a></li>
					    <li id="3"><a href="<?=$google;?>" target="_blank" class="accura-social-icon-gplus circle"><i class="fa fa-google-plus"></i></a></li>
					    <li id="4"><a href="<?=$pinterest;?>" target="_blank" class="accura-social-icon-pinterest circle"><i class="fa fa-pinterest"></i></a></li>
						<li id="5"><a href="<?=$linkedin;?>" target="_blank" class="accura-social-icon-linkedin circle"><i class="fa fa-linkedin"></i></a></li>
					  </ul>
					</div>
				<div class="call">
					<div class="home_address">
						<?=$address;?><br>
					</div>
					<i class="fa fa-phone"></i><?=$phone;?></div>
			</div>
<!-- // Mainheader Menu Section -->
<div class="mainheaderslide" id="slide">
	<div id="mainheader" class="header">
		<div class="menu-inner">
			<div class="container">
				<div class="row">
        <div class="header-table col-md-12 header-menu">
        
        <!--  Logo section -->
        <div class="brand"><a id='logo' href="" class="nav-link">The <span> Silver </span>Paradise</a></div>
        <!--  // Logo section -->
        
<!--  Home Page Menu section -->
						<nav class="main-nav">
						<a href="#" class="nav-toggle"></a>
							<ul id="home_nav" class="nav">
							<li><span class="nav-link selected1">Main</span></li>
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
							<li><a id="cart" href="" class="nav-link"><img id='cartimg' src="<?=base_url();?>assets/img/cart.png" width='25px' /></a></li>
							<?php } ?>
							</ul>
					  </nav>
<!-- // Home Page Menu section -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            <!-- // Mainheader Menu Section -->
		</div>
			<div id="boxgallery" class="boxgallery" data-effect="effect-2">
			<?php
				foreach($gallery_home as $gh)
				{
					echo '<div class="panel"><img src="' . base_url() . $gh->LINK_GALLERY_HOME . '" /></div>';
				}
			?>
			</div>
		</div>
	</div>
		
<!-- // Home Page
=============================-->

<!-- // Contact Form
=============================-->



<!--Special Menu 
=============================-->
<div id="specialmenu" class="toHideTheBubbles hidden-phone">
	<div class="spcontainer">
	<div id="spmenu1"> 	<button class="spmenu spmenu2" onClick="modalshow('#upcomingevent')"  data-toggle="modal" data-target="#lightbox" >
			<span><i class="fa fa-calendar"></i></span>
			<span class="sptext"><span>upcoming </span>Events</span>
		</button></div>
     <div id="spmenu2">   <button class="spmenu spmenu1"  onclick="modalshow('#video1')"  data-toggle="modal" data-target="#lightbox2">
			<span><i class="fa fa-desktop"></i></span>
			<span class="sptext">Videos</span>
		</button> </div>
		<div id="spmenu3"><button class="spmenu spmenu3"  onclick="modalshow('#todayspecial')" data-toggle="modal" data-target="#lightbox3">
		<span><i class="fa fa-gift"></i></span>
			<span class="sptext"><span>today </span>special's</span>
		</button>	</div>
    </div>
</div>
<!-- // Special Menu 
=============================-->


<!--Lightbox  for home page special promo pack
=============================-->
<div id="upcomingevent">
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="upcomingevent" aria-hidden="true">
<div class="modal-dialog">
        <div class="modal-content">
			<button class="close" data-dismiss="modal"><img src="<?=base_url();?>assets/img/close.png" alt=" "></button>
            <div class="modal-body">
				<div class="spimg">
	                <img src="<?=$upcoming;?>" alt="..." class="img-responsive">
				</div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="todayspecial" >
<div id="lightbox3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="todayspecial" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<button type="button" class="close" data-dismiss="modal" ><img src="<?=base_url();?>assets/img/close.png" alt=" "></button>
            <div class="modal-body">
                <div class="content_overlay">
	<div class="content_text contentscroll">
                          <h1 class="text-center">Today Special's</h1><p>Our special menu is here! Grab your food now!</p> <br />
                          <!-- div one created -->
<div class="pad_top30">
    <div class="toggle-container">
        <div class="toggle-header">
        	<div class="toggle-link toggle-open">Monday</div>
        </div>
        <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;18</h4></div>
				<div class="specials-content" >
					<h4>POT STICKERS (6)</h4>
					<p>(fried dumplings filled with ground pork and vegetables)</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;20</h4></div>
				<div class="specials-content" >
					<h4>SATAY</h4>
					<p>Choice of chicken or beef marinated in thai herbs served with peanut sauce and cucumber salad.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;35</h4></div>
				<div class="specials-content" >
					<h4>CURRY PUFF</h4>
					<p>Puff pastry stuffed with ground chicken, onion, potatoes and curry powder with cucumber salad.</p>
				</div>
			</div>
        </div>
    </div><!--// .toggle-container end-->
</div><!-- div one created ends here -->
<div class="clearfix">
    <div class="toggle-container">
         <div class="toggle-header">
      	  <div class="toggle-link toggle-open">Tuesday</div>
        </div>
        <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;22</h4></div>
				<div class="specials-content" >
					<h4>Spring Roll</h4>
					<p>Crispy fried rolls stuffed with shrimp and glass noodles.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;18</h4></div>
				<div class="specials-content" >
					<h4>Pork Loin</h4>
					<p>Roasted Pork, Swiss Chard, Ramps and Wheat Spaetzle.</p>
				</div>
			</div>
        </div>
    </div><!--// .toggle-container end-->
</div>

<div class="clearfix">
    <div class="toggle-container">
         <div class="toggle-header">
      	  <div class="toggle-link toggle-open">Wednesday</div>
        </div>
        <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;14</h4></div>
				<div class="specials-content" >
					<h4>Devil's Food Cake</h4>
					<p>Chocolate, Black Cardamom, Banana Ice Cream.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;20</h4></div>
				<div class="specials-content" >
					<h4>SATAY</h4>
					<p>Choice of chicken or beef marinated in thai herbs served with peanut sauce and cucumber salad.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;25</h4></div>
				<div class="specials-content" >
					<h4>Vegetable Frittata</h4>
					<p>Asparagus, fresh thyme, baked in a cast iron skillet.</p>
				</div>
			</div>
        </div>
    </div><!--// .toggle-container end-->
</div>
<div class="clearfix">
    <div class="toggle-container">
        <div class="toggle-header">
      	  <div class="toggle-link toggle-open">Thursday</div>
        </div>
        <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;12</h4></div>
				<div class="specials-content" >
					<h4>Almond Cake</h4>
					<p>Rhubarb, Mascarpone Cream and Brown Sugar Ice Cream.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;16</h4></div>
				<div class="specials-content" >
					<h4>Potato Salad</h4>
					<p>Black Bass, Fennel, Olives and Fingerling Potatoes.</p>
				</div>
			</div>
        </div>
    </div>
</div>
<div class="clearfix">

    <div class="toggle-container">
        <div class="toggle-header">
      	  <div class="toggle-link toggle-open">Friday</div>
        </div>
        <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;30</h4></div>
				<div class="specials-content" >
					<h4>Egg Sandwich</h4>
					<p>Scrambled eggs, on our whole wheat, with carrot hash browns.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;26</h4></div>
				<div class="specials-content" >
					<h4>Mushroom Broth</h4>
					<p>Spring Onion & Smoked Egg, Kohlrabi and Emmer Noodles.</p>
				</div>
			</div>
        </div>
    </div>
</div>
<div class="clearfix">
    <div class="toggle-container">
        <div class="toggle-header">
       		 <div class="toggle-link toggle-open">Saturday &amp; Sunday</div>
        </div>
    <div class="toggle-content">
			<div class="pad_top20 clearfix">
				<div class="specials-round"><h4>$&nbsp;35</h4></div>
				<div class="specials-content" >
					<h4>Egg with Chees</h4>
					<p>Kale & Ancient Grains Salad, Dates, Sbrinz Cheese. </p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;18</h4></div>
				<div class="specials-content" >
					<h4>Pork Loin</h4>
					<p>Roasted Pork, Swiss Chard, Ramps and Wheat Spaetzle.</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="specials-round"><h4>$&nbsp;25</h4></div>
				<div class="specials-content" >
					<h4>Vegetable Frittata</h4>
					<p>Puff pastry stuffed with ground chicken, onion, potatoes and curry powder with cucumber salad.</p>
				</div>
			</div>
        </div>
    </div>
</div><!-- last div ends here -->
           </div>
</div>
            </div>
        </div>
    </div>
</div>	
</div>


<div id="video1" >
	<div id="lightbox2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="video1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" ><img src="<?=base_url();?>assets/img/close.png" alt=" "></button>
				<div class="modal-body">
				<div class="video_containers">
                   <iframe src="http://player.vimeo.com/video/19544059?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" ></iframe>

				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- // Lightbox  for home page special promo pack-->
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
<script type="text/javascript" src=""></script>


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
<script type="text/javascript" src="<?=base_url();?>assets/js/supersized.3.2.7.min-1.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/supersized.shutter.min.js"></script>
<!--SuperSized Gallery End-->

<!-- Filter Gallery And PrettyPhoto-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mixitup.min.js"></script>
<!-- Filter Gallery And PrettyPhoto End-->


<!-- Home Tiled Sldier -->
<script type="text/javascript" src="<?=base_url();?>assets/js/classie.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/boxesFx.js"></script>
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
<script type="text/javascript" src="<?=base_url();?>assets/js/custom_general_box.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/custom_general.js"></script>
<!-- Custom Scripts End-->

<!-- History.js -->
<!--[if (gte IE 10) | (!IE)]><!-->
        <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.history.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/ajaxify-html5.js"></script>
<!--<![endif]-->

<!-- Redirect -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/redirect_url.js"></script>
<!-- Redirect End -->

</body>

</html>