<?php
require("data.php");
if(isset($_POST['submit'])){
 $start=$_POST["loc"];
 $destin=$_POST["des"];
$time=$_POST["time"]; 
$date=$_POST["date"]; 
  $query =mysqli_query($con,"INSERT INTO bus(ahuva,ahujya,amasaha,itariki) VALUES('$start','$destin','$time','$date')");
 if($query){
  header ("location:price.php");
}
}
if(isset($_POST['ret'])){
    $query = "SELECT * FROM bus";
    $re = mysqli_query($con,$query);
    if($re){
        while($row = mysqli_fetch_array($re)){
    echo   "<br/>".$row["id"]. " ".$row['ahuva']. " ".$row['ahujya']." "
    .$row['amasaha']. " ".$row['itariki']. "<br/>";
        }
    }
}

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location</title>
 
    <link rel="stylesheet" href="signup.css">
 </head>
 <body>   
 <div class="form">
          <form action="#" method= "post">
            <div class="detail"> 
                <div class="input"> 
                <div class="input"> 
                        <label class="detail"> start/ahuva</label> 
                        <input type="text" name="loc" required >   
                    </div> 
        <div class="input"> 
                        <label class="detail"> destination/aho ujya</label> 
                        <input type="text" name="des" required>   
                    </div>
                 <div class="input"> 
                 <div class="input"> 
                        <label class="detail"> enter ticket hour</label> 
                        <input type="varchar" name="time"  required>   
                    </div>
             
                <div class="input"> 
                        <label class="detail"> choose ticket date</label> 
                        <input type="date" name="date"  required>   
                    </div>
                    <div class="sig"> 
            <input type="submit" value="Send" name="submit">
            <input type="submit" value="retrieve" name="ret">
            <!-- <button  onclick="continue"><a href="price.php">continue</a> -->
</div>
</div> 
</body>
</html>