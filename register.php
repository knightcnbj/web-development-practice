<!DOCTYPE html>

<html>
	<head> 
		<title>Registered!</title>
	</head>

	<body>
		<h1> Hello, <?= htmlspecialchars($_GET['name']) ?>!</h1>
		<h1> You r a <?= htmlspecialchars($_GET['gender']) ?></h1>
		<h1> You r from <?=htmlspecialchars($_GET['state']) ?></h1>
	</body>
</html>