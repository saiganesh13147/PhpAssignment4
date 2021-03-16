<?php
require('mysqli_oop_connect.php');

$q = "select * from Messages";

$r = $mysqli->query($q);

while($row = $r->fetch_assoc() ) {

    echo "<div><p>{$row["message"]}</p><br></div>";
    echo "<div><p>{$row["username"]}</p><br></div>";

}


?>