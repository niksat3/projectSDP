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
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
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
						<li><a id="menu5" href="" class="nav-link"><?php echo ($this->session->userdata('user') ? 'Order' : 'Menu');?></a></li>
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
						<li><a id="register" href="" class="nav-link selected">Register</a></li>	
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


<!--Reservation 
=============================-->

		<div id="register" class="item">
			<img src="<?=base_url();?>assets/img/8.jpg"  alt="the Paxton Gipsy Hill"  class="fullBg">
			<div class="content">
            
				<div class="content_overlay"></div>
				<div class="content_inner" >
                <div class="row contentscroll">
	<div class="container col-md-12">
          <div class="col-md-6 empty">&nbsp;</div>
		  			
                          <div class="col-md-6 content_text">
                          <div id="registration">
                           <h1>Register</h1>
						   <?php 
								$attributes = array('class' => 'reg_form pad_top13', 'id' => 'register_form'); 
								echo form_open('Controller/register',$attributes);
						   ?>
			<p>Register now for delivery and reservation services.</p><br>
			<h4>Username</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="username" name="username" class="validate['required'] textbox1" placeholder="* Username : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Username :'" />
                </div>
			<h4>Password</h4>
			<div class="clearfix reserve_form"> 
				<input type="password" id="password" name="password" class="validate['required'] textbox1" placeholder="* Password : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Password :'" />
                </div>
			<h4>Confirm Password</h4>
			<div class="clearfix reserve_form"> 
				<input type="password" id="confirm_password" name="confirm_password" class="validate['required'] textbox1" placeholder="* Confirm Password : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Confirm Password :'" onchange="myFunction()" />
                </div>
			<h4>Email</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="email" name="email"  class="validate['required','email']  textbox1"
                    placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
                </div>
			<h4>Name</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="name" name="name" class="validate['required'] textbox1" placeholder="* Name : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'" />
                </div>
			<h4>Address</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="address" name="address" class="validate['required'] textbox1" placeholder="* Address : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Address :'" onFocus="geolocate()"/>
                </div>
			<h4>City</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="city" name="city" class="validate['required'] textbox1" placeholder="* City : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* City :'" />
                </div>
			<h4>Phone</h4>
			<div class="clearfix reserve_form"> 
				<input type="text" id="phone" name="phone" class="validate['required','phone']  textbox1"
                    placeholder="* Phone : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'" />
                </div>
				<input id="submitBtn" value="Register" name="Register" type="submit" class="submitBtn" onclick='return isValidForm()'/>
				</form>
	</div>
                          </div>
    </div>
                </div>
				</div>
		  </div>
		</div>       
		
<!-- // Reservation 
=============================-->




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
<script type="text/javascript" src="<?=base_url();?>assets/js/retina-1.1.0.min.js"></script>
<!-- include retina js Ends-->

<!-- Optional Scripts Starts -->

<!-- Preloader Starts -->
<script type="text/javascript" src="<?=base_url();?>assets/js/jpreloader.min.js"></script>
<!-- Preloader End -->

<!-- Cycle Slider Gallery Starts-->
<!--<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.cycle2.caption2.js"></script>-->
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
<!--<script type="text/javascript" src="<?=base_url();?>assets/js/jquery_cycle_custom.js"></script>-->
<!-- Home Cycle Slider Sldier -->


<!-- Vegas sliders -->
<!--<script src="<?=base_url();?>assets/js/jquery.vegas.js"></script>-->
<!-- Vegas sliders End-->

<!-- YT Player -->
<!--  <script src="<?=base_url();?>assets/js/jquery.mb.YTPlayer.js"></script>
  <script src="<?=base_url();?>assets/js/video_custom.js"></script>-->
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

<script>
	function isValidForm() {
		var formvalid = true;
		$('.notifyjs-corner').empty();
		$('.notifyjs-container').empty();
		var re1 = /^\w+$/;
		if($('#username').val()=="") 
		{
			$('#username').notify("Username can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		else if(!re1.test($('#username').val()))
		{
			$('#username').notify("Username must contain only letters, numbers and underscores", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		re2 = /[0-9]/;
		re3 = /[a-z]/;
		re4 = /[A-Z]/;
		if($('#password').val()=="")
		{
			$('#password').notify("Password can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		else if(!re2.test($('#password').val()) || !re3.test($('#password').val()) || !re4.test($('#password').val()) || $('#password').val()<6)
		{
			$('#password').notify("Passwords must contain at least six characters, including uppercase, lowercase letters and numbers", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		var re5 = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if($('#email').val()=="")
		{
			$('#email').notify("Email can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		else if(!re5.test($('#email').val()))
		{
			$('#email').notify("Not a valid email address", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if($('#name').val()=="") 
		{
			$('#name').notify("Name can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if($('#address').val()=="")
		{
			$('#address').notify("Address can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if($('#city').val()=="")
		{
			$('#city').notify("City can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if($('#phone').val()=="") 
		{
			$('#phone').notify("Phone can't be empty", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if($('#confirm_password').val()!=$('#password').val())
		{
			$('#confirm_password').notify("Confirmation Password isn't same with Password", { elementPosition: 'bottom right', autoHide: false });
			formvalid = false;
		}
		if(!formvalid) $.notify('Registration not valid, please check your form');
		return formvalid;
	}
</script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('address')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2rR3uSM7GuI0Hk1srixPtngtn4nT-cfo&libraries=places&callback=initAutocomplete"
        async defer></script>
	

</body>

</html>