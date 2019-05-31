<html>
<head><title>Availability</title>
  <link type="text/css" rel="stylesheet" href="donate2.css">

</head>

<body background="DONATE2.jpg"  text="black" font size="6">

<?php

if(isset($_POST['submt']))
{

$mob = $_POST['mob'];
$animal = $_POST['animal'];
$breedname = $_POST['breedname'];
$total = $_POST['total'];
$name = $_POST['Name'];
}

$command = "python donate.py $mob $breedname $total";
exec($command);

echo "<h1> Your Response has been taken,Thankyou...</h1>";

?>
<div class="right">
<a href="page1.html"><img id = "back" src="BACK.png" style="width:10%; height:10%" alt="HOME PAGE"></a>
</div>
</body>
</html>
