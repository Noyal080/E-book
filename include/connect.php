<?php
    $host = "localhost";
    $username = "root";
    $pasw = "";
    $dbname = "admindb";

    $conn = mysqli_connect($host,$username,$pasw,$dbname);
    if(mysqli_connect_error())
{
    echo "Cannot connect";
}

?>