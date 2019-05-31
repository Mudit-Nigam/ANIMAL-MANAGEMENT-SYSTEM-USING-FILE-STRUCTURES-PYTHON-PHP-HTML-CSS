<html>
<head><title>Availability</title>
  <link type="text/css" rel="stylesheet" href="table.css">

</head>

<body background="ADOPTRES.jpg" text="black" font size="6">
<?php


if(isset($_POST['submt']))
{
$animal = $_POST['animal'];
$breedname = $_POST['breedname'];
$mob = $_POST['mob'];
$name = $_POST['name'];
}
$command = "python adopt.py $animal $breedname $mob $name";
exec($command);

$command = "python available.py $breedname ";
exec($command,$out);


echo "<font size=5>";
echo "PLEASE CONTACT THE FOLLOWING ORGANIZATIONS:->";
echo "</font>";

echo "<table>";
echo "<tr><th>Breed_Name</th>"." "." <th>Total_Strength</th>"." "." <th>Organization_Name</th>"." "." <th>Organization_Phone</th></tr>";

$i = 0;
$z = 5;
$j = 0;
$k = 0;
$s = "";
#echo $out[0];
$l =  0;
for($l=0;$out[0][$l]!='/';$l++);
#echo $l;

for($k=0;$k<$l-10;$k++){
#echo $out[0][130];
$s = "";
#echo "a";
for(;$out[0][$k]!='|';$k++){
  $s = $s . $out[0][$k];
  }
#echo $s;
$i = 0;
echo "<tr>";
$j = 0;
$z = 6;
for($i = 0;$i< 4;$i++)
{
  $y = '';
  $j = $z + 1;
  for(;$s[$j]!=',';$j++){
    $y = $y.$s[$j];
  }
  $z = $j;
  echo "<td>" . $y . "</td>";
}
echo "</tr>";
$k = $k+2;
}
echo "</table>";


?>

<div class="right">
<a href="page1.html"><img id = "back" src="BACK.png" style="width:10%; height:10%" alt="HOME PAGE"></a>
</div>
</body>
</html>
