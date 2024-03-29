<?php
require 'fctions.php';
$ukms = querys("SELECT * FROM ukms")
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Home- UIN Syarif Hidayatullah Jakarta</title>
        <link rel = "icon" href = "./img/LOGO_WEBPAGE.png" >

        <style>
            .pdr{
                background-image: url("./img/bg-uin.jpg");
                position: relative;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
                width: 100%;
                top:0;
                left: 0;
                margin: 0;
                padding: 18%;
                background-color: rgb(0,0,0); 
                background-color: rgba(0,0,0, 0.8);
                /* filter: blur(3px);
                -webkit-filter: blur(3px); */
            }
            .pdr h1{
                text-align: center;
                color: white;

            
            }
            .bg-text {
                /*background-color: rgb(0,0,0); /* Fallback color */
                /*background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bolder;
                /* border: 3px solid #f1f1f1; */
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 20px;
                text-align: center;
            }

            .bg-text h1{
                font-weight: bold;
                font-size: 50px;
                text-shadow: 2px 2px 4px #000000;
            }

            .carousel-item{
                height:18rem;
            }

            .text1{
                color:#4a8eff;
            }
        </style>
    </head>
    <body>
        <nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo_uin.png" alt="" height="30" class="d-inline-block align-text-top">
                <b style="color: #4a8eff;">UINJKT</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        UKM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach($ukms as $row): ?>
                            <li><a class="dropdown-item" href="ukmtempl.php?id=<?= $row["id"]; ?>"><?php echo $row["ukmname"] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="form.php">Regis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                </ul>
              </div>
        </nav>

        <div class="pdr">
            <div class="bg-text">
                <h1>Welcome to<br/> UIN Jakarta UKM Centre!</h1>
            </div>
        </div>
        
        <section class="bg-dark text-light text-center text-sm-start p-5">
            <div class="container">
                <div class="d-md-flex">
                    <div class="container text1 gx-2">
                        <h1>UKM UIN JAKARTA</h1>
                        <p>Dalam rangka menunjang pembinaan mahasiswa yang berdasarkan program Tridharma Perguruan Tinggi, UIN Syarif Hidayatullah Jakarta memfasilitasi mahasiswa untuk membentuk student government. Student government terdiri atas lembaga-lembaga kemahasiswaan tingkat Universitas, Fakultas, dan Jurusan/Program Studi di lingkungan UIN Syarif Hidayatullah Jakarta. Selain itu terdapat pula Unit-unit Kegiatan Mahasiswa (UKM) yang bergerak dalam satu bidang tertentu.</p>
                        <a class="btn btn-primary" href="form.php" role="button">Daftar sekarang</a>
                    </div>

                    <div class=container>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/highres.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/uinfront.jpg" class="d-block w-100" alt="...">
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="p-5 bg-secondary text-light text-center">
            <div class="container">
                <p class="lead"> UKM UIN JAKARTA 2021</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
