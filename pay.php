
<?php
require("data.php");
if(isset($_POST['submit'])){
 $fname=$_REQUEST["firstname"];
 $lname=$_REQUEST["secondname"];
$username=$_REQUEST["username"]; 
$email=$_REQUEST["email"]; 
   $query="INSERT INTO ticket(amaunt,accauntno,telephoneno,date)
    VALUES ('$fname','$lname','$username','$email')";
   if($query){
    header("location:index.php");
     }
}
if(isset($_POST['ret'])){
    $query = "SELECT * FROM passenger";
    $re = mysqli_query($con,$query);
    if($re){
        while($row = mysqli_fetch_array($re)){
    echo   "<br/>".$row["id"]. " ".$row['amaunt']. " ".$row['accauntno']." "
    .$row['telephoneno']. " ".$row['date']. "<br/>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>pay</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    
            <!-- <img src="img3.jpg" alt="" width="80%"height="75%"> -->

 <div class="form"> 
    <form action="" method="post">
     
    <div class="input">
        <label class="detail"><h2>bank accaunt number</h2></label>
        <input type="text" name="firstname" placeholder=""required><br>
        </div>

        <div class="input">
              <label class="detail"><h2>mobile money</h2></label>
        <input type="text" name="secondname" placeholder=""required><br>
        </div>

        <div class="input">  
            <label class="detail"><h2>payment amaunt</h2></label>
        <input type="text" name="username" placeholder=""required><br>
        </div>

        <div class="input">  
            <label class="detail"><h2>date</h2></label>
        <input type="date" name="email" placeholder=""required><br>
    </div>
    <div class="sig"> 
            <input type="submit" value="PAY" name="submit"> 
            <input type="submit" value="retrieve" name="ret"> 
    <!-- <button  onclick="continue"><a href="index.php"><h1>continue</a></h1> -->
         
    </div>
    </form>
</body>
</html>