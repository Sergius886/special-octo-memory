<?php

$roles = array();
$link = mysqli_connect("127.0.0.1", "root", "", "base");
   
$query = "SELECT * FROM `user` ";

$role_query = "SELECT * FROM `user_role` ";

if ($result = $link->query($role_query )) {

    while ($row = $result->fetch_row()) {
 $roles[$row[1]]= $row[0] ;

    }

    $result->close();
}

if ($result = $link->query($query)) {
while ($row = $result->fetch_row()) {
  $role = array_search($row[2], $roles); 
  
 echo '<p  >username - ' .$row[1]. '.  role - ' .$role.' </p>';
    }

    $result->close();
}

mysqli_close($link);

?>