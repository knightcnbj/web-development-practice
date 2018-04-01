<?
	mysql_connect("localhost", "jianyishi", "crimson");
	mysql_select_db("jianyishi_froshims");

	$sql = "SELECT * FROM registrants";
	$result = mysql_query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Frosh IMs</title>
	</head>

	<body>
		<ul>
			<?php
				while ($row = mysql_fetch_array($result)) {
					print("<li>");
					print(htmlspecialchars($row["name"]));
					print("</li>");
				}
			?>
		</ul>
	</body>
</html>