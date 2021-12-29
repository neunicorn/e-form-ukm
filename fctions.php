<?php
$conn = mysqli_connect("localhost","root","","formtest");

function querys($queryz){
    global $conn;
    $result = mysqli_query($conn, $queryz);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>