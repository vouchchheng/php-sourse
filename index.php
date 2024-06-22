<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operator</title>
</head>
<body>
    <?php
    $a = false;
    $b = true;
    $c = 'hello';
    $d = -100;
    $e = 0;
    $f = 10.4;



    var_dump($a or $b);
    var_dump($a Xor $b and $c);
    var_dump($a or $b and ($d or $a)and $e); 
    var_dump(($a or $b and $c) or $d and ($d) or $e);
    var_dump($f and ($a Xor $f) and $e or $b);
    var_dump($f and ($b Xor $f) and $e or $b);
    var_dump($a Xor $b and $c Xor $f and ($a Xor $f) and $e or $b);
    var_dump($f and ($a Xor $f) or $a Xor $b and $c and $e or $b);






    ?>
    
</body>
</html>