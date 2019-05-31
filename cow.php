<html>
<head>
  <title>
    Choose your cow breedname</title>
  <link type="text/css" rel="stylesheet" href="breed.css">
</head>
<body background="COWCOL.jpg">
<?php

$breed = 'COW';

$command = "python try.py $breed";
exec($command,$out);
$i = 0;
$j = 0;
$z = 0;
echo "<table>";
echo "<tr><th>SELECT YOUR COW BREED</th></tr>";
$j = 0;
for($i = 0;$i< 191;$i++)
{
  $y = ' ';
  $j = $z + 1;
  for(;$out[0][$j]!=',';$j++){
    $y = $y.$out[0][$j];
  }
  $z = $j;
  echo "<tr>";
  echo "<td>" . $y. "</td>";
  echo "</tr>";
}
echo "</table>";


?>



<form action="adoptres.php" method="post" font-size= 80px>
  <font size= 15px color="black">Breed name:</font><br>
   <input type="text" name="breedname"><br>
  <font size=15px color="black">Your name:</font><br>
   <input type="text" name="name"><br>
  <font size=15px color="black">Your mobile number:</font><br>
   <input type="text" name="mob">
   <input type="submit" name= "submt" value="Submit">
</form>
</body>
</html>
