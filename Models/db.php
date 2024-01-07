<?php
function getConnection(){
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web technology";
    $conn = new mysqli($servername, $username, $password, $dbname);

    return $conn;
}
    ?>
