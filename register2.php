<?
	if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"])) {
		header("Location: http://localhost/~jianyishi/Desktop/GitHub Storage/web-development-practice/froshims2.php");
		exit;
	}

	mysql_connect("localhost", "jianyishi", "crimson");
	mysql_select_db("jianyishi_froshims");

	$name = mysql_real_escape_string($_POST["name"]);
	if ($_POST["captain"])
		$captain = 1;
	else
		$captain = 0;

	$gender = mysql_real_escape_string($_POST["gender"]);
	$dorm = mysql_real_escape_string($_POST["dorm"]);

	$sql = "INSERT INTO registrants (name, captain, gender, dorm) VALUES ('$name', $captain, '$gender', '$dorm')";
	mysql_query($sql);
?>

<!DOCTYPE html> 

<html>
	<head>
		<title>Frosh IMs</title>
	</head>

	<body>
		You are registered! (really.)
	</body>
</html>