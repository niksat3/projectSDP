<?php
	$add = base_url('assets/dashboard/');
    $mode = $this->session->userdata('mode');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?= $add ?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= $add ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= $add ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?= $add ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= $add ?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="<?= $add ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?= $add ?>assets/css/css.css' rel='stylesheet' type='text/css'>
    <link href="<?= $add ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?= $add ?>assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    The Silver Paradise
                </a>
            </div>

            <ul class="nav">
                <li id="index">
                    <a href="<?= site_url('dashboard') ?>">
                        <i class="pe-7s-science pe-spin"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li id="category">
                    <a href="<?= site_url('dashboard/viewCategory') ?>">
                        <i class="pe-7s-config pe-spin"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li id="customer">
                    <a href="<?= site_url('dashboard/viewCustomer') ?>">
                        <i class="pe-7s-config pe-spin"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li id="menu">
                    <a href="<?= site_url('dashboard/viewMenu') ?>">
                        <i class="pe-7s-config pe-spin"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li id="promo">
                    <a href="<?= site_url('dashboard/viewPromo') ?>">
                        <i class="pe-7s-config pe-spin"></i>
                        <p>Promo</p>
                    </a>
                </li>
                <li id="courier">
                    <a href="<?= site_url('dashboard/viewCourier') ?>">
                        <i class="pe-7s-config pe-spin"></i>
                        <p>Courier</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
			
		<div class="content">
			<?php
				$this->load->view('dashboard/'.$mode);
			?>
		</div>
        


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    @ 2016 Edited By :  <a href="#">Darren,David,Effendy,Niklas</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?= $add ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?= $add ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?= $add ?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?= $add ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?= $add ?>assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= $add ?>assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?= $add ?>assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome , <b>Admin</b>"

            },{
                type: 'info',
                timer: 4000
            });

            $("#<?= $mode ?>").addClass('active');

    	});
	</script>

</html>
