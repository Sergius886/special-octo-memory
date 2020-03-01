<?php

$link = mysqli_connect("127.0.0.1", "root", "", "base");
   
$query = "SELECT * FROM `user_role` ";

if ($result = $link->query($query)) {

    while ($row = $result->fetch_row()) {
        
 echo '<option value=' . $row[0]. ' >' . $row[1]. '</option>';
    }

    $result->close();
}

mysqli_close($link);


?>