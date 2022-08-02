<?php
require("data.php");
if(isset($_POST['submit'])){
 $adress=$_REQUEST["email"];
 $name=$_REQUEST["password"];
 $tel=$_REQUEST["tel"];
  $query= "INSERT INTO conductor (adress,name,telnumber) VALUES('$adress','$name',
 '$tel')";
$rs = mysqli_query( $con,$query);

if($rs){
    echo "byamaze kujyamo";
}
else{  
    echo "wrong querry ".mysqli_error($con);

}/**/
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="form"> 
        <form action="" method="post">

            <h2 style="font-family: italic;">HELLO ADMIN;YOU ARE WELCOME</h2> 
                
            <div class="input">
    <label class="detail">adress</label>
    <input type="text" name="email" placeholder=""required>

    <div class="input">
    <label class="detail">name</label>
    <input type="text" name="password" placeholder=""required> 

    <div class="input">
    <label class="detail">telephone number</label>
    <input type="text" name="tel" placeholder=""required> 
    <div>
    <input type="submit" value="Send" name="submit">
           <a href="location.php" onclick=" login"> <h1>login</h1></a>
           <a href="index.html" onclick="login"><h1>logout</h1></a></h3>
             
</div>
</form>
</div>
</body>
</html>