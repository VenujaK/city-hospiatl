<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Oswald', sans-serif;
    font-weight: normal;
}

:root {
    --main-color: #1289EA;
    --text-color: #ffffff;
}

body {
    background-size: contain;
    background-attachment: local;
}

html::-webkit-scrollbar {
    width: 6px;
}

html::-webkit-scrollbar-track {
    background: transparent;
}

html::-webkit-scrollbar-thumb {
    background: var(--main-color);
}

.navhspan {
    font-weight: 600;
    color: var(--main-color);
}

.navbar-brand {
    font-weight: 600;
    margin-left: 10px;
}

</style>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="navhspan">City</span> Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services.php">Laboratory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./ContactUs.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
