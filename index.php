<?php
require_once 'connect.php';
$pdo = new \PDO(DSN, USER, PASS);

define("TABLE_PERSON", "Person");
define("TABLE_KINGDOM", "Kingdom");
define("TABLE_ROLE", "Role");

//write query here
$query =  "";

$statement = $pdo->query($query);
var_dump($statement->fetch());

$statement = $pdo->query($query);
var_dump($statement->fetch(PDO::FETCH_COLUMN));

$statement = $pdo->query($query);
var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

