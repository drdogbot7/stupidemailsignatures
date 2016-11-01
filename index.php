<?php
	if (file_exists('data.csv')) {
		$rows = array_map('str_getcsv', file('data.csv'));
		$header = array_shift($rows);
		$data = array();
		foreach ($rows as $row) {
		  $data[] = array_combine($header, $row);
		}	
	}
	elseif (file_exists('data.json')) {
			$dataJSON = file_get_contents("data.json");
			$data = json_decode($dataJSON, true);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Example E-mail Signatures</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.15/clipboard.min.js"></script>
	<script>
		$( document ).ready(function(){
			var myclipboard = new Clipboard('.btn')
			myclipboard.on('success', function(e) {
				alert('Successfully copied to clipboard.');
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h2>My Company E-mail Signatures</h2>
			<p>Scroll down the page to find your name and click the button marked "Copy Signature".</p>
		</div>
		<?php foreach ($data as $key => $person) : ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?= ($person[lastName] ? $person[lastName] : ''); ?>, <?= ($person[firstName] ? $person[firstName] : '') ?></h3>
			</div>
			<div class="panel-body">
				<div id="person-<?= $key ?>">
				<?php include('signature.php'); ?>
				</div>
			</div>
			<div class="panel-footer">
				<button class="btn btn-default" data-my-clipboard data-clipboard-target="#person-<?= $key ?>" data-clipboard-success="{{ person.firstName }} {{ person.middleName }} {{ person.lastName }}"><span class="glyphicon glyphicon-copy"></span> Copy Signature</button>
			</div>
		</div>
		<?php	endforeach;	?>
</div>

</body>
</html>