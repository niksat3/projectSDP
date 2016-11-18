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



<link rel="shortcut icon" href="<?=base_url();?>assets/assets/images/favicon.ico" /> 
<link rel="apple-touch-icon" href="<?=base_url();?>assets/assets/images/apple_touch_icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>assets/assets/images/apple_touch_icon_72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>assets/assets/images/apple_touch_icon_114x114.png" />

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
                	<div class="brand"><a href="#home"  class="nav-link">The <span> Silver </span>Paradise</a></div>
                    <!--  // Logo section -->

		<!--  Sub Page Menu section -->
	  <nav class="main-nav">
						<a href="#" class="nav-toggle"></a>
						<ul id="sub-nav" class="nav">
						<li><a id="home" href="" class="nav-link">Main</a></li>
						<li><a id="about" href="" class="nav-link">About</a></li>
						<li><a id="menu5" href="" class="nav-link selected"><?php echo ($this->session->userdata('user') ? 'Order' : 'Menu');?></a></li>
						<li><a id="galleryss" href="" class="nav-link">Gallery</a></li>	
						<li><a id="event" href="" class="nav-link">Events</a></li>
						<?php 
							if($this->session->userdata('user'))
							{
						?> 
						<li><a id="reservation" href="" class="nav-link">Reservation</a></li>
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
                             
				<div class="content_overlay"></div>
				<div class="content_inner">
					<div class="row contentscroll">
	<div class="container col-md-12">
          <div class="col-md-6 empty">&nbsp;</div>
                          <div class="col-md-6 content_text">
                          <h1>Our Menu</h1><p class="pad_top13">We give our best menu from the best and fresh ingredients for customer. Feel free to see our menu. You can see the picture of menu at the Gallery Tab.</p> <br />
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
					<div class='specials-round'><h4>$&nbsp;$m->HARGA</h4></div>
						<div class='specials-content' >
							<h4>$m->NAMA_MENU</h4>
							<p>$m->DESKRIPSI</p>
						</div>";
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

<!-- // Lightbox  for home page special promo pack-->
</div>
</div>
<!-- // Wrapper =============================-->

		
<!--Login 
=============================-->
<!--
		<div id="login" class="item">
			<img src="assets/img/8.jpg"  alt="the Paxton Gipsy Hill"  class="fullBg">
			<div class="content">
            
				<div class="content_overlay"></div>
				<div class="content_inner" >
                <div class="row contentscroll">
	<div class="container col-md-12">
          <div class="col-md-6 empty">&nbsp;</div>
		  			
                          <div class="col-md-6 content_text">
                          <div id="reservations">
                           <h1>Reservation</h1>
                           <form id="reservation_form" class="reserve_form pad_top13" action="#" method="post">
			<p>You can make a reservation by filling out the form below, Please note that reservations are only confirmed once we check availability.</p>
			<h4>Pick your Date & Time</h4>
			
			<div class="clearfix date_mar">
                <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input name="dt" type="text" value="" readonly>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>                </div>
				<input type="hidden" id="dtp_input1" value="" />
 				 </div>
    	
			<h4>Reservation Details</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" name="name" class="validate['required'] textbox1" placeholder="* Name : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'" />
				<input type="text" name="email"  class="validate['required','email']  textbox1"
                    placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
				<input type="text" name="phone" class="validate['required','phone']  textbox1"
                    placeholder="* Phone : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'" />
				<textarea name="message" class="validate['required'] messagebox1"
                    placeholder="* Message : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>
				<input id="submitBtn" value="book a table" name="Confirm" type="submit" class="submitBtn">
                </div>
				</form>
	</div>
                          </div>
    </div>
                </div>
				</div>
		  </div>
		</div>      
-->

<script>
	var url = "<?=base_url();?>";
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
<script type="text/javascript" src="<?=base_url();?>assets/js/supersized.3.2.7.min-1.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/supersized.shutter.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/supersized_custom.js"></script>
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

<!-- Redirect -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/redirect_url.js"></script>
<!-- Redirect End -->
	

</body>

</html>