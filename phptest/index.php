<?php
include './func.php';
include './months.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
    $total = 0;
    echo 'enter numbrs 1 to 1000';
    for ($num=0; $num<=1000; $num++){

        if($num%3 === 0){
            //echo $num .'<br>';
            simple_num($num);
            $total += $num;
        }
    }
    echo 'total '.$total;          
    ?>
</body>
</html>