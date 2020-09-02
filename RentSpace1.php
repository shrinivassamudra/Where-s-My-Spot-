<?php
    print "<html><body>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = mysqli_connect($servername, $username, $password, $dbname);
      if(isset($_POST['name']))
      {
        $nme = $_POST['name'];
        $ad1 = $_POST['add1'];
        $ad2 = $_POST['add2'];
        $eml = $_POST['email'];
        if($nme != "" && $ad1 != "")
        {
        $query = "INSERT INTO info VALUES ('$nme', '$ad1', '$ad2', '$eml')";
        $result = mysqli_query($conn,$query);
        echo "Space Saved Successfully";
        }
        else
         echo "One or More fields is empty";
      }
     mysqli_close($conn);
print "<a href='RentSpace.php'>Back</a>";
print "</body></html>";
?>


 
