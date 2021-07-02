<?php

$connection = new mysqli('localhost' ,'root','','robotbase');
if($connection->connect_error){
    die('Connection Faild :' .$connection->connect_error);
}else{
 
 
if(isset($_POST['Forward']) ){  
   
   $sql= "INSERT INTO `mobilebase`(`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`,`ID`) VALUES ('1','','','','','')";

    if (mysqli_query($connection, $sql)) {
      echo "The data sent successfuly" . "<br>";
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
      }
      
    }
    if(isset($_POST['left']) ){  
   
        $sql= "INSERT INTO `mobilebase`(`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`,`ID`) VALUES ('','1','','','','')";
     
         if (mysqli_query($connection, $sql)) {
           echo "The data sent successfuly" . "<br>";
           } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
           }
           
         }
         if(isset($_POST['right']) ){  
            
            $sql= "INSERT INTO `mobilebase`(`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`,`ID`) VALUES ('','','1','','','')";
         
             if (mysqli_query($connection, $sql)) {
               echo "The data sent successfuly" . "<br>";
               } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
               }
               
             }
             if(isset($_POST['backward']) ){  
   
                $sql= "INSERT INTO `mobilebase`(`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`,`ID`) VALUES ('','','','1','','')";
             
                 if (mysqli_query($connection, $sql)) {
                   echo "The data sent successfuly" . "<br>";
                   } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
                   }
                   
                 }
                 if(isset($_POST['stop']) ){  
                   
                    $sql= "INSERT INTO `mobilebase`(`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`,`ID`) VALUES ('','','','','1','')";
                 
                   
                     if (mysqli_query($connection, $sql)) {
                       echo "The data sent successfuly" . "<br>";
                       } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
                       }
                       
                     }
                     header("Location: http://localhost/RobotBase/index.html");
                        exit();
}
mysqli_close($connection); //close connection
?>