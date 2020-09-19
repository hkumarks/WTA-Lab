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


<h1>Employee data by Employee ID</h1>
<br><br>
<form action="p37.php" method="get">
Employee Number: <input type="text" name="empid"><br><br>
<input type="submit" value="search">
</form>
<br><br>
<table>
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Dept</th>
</tr>

<?php
{
	function displaydata($id,$nm,$dept)
		{
			echo"
			<tr>
			<td>$id<br></td>
			<td>$nm<br></td>
			<td>$dept<br></td>
			</tr>";
		}

	$servername = "localhost";	
	$username = "root";
	$password = "";
	$dbname="forphp";
	$conn = new mysqli($servername, $username, $password,$dbname);
    if (!empty($_GET['empid']))
   	{
	$empid=$_GET['empid'];
	$q = "SELECT * FROM employee where ID=$empid";
	$result = $conn->query($q);
	if ($result->num_rows == 0)
		{
		echo "Employee with That ID doesn't exist!";
		}
	else 
		{
				while($row = $result->fetch_assoc())
				{
					$empid = $row["ID"];
					$ename = $row["Name"];
					$dept  = $row["Dept"];
					displaydata($empid,$ename,$dept);
				}
		}	
    }

$conn->close();
}
?> 
</table>
</body>
</html>
