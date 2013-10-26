<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Entry</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?=form_open(base_url().'blog/insert_entry/')?>
	<p>Title: <?=form_input('title')?></p>
	<p>Content: <?=form_textarea('content')?></p>
	<p>Tags: <?=form_input('tags')?> (comma separated)</p>
	<?=form_submit('submit', 'Insert')?>
</body>
</html>