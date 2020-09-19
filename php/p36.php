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

<h3>Displaying content of array using function.</h3>
<?php
function fun()
	{
		$arr = array('India'=>'Delhi','Sri Lanka'=>'Colombo','Bangladesh'=>'Dhaka','Pakistan'=>'Islamabad');
		return $arr;
	}
?>

<?php
echo "
<table>
<tr>
<th>Country</th>
<th>Capital</th>
</tr>";
?>

<?php
$dt = fun();
foreach ($dt as $key => $val)
{
echo "<tr>";
echo "<td> $key </td>";
echo "<td> $val </td>";
echo "</tr>";
}
?> 

</table>
</body>
</html>