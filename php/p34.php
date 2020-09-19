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

<?php
echo "
<h2>Assosiative array</h2>
<table>
<tr>
<th>Abbr</th>
<th>Full Name</th>
</tr>";

$assoArr=array('mon'=>'monday',
'tue'=>'tuesday',
'wed'=>'wednesday',
'thu'=>'thrusday');
foreach ($assoArr as $g => $n)
{
echo "<tr>";
echo "<td> $g </td>";
echo "<td> $n </td>";
echo "</tr>";
}
echo "</table>";


echo "
<br>
<h2>Enumerated array</h2>
<table>
<tr>
<th>Id</th>
<th>Alphabet</th>	
</tr>";
$enuArr=array('A','B','C','D');
$index=1;
foreach ($enuArr as $c)
{
echo "<tr>";
echo "<td>$index</td>";	
$index++;
echo "<td> $c </td>";
echo "</tr>";
}

echo"</table>";	
?>


</body>

</html>
