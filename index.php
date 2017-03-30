<!DOCTYPE html>
<html>
<head>

	<title>UniveristyYou</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
 	<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	
	<div id="main_title">
	    <h1 id="title_text">University Finder</h1>
	</div>

	<div class="container">
    <!--Row with two equal columns-->

    <div class="row">
        <div class="col">
        	<div id="searchB">
	        	<form action="search.php" method="GET" class="navbar-form navbar-left" role="search">
				    <div class="form-group">
				        <input id="universityText" type="text" name="query" class="form-control" size="40" placeholder="Name of University">
				    </div>

			<div class="col">
	        	<div class="btn-group center-block" role="group" aria-label="...">
	        	<div id="findButton">
  			    <button type="submit" class="btn btn-primary">Find University! </button>
  			</div>
	</div>
				</form>
			</div>
        </div>
    </div>
    

<!--
<div id="searchBar">
	<form action="search.php" method="GET">
	    <input type="text" name="query" size="40"/>
	    <input type="submit" value="Find!" />
	</form>
</div>
-->

<script src="script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>