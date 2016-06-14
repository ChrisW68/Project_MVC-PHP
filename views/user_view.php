<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User View</title>
</head>
<body>

	<h1>

	<?php

	//echo $results;

		foreach ($results as $object) {     //receives the data and get it as a object

		echo $object->username;
		echo $object->password. "<br>";

	}


	?>

	</h1>

</body>
</html>
