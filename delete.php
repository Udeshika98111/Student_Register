<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

$servername="localhost";
$username="root";
$password="";
$database="myschool";

//create connection
$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM student WHERE id=$id";
$connection->query($sql);

}
header("location: /myschool/index.php");
exit;

?>