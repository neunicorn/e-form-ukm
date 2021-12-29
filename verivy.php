<?php
if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];
    $conn = NEW MySQLi('localhost','root','','formukm');
    $resultSet = $conn->query("SELECT verified,vkey FROM dataregis WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");
    if($resultSet->num_rows == 1){
        $update = $conn->query("UPDATE dataregis SET verified=1 WHERE vkey='$vkey' LIMIT 1");
        if($update){
            echo"account verified";
        }
        else{
            echo $conn->error;
        }
    }
    else{
        echo "account unavailable";
    }
}else{
    die("something wentwrong");
}