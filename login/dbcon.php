<?php

$sname= "localhost";

$unmae= "pratosh";

$password = "test1234";

$db_name = "test1";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>