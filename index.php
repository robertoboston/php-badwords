<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="./saluto.php" method="POST">
        <input type="text" name="paragrafo" id="paragrafo" placeholder="inserisci qui il tuo paragrafo">
        <input type="text" name="censura" id="censura" placeholder="parola da censurare">
        <button type="submit">Invia</button>
    </form>
</body>
</html>