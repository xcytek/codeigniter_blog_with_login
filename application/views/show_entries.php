<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Entries</title>	
</head>
<body>
	<?php include('menu.php');?>

	<?php if (!empty($entries)) : ?>
		<?php foreach($entries as $entry) : ?>
			<h2><?=anchor(base_url().'blog/view/'.$entry->id,$entry->title)?></h2>
			Author: <?=$entry->author?><br />
			Date: <?=convertDateTimetoTimeAgo($entry->date)?><hr />
		<?php endforeach; ?>
	<?php else : ?>
		<h1>No entries</h1>
	<?php endif; ?>
</body>
</html>