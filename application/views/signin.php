<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign In</title>	
</head>
<body>
	<?php include('menu.php');?>
	
	<?=form_open(base_url().'users/validate/')?>
	<?php echo (isset($error)) ? '<p>Incorrect Data!</p>' : '';?>
	<p>Username: <?=form_input('username')?></p>	
	<p>Password: <?=form_password('password')?></p>
	<?=form_submit('submit', 'Log In')?>
</body>
</html>