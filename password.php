<?php
include_once __DIR__ . '/functions/functions.php';

//sessione aperta
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container my-4">
        <h4 class="text-success">Complimenti!</h4>
        <p>La tua password è <strong><?= $_SESSION['password'] ?> </strong></p>
    </div>
</body>

</html>