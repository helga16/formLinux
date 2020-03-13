<?php
if(isset($_POST['email']) and isset($_POST['login'])){
  try{
  
  $host='localhost';
$dbName = 'test';
$pass = '';
$user = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbName;charset=$charset";
$pdo = new PDO($dsn, $user,$pass);

  $stmt=$pdo->prepare('INSERT INTO people (login,email, address,Full_name, city, state, code) values(?, ?, ?,?,?,?,?)');
  $stmt->execute(array($_POST['login'], $_POST['email'], $_POST['Address'], $_POST['Full_name'],$_POST['city'],$_POST['state'],$_POST['code']));
}
 catch (PDOException $e) {
  exit ('Error connecting to database: ' . $e->getMessage());
 }
}

?>
