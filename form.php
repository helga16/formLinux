<?php
if(isset($_POST['email']) and isset($_POST['login'])){
  try{
  $email=$_POST['email'];
  $login = $_POST['login'];
  $host='localhost';
$dbName = 'test';
$pass = '';
$login = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbName;charset=$charset";
$pdo = new PDO($dsn, $login,$pass);

  $stmt=$pdo->prepare('INSERT INTO people (login,email, address,Full_name, city, state, code) values(?, ?, ?,?,?,?,?)');
  $stmt->execute(array($login, $email, $_POST['Address'], $_POST['Full_name'],$_POST['city'],$_POST['state'],$_POST['code']));
}
 catch (PDOException $e) {
  exit ('Error connecting to database: ' . $e->getMessage());
 }
}

?>
