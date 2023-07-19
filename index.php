<?php
// array di carattery disponibili per creare una password
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

// funzione per generare password
function randomPassword($length, $characters)
{
    // mescolo i caratteri all'interno della stringa
    $shuffled_characters = str_shuffle($characters);

    // trasformo la stringa mescolata in un array
    $shuffled_characters = str_split($shuffled_characters);
}

// var_dump($characters)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container my-4">
        <!-- form -->
        <form action="index.php">
            <div class="mb-3 d-flex ">
                <label for="length" class="form-label">Quanto deve essere lunga la tua password?</label>
                <input type="number" name="length" class="form-control ms-4" id="length" min="1" max="10" style="width: 100px;">
            </div>

            <button type="submit" class="btn btn-primary">Genera password</button>

        </form>
    </div>
</body>

</html>