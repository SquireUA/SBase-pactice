<?php
    function show($answer, $name){
  	    $host="localhost"; //Add your SQL Server host here
        $user="root"; //SQL Username
        $pass=""; //SQL Password
        $dbname="LuxShop"; //SQL Database Name
        $con=mysqli_connect($host,$user,$pass,$dbname);
        if (mysqli_connect_errno($con))
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result = mysqli_query($con,"SELECT ID,Name,Massege,datatime,Answer FROM GuestBook");
        while($row = mysqli_fetch_array($result))
        { 
            if($row['Answer'] == $answer || $row['Answer'] == $answer){
                ?>
                <div class="comment">
                  <button class="answer" onclick="Answer(<?php echo $row['ID']?>)"></button>
                  <?php
                  if($answer != null){
                  ?>
                    <img class="ans" src="image/answer2.png" width="90px" height="90px">
                    <?php
                  }
                  ?>
                  <img class="ava" src="image/log.png" height="50px" width="50px">
                  <p class="name"><?php echo $row['Name']; ?></p>
                  <p class="time"><?php echo $row['datatime']; ?><?php 
                  if($answer != null){
                  	echo (' to: ');
                  	echo $name; 
                  } ?></p>
                  <p class="mess"><?php echo $row['Massege']; ?></p>
                </div>
                <?php
                show($row['ID'], $row['Name']);  
            } 
        } 
        mysqli_close($con);
    }   
?>