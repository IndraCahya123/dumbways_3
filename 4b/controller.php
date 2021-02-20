<?php

$host = 'localhost';
$username = 'root';
$password = "";
$db = 'otomotif';

$conn = mysqli_connect($host, $username, $password, $db, 3306);

function lihatData($query)
{
    global $conn;

    $data = mysqli_query($conn, $query);
    
    $rows = [];

    if($data === null){
        return $rows;
    }else{    
        while($row = mysqli_fetch_assoc($data)){
            $rows[] = $row;
        }
        return $rows;
    }
}