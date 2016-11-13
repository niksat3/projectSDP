<?php
	$add = base_url('assets/dashboard/');
    $mode = $this->session->userdata('mode');
    $data['tambahan'] = "";
    if(isset($tambahan)) {
        $data['tambahan'] = $tambahan;
    }
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
    <link href="<?= $add ?>assets/js/jquery.confirm/jquery.confirm.css" rel="stylesheet"/>


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
                <li id="kategori">
                    <a href="<?= site_url('dashboard/viewKategori') ?>">
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
                            <a href="<?= site_url('dashboard/logout') ?>">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
			
		<div class="content">
			<?php
				$this->load->view('dashboard/'.$mode,$data);
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
	<script src="<?= $add ?>assets/js/loader.js"></script>
	<script src="<?= $add ?>assets/js/demo.js"></script>
	<script src="<?= $add ?>assets/js/jquery.confirm/jquery.confirm.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
    	    var mode = "<?= $this->session->userdata('mode') ?>";
            if(mode == "index") {
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {

                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        ['aaa', 3],
                        ['Onions', 1],
                        ['Olives', 1],
                        ['Zucchini', 1],
                        ['Pepperoni', 2]
                    ]);

                    // Set chart options
                    var options = {
                        title: 'Approximating Normal Distribution',
                        legend: { position: 'none' },
                        colors: ['#4285F4'],

                        chartArea: { width: 401 },
                        hAxis: {
                            ticks: [-1, -0.75, -0.5, -0.25, 0, 0.25, 0.5, 0.75, 1]
                        },
                        bar: { gap: 0 },

                        histogram: {
                            bucketSize: 0.02,
                            maxNumBuckets: 200,
                            minValue: -1,
                            maxValue: 1
                        }
                    };

                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.Histogram(document.getElementById('chartHours'));
                    chart.draw(data, options);
                }
            }
			<?php if($this->session->userdata('mode') == "index"){?>
        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome , <b>Admin</b>"

            },{
                type: 'info',
                timer: 4000
            });
			<?php }?>
            $("#<?= $mode ?>").addClass('active');

    	});
        function confirmbox(e){
            var elem = e;

            $.confirm({
                'title'		: 'Delete Confirmation',
                'message'	: 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
                'buttons'	: {
                    'Yes'	: {
                        'class'	: 'blue',
                        'action': function(){
                            window.location = "<?php echo site_url();?>/dashboard/delete/"+elem;
                        }
                    },
                    'No'	: {
                        'class'	: 'gray',
                        'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
                    }
                }
            });
        }
	</script>

</html>
