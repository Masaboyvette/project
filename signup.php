

 
<?php
require("data.php");
if(isset($_POST['submit'])){
 $fname=$_REQUEST["firstname"];
 $lname=$_REQUEST["secondname"];
$username=$_REQUEST["username"]; 
$email=$_REQUEST["email"]; 
$password=$_REQUEST["pass"];
$comfir=$_REQUEST["comfirmpassword"];
 $query = "INSERT INTO passenger(FirstName,LastName,UserName,Email,Password)
  values('$fname','$lname','$username','$email','$password' )";
  if($query){
 header("location:location.php");
  }
}
 if(isset($_POST['ret'])){
    $query = "SELECT * FROM passenger";
    $re = mysqli_query($con,$query);
    if($re){
        while($row=mysqli_fetch_array($re)){
    echo   "<br/>".$row["id"]. " ".$row['FirstName']. " ".$row['LastName']." "
    .$row['UserName']. " ".$row['Email']. " ".$row['Password']."<br/>";
    
        }
    }
}

?>
<html>
     <!DOCTYPE html>
     
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
        <link rel="stylesheet" href="signup.css">
     </head>
      
    <body>
            <div class="form"> 
        <form action="" method="post">
            <div class="detail"> 
          <div class="input">
            <label class="detail"> First Name</label>
            <input type="text" name="firstname" placeholder="first name"required><br>
            </div>
            <div class="input">
                  <label class="detail"> Second Name</label>
            <input type="text" name="secondname" placeholder="second name"required><br>
            </div>
            <div class="input">  <label class="detail"> user name</label>
            <input type="text" name="username" placeholder="user name"required><br>
            </div>
            <div class="input">  
                <label class="detail"> Email Used</label>
            <input type="text" name="email" placeholder="email used"required><br>
        </div>
        <div class="input">
             <label class="detail">password</label>
            <input type="password" name ="pass" placeholder="password"required><br>
        </div>
        <div class="input">  
            <label class="detail">comfirm password</label>
        <input type="password" name="comfirmpassword" placeholder="comfirm password"required><br>
        </div>
        <div > 
            <input type="submit" value="signup" name="submit">
            <!-- <a href="location.php">continue</a></button> -->
            <input type="submit" value="retrieve" name="ret"> 
        </div>  
        </form></div><br>
        
    </body>
</html>