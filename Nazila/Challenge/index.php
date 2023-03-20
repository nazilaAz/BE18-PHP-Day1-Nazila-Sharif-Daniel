<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Car Rental</title>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg" style="background-color: #F5F5F5;">
            <!-- <div class="container-fluid"> -->
            <a class="navbar-brand" href="#"><img src="https://img.freepik.com/free-vector/professional-car-rental-logo_23-2149509962.jpg?w=826&t=st=1679320679~exp=1679321279~hmac=de31313d0f455d6323d3a0b7e5917146c496c9e2ec10d12456778a5652b9eef0" alt="Bootstrap" width="120" height="120"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent in Austria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent
                            in Europa
                        </a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </nav>

        <div class="hero">
            <div class="container-fluid">
                <img class="heroImage" src="https://cdn.pixabay.com/photo/2016/03/27/16/24/holidays-1283014_960_720.jpg" alt="travel">
            </div>
            <button type="button" class="btn btn-outline-secondary">Rent a car</button>
        </div>

        <main>
            <?php
            $carArray = [
                "Limousine" => [
                    "Citroën" => ["Model" => "Citroën C3", "price" => 166.39,"availble"=>1,"rentalplace"=>"Wien Westbahnhof","image"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Citro%C3%ABn_C3_PureTech_110_C-Series_%28III%2C_Facelift%29_%E2%80%93_f_16012021.jpg/800px-Citro%C3%ABn_C3_PureTech_110_C-Series_%28III%2C_Facelift%29_%E2%80%93_f_16012021.jpg"],

                    "BMW" => ["Model" => "1er Aut", "price" => 244.27,"availble"=>1,"rentalplace"=>"Wien Westbahnhof","image"=>"https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/630x360/bmw-1er-5d-weiss-2019.png"],


                    "Kia" => ["Model" => "Sportage", "price" => 296.19,"availble"=>1,"rentalplace"=>"Wien Westbahnhof","image"=>"https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/630x360/kia-sportage-5d-rot-2018.png"]
                ],
                "SUV" => [
                    "BMW" => ["Model" => "X5", "price" => 637.62,"availble"=>0,"rentalplace"=>"Wien Westbahnhof","image"=>"https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/630x360/bmw-x5-5d-weiss-2018.png"]
                ]
            ];
            ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $carArray['Limousine']['BMW']['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $carArray['Limousine']['BMW']['Model']; ?></h5>
                            <p class="card-text"><?php echo $carArray['Limousine']['BMW']['price'] ." "."€ / Tag"; ?></p>
                            <a href="#" class="btn btn-primary">Rent now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $carArray['Limousine']['Citroën']['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $carArray['Limousine']['Citroën']['Model']; ?></h5>
                            <p class="card-text"><?php echo $carArray['Limousine']['Citroën']['price'] ." "."€ / Tag"; ?></p>
                            <a href="#" class="btn btn-primary">Rent now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $carArray['Limousine']['Kia']['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $carArray['Limousine']['Kia']['Model']; ?></h5>
                            <p class="card-text"><?php echo $carArray['Limousine']['Kia']['price'] ." "."€ / Tag"; ?></p>
                            <a href="#" class="btn btn-primary">Rent now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $carArray['SUV']['BMW']['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $carArray['SUV']['BMW']['Model']; ?></h5>
                            <p class="card-text"><?php echo $carArray['SUV']['BMW']['price'] ." "."€ / Tag"; ?></p>
                            <a href="#" class="btn btn-primary">Rent now</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>