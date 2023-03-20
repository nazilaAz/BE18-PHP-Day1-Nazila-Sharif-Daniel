<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style.css">
    <title>PHP-Day1</title>
</head>

<body>
    <?php
    $array = [
        "cartoons" => [
            "Mickey Mouse" => ["created at" => 1928, "created by" => "Walt Disney", "img" => "https://upload.wikimedia.org/wikipedia/en/d/d4/Mickey_Mouse.png"],
            "Scooby-Doo" => ["created at" => 1969, "created by" => "Joe Ruby", "img" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Scooby_doo_logo.png"],
            "Bugs Bunny" => ["created at" => 1983, "created by" => "Ben Hardaway", "img" => "https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Bugs_Bunny.svg/800px-Bugs_Bunny.svg.png"],
            "Tom Cat" => ["created at" => 1940, "created by" => "William Hanna", "img" => "https://upload.wikimedia.org/wikipedia/en/f/f6/Tom_Tom_and_Jerry.png"]
        ],
        "animations" => [
            "Finding Nemo" => ["created at" => 2003, "created by" => "Andrew Stanton", "img" => "https://upload.wikimedia.org/wikipedia/en/2/29/Finding_Nemo.jpg"],
            "Goku" => ["created at" => 1984, "created by" => "Akira Toriyama", "img" => "https://upload.wikimedia.org/wikipedia/en/4/4c/GokumangaToriyama.png"],

        ]
    ];
    $url_micky = $array['cartoons']['Mickey Mouse']['img'];
    $url_Scooby = $array['cartoons']['Scooby-Doo']['img'];
    $url_Bugs = $array['cartoons']['Bugs Bunny']['img'];
    // var_dump($url);
    $url_Nemo=$array['animations']['Finding Nemo']['img'];;
    $url_Goku=$array['animations']['Goku']['img'];;
    ?>



    <div class="containerad text-center">
        <div class="row customrow">
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="<?php echo $url_micky; ?>" height="100" width="100" />

                    <div class="card-body">
                        <h3>
                            <?php
                            echo $array['cartoons']['Mickey Mouse']['created at'];
                            ?>
                        </h3>
                        <p class="card-text">
                            <?php
                            echo $array['cartoons']['Mickey Mouse']['created by'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="<?php echo $url_Scooby; ?>" height="100" width="100" />

                    <div class="card-body">
                        <h3>
                            <?php
                            echo $array['cartoons']['Scooby-Doo']['created at'];
                            ?>
                        </h3>
                        <p class="card-text">
                            <?php
                            echo $array['cartoons']['Scooby-Doo']['created by'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="<?php echo $url_Bugs; ?>" height="100" width="100" />

                    <div class="card-body">
                        <h3>
                            <?php
                            echo $array['cartoons']['Bugs Bunny']['created at'];
                            ?>
                        </h3>
                        <p class="card-text">
                            <?php
                            echo $array['cartoons']['Bugs Bunny']['created by'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********************************************************** -->

        
        <div class="row customrow">
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="<?php echo $url_Nemo; ?>" height="100" width="100" />

                    <div class="card-body">
                        <h3>
                            <?php
                            echo $array['animations']['Finding Nemo']['created at'];
                            ?>
                        </h3>
                        <p class="card-text">
                            <?php
                            echo $array['animations']['Finding Nemo']['created by'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <img src="<?php echo $url_Goku; ?>" height="100" width="100" />

                    <div class="card-body">
                        <h3>
                            <?php
                            echo $array['animations']['Goku']['created at'];
                            ?>
                        </h3>
                        <p class="card-text">
                            <?php
                            echo $array['animations']['Goku']['created by'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>