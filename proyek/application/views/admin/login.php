<?php
	$add = base_url('assets/admin/');
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login form using HTML5 and CSS3</title>
        <link rel="stylesheet" href="<?= $add ?>css/style.css">
  </head>

  <body>

    <body>
<div class="container">
	<section id="content">
		<?php echo form_open('adminlogin/login'); ?>
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" id="password" />
			</div>
			<div style="text-align:left; margin-left: 5%">
			<?php echo $status; ?>
			</div>
			<div>
				<input type="submit" name="login" value="Log in" />
				<!--a href="#">Lost your password?</a-->
				<!--a href="#">Register</a-->
			</div>
			
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
    
        <script src="<?= $add ?>js/index.js"></script>

    
    
    
  </body>
</html>
