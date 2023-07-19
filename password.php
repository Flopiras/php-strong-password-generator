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
</head>

<body>
    <div>
        <h4>Complimenti!</h4>
        <p>La tua password è <strong><?= $_SESSION['password'] ?> </strong></p>
    </div>
</body>

</html>