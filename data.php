<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />    
</head>
<body>
    <br />
    <br />    
    <div class="container">    
    <a class="btn btn-primary" href="index.php" role="button">Home</a>
    <a class="btn btn-danger" href="prime.php" role="button">CalculatePrimeYear</a>
    <a class="btn btn-info" href="json.php" role="button">JsonFormat</a> 
    <a class="btn btn-success" href="calendar.php" role="button">Calendar</a>     
    
        <?php     
        include_once("dbcon.php");  
        $query = "SELECT * FROM primeyears ORDER BY id desc";                       
        $sql = mysqli_query($connection, $query);
        ?>            
            <div id="purchase_order">
            <br />
                <table class="table table-bordered">
                <tr>
                <th width="100">ID</th>
                <th>YEAR FROM</th>
                <th>YEAR TO</th>
                <th>PRIME YEARS</th>
                </tr>
            <?php while($row= mysqli_fetch_array($sql)) { ?>
                <tr>
                <td><?php echo $row["id"] ; ?></td>
                <td><?php echo $n1 = $row["date_from"];?></td>
                <td><?php echo $n2 = $row["date_to"]; ?></td>
                <td><?php 
                for($i=$n1;$i<=$n2;$i++)
                {
                if($i==2 || $i==3 || $i==5 || $i==7){             
                    echo " " . $i;                            
                }
                elseif(($i%2) != 0 && ($i%3) !=0 && ($i%5) !=0 && ($i%7) !=0){  
                    echo " " . $i;               
                }
                else              
                    continue;
                } ?>
                            
                </tr>                
                
            <?php } ?>             
                </table>                                
            </div>
    </div>
</body>

</html>