<?php
$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];
$new_string = str_replace($censura,'* * *',$paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>la lunghezza del paragrafo è di <?php echo strlen($paragrafo)?></p>
    <h3><?php echo $paragrafo?></h3>
    <p>La lunghezza del paragrafo censurato è di <?php echo strlen($new_string)?> parole</p>
    <h3><?php echo $new_string?></h3>
</body>
</html>