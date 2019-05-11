<!DOCTYPE html>
<html>
<head>
	<title>Input User</title>
</head>
<body>
<form method="post" action="save_user.php">
<input type="text" name="id_user" placeholder="id user">
<input type="text" name="level" placeholder="level">
<input type="password" name="password" placeholder="password">
<input type="text" name="username" placeholder="username">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
include 'view_user.php';
?>
</body>
</html>