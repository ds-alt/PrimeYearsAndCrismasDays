<?php
// $connection = mysqli_connect("localhost","root","");
// $db = mysqli_select_db($connection, 'prime_db');
include_once("dbcon.php");  

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['id'];        
        $date_from = $_POST['date_from'];
        $date_to = $_POST['date_to'];
                
        $query = "UPDATE primeyears SET date_from ='date_from', date_to ='date_to' WHERE id ='$id'";        
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>