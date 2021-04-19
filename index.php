<?php
require_once 'connect.php';
$pdo = new \PDO(DSN, USER, PASS);

define("TABLE_PERSON", "Person");
define("TABLE_KINGDOM", "Kingdom");
define("TABLE_ROLE", "Role");

$query =  "SELECT AVG(p.age) AS average FROM " . TABLE_PERSON . " AS p LEFT JOIN " . TABLE_ROLE .  " AS r ON p.role_id = r.id WHERE r.role != 'magicien'";

$statement = $pdo->query($query);
var_dump($statement->fetch());

$statement = $pdo->query($query);
var_dump($statement->fetch(PDO::FETCH_COLUMN));

$statement = $pdo->query($query);
var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

