<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css">

	<title>Login - Admin Form</title>
</head>

<body>
	<div class="container">
		<?php echo form_open('Admin_login/login', 'class="login-email"'); ?>
			<p class="login-text" style="font-size: 2rem; font-weight: 400;">Admin Dashboard</p>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Form</p>
			<div class="input-group">
				<input type="email" placeholder="Enter E-mail" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>

</html>