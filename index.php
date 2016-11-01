<?php
		$dataJSON = file_get_contents("data.json");
		$data = json_decode($dataJSON, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Company Signatures</title>
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
			<h1>My Company E-mail Signatures</h1>
			<p>Scroll down the page to find your name and click the button marked "Copy Signature".</p>
		</div>
		<?php foreach ($data[people] as $person) { include('signature.php'); } ?>
</div>

</body>
</html>