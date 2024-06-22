<?php

// Displaying numbers with hyphens:
    echo "----------------------------------------------------------------------\n";
    echo "\tDisplaying numbers with hyphens:                                    \n";
    echo "----------------------------------------------------------------------\n";

for ($i = 1; $i <= 10; $i++) {   
    if ($i == 1) {
        echo "\t" . $i; 
    } else {
        echo "-" . $i; 
    }
}

echo "\n\n"; 

// Adding integers between 0 and 30:
echo "-------------------------------------------------------------------------\n";
echo "\tCreate a script using a for loop to display :                          \n";
echo "-------------------------------------------------------------------------\n";

$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i; 
}

echo "\tThe total sum of integers between 0 and 30 is: " . $total;

echo "\n";

// Create a script to construct the following pattern, using nested for loop:
    echo "\n"; 

echo "----------------------------------------------------------------------------\n";
echo "\tCreate a script to construct the following pattern:\n";
echo "----------------------------------------------------------------------------\n";

    

for($i = 1 ; $i <= 5; $i++){
    echo "\t";
    for($j = $i; $j >= 1; $j--){
        
       echo "*"; 
    }
   
    echo "\n";
    
}
// 4 . Write a program to calculate and print the factorial of a number using a for loop. 
// The factorial of a number is the product of all integers up to and including that number,
//  so the factorial of 4 is 4*3*2*1= 24.
echo "-------------------------------------------------------------------------------------------------\n";
echo "\t Write a program to calculate and print the factorial of a number using a for loop:      \n";
echo "-------------------------------------------------------------------------------------------------\n";

    $n =  readline ( "Input number :");
    echo "\n";
    
    $factorial = 1;
    $equation = "";
    for ($i = $n; $i >= 1; $i--) {
        $factorial *= $i;
        $equation .= $i == 1 ? "$i" : "$i*";
    }
    echo "The factorial of $n  = $equation = $factorial";
    echo "\n";

    ////////////////////////////////////////////////////////////////////////////////////////

    echo "----------------------------------------------------------------------------\n";
    echo "\tCreate a script to construct the following pattern:\n";
    echo "----------------------------------------------------------------------------\n";

    for($i = 1 ; $i <= 5; $i++){
        echo "\t";
        for($j = $i; $j >= 1; $j--){

           echo "*"; 
        }
    
        echo "\n";

    }
    for($i = 5 ; $i >= 1; $i--){
        echo "\t";
        for($j = $i; $j >= 1; $j--){
            echo '*';
        }
        echo "\n";
    
    }

?>
