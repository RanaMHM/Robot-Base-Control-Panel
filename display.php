

<?php

$connection = new mysqli('localhost' ,'root','','robotbase');
if($connection->connect_error){
    die('Connection Faild :' .$connection->connect_error);
}else{
$getdata = "SELECT `Forward`, `Leftt`, `Rightt`, `Backward`, `Stop` FROM `mobilebase` ORDER BY `ID` DESC LIMIT 1";
$getdata = mysqli_query($connection, $getdata);
 
    while ($row = mysqli_fetch_array($getdata)){
    $forward =$row['Forward'];    $left=$row['Leftt'];
    $right=$row['Rightt'];         $backward=['Backward'];
    $stop=$row['Stop'];
    
    if($row['Forward']=="1"){
         echo "<br>" ."Forward";
     }
     if($row['Leftt']=="1"){
        echo  "<br>" ."Left";
    }
    if($row['Rightt']=="1"){
        echo "<br>" ."Right";
    }
    if($row['Backward']=="1"){
        echo "<br>" ."Backward";
    }
    if($row['Stop']=="1"){
        echo "<br>" ."Stop";
    }


}
}

mysqli_close($connection); //close connection
 

?>
