<?php

require "connection.php";

function testPush($name1, $comment) {
    $conn = openDatabase();
    $query = "INSERT INTO bha (`name`, comment) VALUES (:name1, :comment);";
    $result = $conn->prepare($query);
    $result->bindParam(":name1", $name1);
    $result->bindParam(":comment", $comment);
    $result->execute();
}

testPush("1", "piet");


?>