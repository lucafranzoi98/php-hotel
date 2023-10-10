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
<body class="bg-dark text-white px-3">

   <h1 class="text-center my-3">Hotels</h1>
   <table class="table">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <?php foreach ($hotels as $hotel) : ?>
               <th scope="col"><?= $hotel["name"] ?></th>
            <?php endforeach ?>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">Description</th>
            <?php foreach ($hotels as $hotel) : ?>
               <td><?= $hotel["description"] ?></td>
            <?php endforeach ?>
         </tr>
         <tr>
            <th scope="row">Parking</th>
            <?php foreach ($hotels as $hotel) : ?>
               <td>
                  <?php if ($hotel["parking"]) {
                        echo "true";
                     } else {
                        echo "false";
                     }?>
               </td>
            <?php endforeach ?>
         </tr>
         <tr>
            <th scope="row">Vote</th>
            <?php foreach ($hotels as $hotel) : ?>
               <td><?= $hotel["vote"] ?></td>
            <?php endforeach ?>
         </tr>
         <tr>
            <th scope="row">Dist</th>
            <?php foreach ($hotels as $hotel) : ?>
               <td><?= $hotel["distance_to_center"] ?> km</td>
            <?php endforeach ?>
         </tr>
   </table>
   
</body>
</html>