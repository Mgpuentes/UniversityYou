<?php
$user = 'root';
$pass = '';
$db = 'testdb';

mysql_connect("localhost", $user, $pass)or die("error connecting to database".mysql_error());

mysql_select_db("testdb") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
</head>
<body>
	<?php
		// gets the value sent from the search form created
		$query = $_GET['query'];

		$min_length = 3;

		if(strlen($query) >= $min_length){

			$query = htmlspecialchars($query);

			$query = mysql_real_escape_string($query);

			$raw_results = mysql_query("SELECT * FROM persons 
			WHERE (`first_name` LIKE '%".$query."%')") or die(mysql_error());

			if(mysql_num_rows($raw_results) > 0){
				while($results = mysql_fetch_array($raw_results)){

					echo "<p><h3>".$results['first_name']."</h3></p>";
			}
		}

			else{
				echo "no results";
			}

		}

	?>

</body>
</html>