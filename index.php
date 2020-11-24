<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo6</title>
</head>
<body>
<p>
     <?php
    for ($number = 1; $number <= 100; $number++) {
    if ($number % 3 != 0){
       echo $number. ' Fizz ' ;
}
    elseif ($number % 5 != 0) {
       echo $number. ' Buzz ' ;
}   elseif ($number % 5 == 0 && $number % 3 != 0) {
       echo $number. ' fizzBuzz ' ;
}
else {
    echo $number. ' ';
}
} ?>
</p>
</body>
</html>