<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Hotel</title>
</head>
<body class="bg-dark text-white">

   <h1 class="text-center my-3">Hotels</h1>
   <div class="row row-cols-5 mx-4">

   <?php foreach ($hotels as $hotel) : ?>
      <div class="col">
         <div class="card h-100">
            <div class="card-body">
               <h5 class="card-title"><?= $hotel["name"] ?></h5>
               <p class="card-text"><?= $hotel["description"] ?></p>
               <p class="card-text">Parking:
                  <?php if ($hotel["parking"] != true) {
                     echo "NOT";
                  }?>
                  avaiable
               </p>
               <p class="card-text">Vote: <?= $hotel["vote"] ?></p>
               <p class="card-text">Distance to center: <?= $hotel["distance_to_center"] ?> chilometers</p>
            </div>
         </div>
      </div>
   <?php endforeach ?>

   </div>
   
</body>
</html>