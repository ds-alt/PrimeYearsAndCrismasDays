<?php

include_once("dbcon.php");  

if(isset($_POST['insertdata']))
{
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];    
      
    $query = "INSERT INTO primeyears (`date_from`,`date_to`) VALUES ('$date_from','$date_to')";
    $query_run = mysqli_query($connection, $query);    

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
    
}  
      
$jsonData = json_encode($query_run, JSON_PRETTY_PRINT);
echo str_replace("\n", "<br>", $jsonData);

?>