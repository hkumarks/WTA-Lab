<html>
<head>
<style>

table
{
border-style:solid ;
border-width:2px;
border-color:black;
border-collapse: collapse;
margin-left: 25px;
}
th, td {
  border: 1px solid black;
  padding: 10px 15px 10px;
  text-align: left;
}

</style>
</head>
<body>

<div style="background-color:lightgrey; border : 4px solid black; width: 175px;margin: 20px; padding: 2px;">
<?php
date_default_timezone_set("Asia/Calcutta");
echo "";
echo "Date  :  " . date("d/m/Y") ."<br>";
echo "Time  :  " . date("h:i:s A ") . "IST";
echo "</div>";
?>
<h1>Entering data using POST</h1>
<form action="p35.php" method="post">
Name: <input type="text" name="name"><br><br>
Age: <input type="number" name="age"><br><br>
Gender : <input type="text" name = "gen"><br><br>
<input type="submit" value="submit">
</form>

<?php
echo "
<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
</tr>";
?>

<?php
if (empty($_POST["name"]) or empty($_POST["age"]) or empty($_POST["gen"])){
	$name = "NULL";
	$age = "NULL";
	$gen = "NULL";
}
else 
{
	$name = $_POST["name"];
	$age = $_POST["age"];
	$gen = $_POST["gen"];
}
?> 
<tr>
<?php
echo"
<td>$name<br></td>
<td>$age<br></td>
<td>$gen<br></td>
</tr>";
?>

</body>
</html>