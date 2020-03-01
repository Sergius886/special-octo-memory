<?php
$username = $_POST['username'];
$role_id = $_POST['role_id'];

$link = mysqli_connect("127.0.0.1", "root", "", "base");

$query = "SELECT * FROM `user_role` ";

$stmt = $link->prepare("INSERT INTO `user`( `username`, `role_id`) VALUES (?,? )");
$stmt->bind_param('ss',$username, $role_id );
$stmt->execute();
mysqli_close($link);
?>
<?php require 'fetch_users.php'; 
?>