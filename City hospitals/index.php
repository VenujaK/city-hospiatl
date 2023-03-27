<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/Style.css">
    <title>Document</title>
</head>

<body>
    <!-- Navbar  -->
    <?php @include('./Components/header.php');
    @include('config.php') ?>
    <!-- Hero Section  -->
    <div class="container overflow-hidden text-center">
        <div class="row gx-5">
            <div class="col">
                <img src="./IMG/Untitled design (60).png" class="img-fluid" alt="...">
            </div>
            <div class="col">
                <div class="p-3 heroTxt ">
                    <p class="herotxt-main"><span>Stay</span> Safe <span>Stay</span> Healthy</p>
                    <p class="herotxt-sub">Empowering People to Improve Their Lives </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section -->
    <div class="container serviceban overflow-hidden text-center bg-primary service-section">
        <div class="row gx-5">
            <div class="col " style=" align-items: center;">
                <div class="p-3  gg">
                    <i class="fa-solid fa-truck-medical"> </i>
                    <p>Ambulance Services</p>
                </div>
                <div class="p-3  ">
                    <i class="fa-sharp fa-solid fa-bell"></i>
                    <p>Emergency Services</p>
                </div>
                <div class="p-3  ">
                    <i class="fa-solid fa-flask-vial"></i>
                    <p>Laboratory Services</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex align-items-end">
                    <img src="./IMG/Untitled design (62).png " class="img-fluid " alt="... ">
                </div>
            </div>
        </div>
    </div>
    <!-- Service cards  -->
    <div class="container svCrd d-flex  text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./IMG/56b69017cce33ea3152e85c5a17d60eb-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ambulance Services</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./IMG/56b69017cce33ea3152e85c5a17d60eb-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emergency Services</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./IMG/56b69017cce33ea3152e85c5a17d60eb-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laboratory Services</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    <?php @include('./Components/footer.php');?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>