<?php

     session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Report a stray animal...</title>
  <link type="text/css" rel="stylesheet" href="report.css">
</head>
<body>
<?php if(isset($_POST["Pincode"])): ?>
  <div class="bgimg4"   >
      <h2>Congratulations You Are a Wonderful Citizen</h2>
      <!--<a href="page1.html"><img id = "a" src="ADOPT.png" style="width:50%; height:10%" title="adopt" alt="adopt"></a>-->
  </div>
    <?php

        $_SESSION["Pincode"] = $_POST["Pincode"];


        $breed = "";
        $landmark="";


        if(!isset($_SESSION["Breed"]))

        {
            $breed = "UNKNOWN"."_".$_SESSION["Animal"];

        }
        else
        {
            $breed = $_SESSION["Breed"];
        }



        $mno = $_SESSION["Mobile_Number"];
        $name = $_SESSION["Name"];
        $command = "python citizen.py $mno $name";
        exec($command);


        $mno = $_SESSION["Mobile_Number"];
        $aname = $_POST["Area_Name"];
        $pcode = $_POST["Pincode"];
        $landmark = $_POST["Landmark"];

        $command = "python report.py $mno $breed $aname $pcode $landmark";
        exec($command);

    ?>


<?php elseif(isset($_POST["Animal"])): ?>

      <?php
            $_SESSION["Animal"] = $_POST["Animal"];
            if(isset($_POST["Breed"])){

                $_SESSION["Breed"] = $_POST["Breed"];
                }
      ?>

      <div class ="bgimg3">
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
              Area_Name: <input type = "text" name="Area_Name"><br>
              PinCode: <input type ="text" name ="Pincode"><br><br>
              Landmark: <input type="text" name="Landmark" >
              <br>
              <input type="submit">
          </form>
      </div>
<?php elseif (isset($_POST["Mobile_Number"])): ?>

      <?php
            $_SESSION["Mobile_Number"] = $_POST["Mobile_Number"];
            $_SESSION["Name"] = $_POST["Name"];
      ?>

      <div class = "bgimg2">
          <form action =<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method = "post">
              Animal_Spotted : <input type = "text" name = "Animal">
              <br><br>
              <b>Do you know the Breed too? :</b> <input type ="text" name="Breed" placeholder="unknown">
              <br><br>
              <input type ="submit">
          </form>
      </div>

<?php else: ?>
      <div class="bgimg1" >
          <form action =<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?> method = "post">
              Citizens Name :   <input type = "text" name ="Name"><br>
              Mobile Number : <input type = "text" name = "Mobile_Number"><br><br>
              <input type = "submit">
          </form>
      </div>
<?php endif; ?>
</body>
</html>
