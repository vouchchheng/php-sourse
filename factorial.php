<?php

echo "\t\t>>>>>>>>>>>>CALCULATING FACTOIAL<<<<<<<<<<<<<<<<<<<\n";

$num = readline ("\t\tEnter Number:");
    





for( $i = $num; $i > 0 ; $i-- )

{
    $factorial = $factorial * $i;
}

echo "The factorial of $num is" . $factorial;







?>