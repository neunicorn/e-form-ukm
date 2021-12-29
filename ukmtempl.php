<?php
require 'fctions.php';
$id = $_GET["id"];
$ukms = querys("SELECT * FROM ukms");
$spec = querys("SELECT * FROM ukms WHERE id=$id");
$imgurs = querys("SELECT image FROM ukmimg WHERE imgid = $id");
$isfirst = true;
?>


<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FLAT</title>
    <link rel = "icon" href = "./img/LOGO_WEBPAGE.png" >
    
    <style>
      #rcorners1 {
        border-radius: 25px;
        background: #4a8eff;
        padding: 20px;
        color: aliceblue;
        text-align: justify;
      }

      .carousel-item{
        height:19rem;
      }

      .carousel-control-next,
      .carousel-control-prev /*, .carousel-indicators */ {
        filter: invert(100%);
      }

            
      @media (max-width:600px)  {
        #rcorners1{
          margin:5px;
        }
      }

      #contactinfo{
        margin:20px;
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


        <section class="bg-light text-dark text-sm-end p-5">
            <div class="container-fluid">
                <div class="d-md-flex">
                    <div class="container">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <?php foreach($imgurs as $rows2): ?>
                              <?php if($isfirst): ?>
                                  <div class="carousel-item active">
                                    <img src="<?php echo $rows2['image'] ?>" class="d-block w-100" alt="...">
                                  </div>
                                  <?php  $isfirst = false; continue;?>
                              <?php endif;?>
                              <div class="carousel-item">
                                <img src="<?php echo $rows2['image']?>" class="d-block w-100" alt="...">
                              </div>
                            <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>

                    <div id="rcorners1">
                        <h1 style="margin-bottom: 20px;"><?php echo $spec[0]["ukmname"]; ?></h1>
                        <p>
                          <?php echo $spec[0]["descripts"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-dark text-light p-5 text-center">
          <div>
            <img style="width:6%;" src="./img/cp.png"/>
          </div>
          <div id="contactinfo">
                <h3>Contact Us!</h3>
                <h4>Contact Person: <?php echo $spec[0]["cperson"]; ?></h4>
                <h4>Alamat: <?php echo $spec[0]["alamat"]; ?></h4>
          </div>
      </section> 

      <footer id="footer" class="p-5 bg-secondary text-light text-center">
          <div class="container">
              <p class="lead"> UKM UIN JAKARTA 2021</p>
          </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
