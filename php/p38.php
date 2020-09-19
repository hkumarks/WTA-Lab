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


<h1>Employee Database</h1>
<br><br>
<form action="p38.php" method="get">
Employee ID: <input type="text" name="empid"><br><br>
Employee Name  : <input type="text" name="empname"><br><br>
Employee Dept: <input type="text" name="empdep"><br><br>
<input type="submit" value="Insert">
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
    if (!empty($_GET['empid']) and !empty($_GET['empname']) and !empty($_GET['empdep']) )
   	{
   		$tid = $_GET["empid"];
   		$tname = $_GET["empname"];
		$tdept = $_GET["empdep"];
		$q = "INSERT INTO employee  VALUES ('$tid','$tname','$tdept')";
		$conn->query($q);
	 	$q =  "SELECT * FROM employee";
		$result=$conn->query($q);
		while($row = $result->fetch_assoc())
			{
			$empid = $row["ID"];
			$ename = $row["Name"];
			$edept  = $row["Dept"];
			displaydata($empid,$ename,$edept);
			}	
    }

$conn->close();
}
?> 
</table>
</body>
</html>