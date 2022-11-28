<?php
// ## Snack 1

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
//  Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//  Stampiamo a schermo tutte le partite con questo schema.

// Olimpia Milano - Cantù | 55-60

$partite = [
    ["Olimpia Milano", "Cantù", "55-60"],
    ["Armani Comio", "Caruso Team", "45-80"],
    ["Ginnastica Roma", "Virtus Bologna", "100-80"],
    ["Pall. Treviso", "Mens Sana Siena", "120-35"]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    .red {
        color: red;
    }

    .green {
        color: green;
    }
    </style>
</head>

<body>
    <div class="container">

        <?php foreach ($partite as $partita) { ?>

        <h1> <?= $partita[0] ?> - <?= $partita[1] ?> | <?= $partita[2] ?> </h1>

        <?php } ?>
    </div>

</body>

</html>