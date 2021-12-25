<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $ukm = $_POST['ukm'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $nohp = $_POST['nohp'];
    $alasan = $_POST['alasan'];

    //database connections
    $conn = new mysqli('localhost:3308', 'root', '', 'formukm');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error );
    }else{
        $stmt = $conn->prepare("insert into dataregis(firstName, lastName, ukm, nim, email, fakultas, prodi, nohp, alasan)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $firstName, $lastName, $ukm, $nim, $email, $fakultas, $prodi, $nohp, $alasan);
        $stmt->execute();
        echo "registration success";
        $stmt->close();
        $conn->close();
    }
?>