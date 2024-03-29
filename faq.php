<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>FAQ- UIN Syarif Hidayatullah Jakarta</title>
        <link rel = "icon" href = "./img/LOGO_WEBPAGE.png" >
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

        <section class="bg-primary text-light p-5 text-center">
          <div class="container">
            <h1>FAQ</h1>
            <h4>Frequently Asked Question</h2>
          </div>
        </section>

        <section class="bg-light text-dark p-5">
          <h1 style="margin-bottom: 50px;">Questions</h1>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apakah saya harus menggunakan email dari UIN?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><i>Ya, untuk mendaftarkan diri ke dalam suatu UKM, mahasiswa harus menggunakan email UIN Jakarta (@mhs.uinjkt.ac.id)</i></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Kapan saya mendapatkan konfirmasi diterima dalam suatu UKM?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                  <p>Proses ini hanya sebatas mendaftar ke suatu UKM. Yang nantinya mahasiswa akan di tes untuk masuk kedalam suatu ukm sesuai dengan UKM yang mahasiswa minati atau pilih</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Apakah saya bisa mendaftar lebih dari satu UKM?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                  <p>Mahasiswa bisa mendaftar lebih dari 1 UKM sesuai dengan mahasiswa itu sendiri memiliki keinginan untuk masuk kedalam Ukm mana.</p>
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