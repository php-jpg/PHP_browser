<!DOCTYPE html>
<html>
<head>
<style>/*css code to change backround*/
body {
  backround-color: #EEEEE;
}</style>
</head>
<body>
	<center> 
	<?php echo("PHP BROWSER"); ?>
	<form action="index.php" method="get">
		<input type="text" name="browse">
		<input type="submit">
	</form>
	</center>

	
	<?php
    if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['browse']))
    {
        func();
    }
    function func()
    {
    $newURL = $_GET["browse"];
    echo '<script type="text/javascript">
           window.location = "http://www.google.com/"
      </script>';
    } 
?>
</body>
</html>