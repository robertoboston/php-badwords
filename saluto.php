<?php
$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];
$new_string = str_replace($censura,'* * *',$paragrafo);
echo strlen($new_string)

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
    <p><?php echo $paragrafo?></p>
    <p><?php echo $new_string?></p>
</body>
</html>