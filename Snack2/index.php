<?php
// ## Snack 2

// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
//  che mail contenga un punto e una chiocciola e che age sia un numero.
//   Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];




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

</head>

<body>
    <div class="container mt-5 ">
        <form action="index.php" method="get">
            <div class="mb-3">

                <input type="text" name="name" id="name" class="form-control" placeholder="nome"
                    aria-describeby="nameHelper">
                <small id="nameHelper" class="text-muted">Just type your name here </small>
            </div>
            <div class="mb-3">

                <input type="text" name="email" id="email" class="form-control" placeholder="email"
                    aria-describeby="emailHelper">
                <small id="emailHelper" class="text-muted">Just type your e-mail here </small>
            </div>
            <div class="mb-3">

                <input type="text" name="age" id="age" class="form-control" placeholder="age"
                    aria-describeby="ageHelper">
                <small id="ageHelper" class="text-muted">Just type your age here </small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

        <?php if (
            strlen($name) > 3 && str_contains($email, ".") == true && str_contains($email, "@") == true &&
            is_numeric($age) == true
        ) { ?>
        <h1>Accesso Riuscito!</h1>

        <?php } else { ?>
        <h1>Accesso Negato</h1>

        <?php } ?>





    </div>

</body>

</html>