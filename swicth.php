<?php

$con = 3;

switch($con){
    case 1:
        echo "satu";
        break;
    case 2:
        echo "dua";
        break;
    case 3:
        echo "tida";
        break;
    default:
    echo "error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan PHP</title>
</head>
<body>
    <h1><?php echo $con ?></h1>
</body>
</html>