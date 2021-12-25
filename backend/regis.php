<?php

$conn = mysqli_connect('localhost:3308', 'root', '', 'formukm');
if(!$conn){
    die('gagal connect' .$conn->connect_error());
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$ukm = $_POST['ukm'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];
$alasan = $_POST['alasan'];

$querry = mysqli_query($conn, "INSERT INTO dataregis(firstName, lastName, ukm, nim, email, fakultas, prodi, nohp, alasan)
    VALUES ('$firstName', '$lastName', '$ukm', '$nim', '$email', '$fakultas', '$prodi', '$nohp', '$alasan')");

if($querry){
    header("location: ../index.html?message=berhasil");
}else{
    header("location: ../index.html?message=gagal");
}

?>