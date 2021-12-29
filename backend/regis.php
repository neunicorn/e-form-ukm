<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "formtest");
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
$vkey = md5(time().$firstName);

$querry = mysqli_query($conn, "INSERT INTO parts(firstName, lastName, ukm, nim, email, fakultas, prodi, nohp, alasan, vkey)
    VALUES ('$firstName', '$lastName', '$ukm', '$nim', '$email', '$fakultas', '$prodi', '$nohp', '$alasan', '$vkey')");

if($querry){
    $_SESSION['status'] = "Data berhasil di input!";
    header("location: ../form.php?message=Data berhasil di input!");
    $to = $email."@mhs.uinjkt.ac.id";
    $subject = "EMAIL VERIF UIN";
    $message = "<a href='http://localhost/form/verivy.php?vkey=$vkey'>Verify your account</a>";
    $headers = "From: ukmverifikasi@gmail.com \r\n";
    $headers .="MIME-Version: 1.0" . "\r\n";
    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);
}else{
    $_SESSION['status'] = "Data gagal di input!";
    header("location: ../form.php?message=Data gagal di input, silakan cek data diri anda kembali");
}

?>