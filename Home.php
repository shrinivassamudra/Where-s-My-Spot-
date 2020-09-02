<?php
    print "<html><body>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
      if(isset($_POST['name']))
      {
        $nme = $_POST['name'];
        $eml = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        if($pass1!=$pass2)
        {
          echo "Passwords are not Matching";
        }
	     else if($nme != "" && $pass1 != "")
        {
        $query = "INSERT INTO info1 VALUES ('$nme', '$eml', '$pass1', '$pass2')";
        $result = mysqli_query($conn,$query);
        $_SESSION['name']=$nme;
        }
        else
         echo "One or More fields is empty";
      }
mysqli_close($conn);
print "<a href='SignUp.php'>Logout</a>";
print "</body></html>";
?>


 
