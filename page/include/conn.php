<html>
<head>
<title></title>
</head>
<body>
<?php
$con= mysqli_connect("127.0.0.1","sa","sa","nysso_web") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
?>
</body>
</html>
