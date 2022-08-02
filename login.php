<?php
require("data.php");
if(isset($_POST['submit'])){
 $email=$_REQUEST["email"];
 $password=$_REQUEST["password"];
   $query= "INSERT INTO Passenger (Email,Password) VALUES('$email','$password')";
    $select= "SELECT * FROM passenger WHERE (Email = '$email'  && Password ='$password')";

    $result = mysqli_query($con, $select );
    if($result){
        header("location:location.php");
         }
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    }
    else{
        echo "first signup";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">

</head>
<body>
    <form action="" method="post">

   
    <div class="input">
    <label class="detail">email</label>
    <input type="text" name="email" placeholder=""required>
    </div>

    <div class="input">
    <label class="detail">password</label>
    <input type="password" name="password" placeholder="password"required></div>
    </div>
    <div class="sig"> 
            <input type="submit" value="Send" name="submit">
            <!-- <button  onclick="continue"><a href="location.php">continue</a> -->
</div>
<!--     
    <button  onclick="LOGIN"><a href="location.php"><h1>LOGIN</h1></a></button>
      <button  onclick="LOGIN"><a href="location.php">continue</a>
      </button> -->
 </form>

</body>
</html>