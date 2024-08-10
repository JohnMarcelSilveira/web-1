<?php

$con = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

$sth = $con->prepare('select * from usuarios where email = :email');

$sth->bindvalue(':email', 'profcleberfonseca@gmail.com');

$sth->execute();

$result = $sth->fetchAll();

#echo json_encode($result);

foreach ($result as $row) {
   print_r($row);
}

?>