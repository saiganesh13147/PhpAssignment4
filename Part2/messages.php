<?php
require('mysqli_oop_connect.php');

$q = "select * from Messages";

$r = $mysqli->query($q);

while($row = $r->fetch_assoc() ) {

    echo "<div><p>Message: {$row["message"]} Username: {$row["username"]}</p><br></div>";
    

}


?>