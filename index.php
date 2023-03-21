<!DOCTYPE html>
<html>
<body>


<center>PHP NET

	<form action="index.php" method="get">
		<input type="text" name="browse">
		<input type="submit">
	</form>
	</center>

	<?php
	 $newURL = $_GET["browse"];
	 header('Location: '.$newURL); 
	 exit();
	?> 

</body>
</html>
