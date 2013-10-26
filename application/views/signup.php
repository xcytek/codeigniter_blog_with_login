<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?=form_open(base_url().'users/register/')?>
	<p>Name: <?=form_input('name')?></p>
	<p>Username: <?=form_input('username')?></p>
	<p>Password: <?=form_password('password')?></p>
	<?=form_submit('submit', 'Register')?>
</body>
</html>