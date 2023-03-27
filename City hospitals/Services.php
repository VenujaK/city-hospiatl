<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Services.css">
    <title>Document</title>
</head>

<body>
<?php @include('./Components/header.php');
    @include('config.php') ?> ?>
    <div class="card mb-3" style="padding: 20px; text-align: center;">
        <img src="./IMG/56b69017cce33ea3152e85c5a17d60eb-removebg-preview.png" class="card-img-top mx-auto d-block"
            alt="..." style="width: 50%; height: auto;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card mb-3" style="padding: 20px; text-align: center;">
        <img src="./IMG/56b69017cce33ea3152e85c5a17d60eb-removebg-preview.png" class="card-img-top mx-auto d-block"
            alt="..." style="width: 50%; height: auto;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <?php @include('./Components/footer.php'); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</html>