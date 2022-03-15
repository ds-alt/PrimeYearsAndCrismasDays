<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    
    <title>PrimeYears</title>
  </head>
  <body> 
  <div class="container">
        <h2>PrimeYears Calculator</h2>        
        <form method="POST">
            <label for="fnum" class="form-label">Enter Start Year</label>
            <input type="number" name="fnum" class="form-control" min="1980" max="2099" step="1">
            
            <br>
            <label for="snum" class="form-label">Enter Ending Year</label>
            <input type="number" name="snum" class="form-control" min="1980" max="2099" step="1">           
            
            <br>
            <input type="submit" name="submit" value="Calculate" class="btn btn-info">
            <a class="btn btn-primary" href="data.php" role="button">Back</a>
        </form>
        <br>           
        <h4>Result : </h4>        
        <?php                            
            if(isset($_POST['submit'])){                  
            $n1=$_POST['fnum'];
            $n2=$_POST['snum'];
                       
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
            }
            echo "<p style='color:black;'> are ptrime number between $n1 and $n2 ."; 
          }
        ?>        
        </div>
        
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
  </body>
</html>