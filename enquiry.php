<html>
<head>
<title>Deccan Deewan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
body{
    background-image: url('img/restaurant.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
div {
    background-color: lightgrey;
    border: 10px solid green;
   	align: center;
	position: absolute;
	top:40%;
	left:40%;
	font-size:17px;
}
table
{
		border-collapse: collapse;
}
table, th, td
{
	border: 1px solid green;
}
</style>
<body>
<?php  
$name = $_POST["Name"];
$enq = $_POST["enqc"];
$date = $_POST["date"];
$message= $_POST["Message"];
echo "<div>"; 
echo "<table><caption><b>Your Enquiry details<b></caption>";
echo "<tr><th>Name</th><td>".$name."</td></tr>";
echo "<tr><th>Enquiry Category</th><td>".$enq."</td></tr>";
echo "<tr><th>Date/Time</th><td>".$date."</td></tr>";
echo "<tr><th>Message</th><td>".$message."</td></tr>";
echo "</table><center><a href='index.php'>Go to Home page</a><center>";
echo "</div>";
?>
</body>
</html>