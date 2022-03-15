<?php

$connect = new PDO('mysql:host=localhost;dbname=prime_db', 'root', '');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
} 

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>" . $jsonData . "</pre>";

// echo str_replace("\n", "<br>", $jsonData);

?>
