<?php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=localhost;dbname=prime_db', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
