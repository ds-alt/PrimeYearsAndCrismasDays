<?php     
        include_once("dbcon.php");  
        $query = "SELECT * FROM primeyears ORDER BY id desc";
        $sql = mysqli_query($connection, $query);
        ?>
        <div id="purchase_order">
            <table class="table table-bordered">               
                <?php while($row= mysqli_fetch_array($sql)) { ?>                
                <pre><?php echo json_encode($row, JSON_PRETTY_PRINT); ?> </pre>
                <?php } ?>
            </table>
        </div>