<?php

    // for ($i=1; $i <6 ; $i++) { 

        // echo "hello world <br>";

    // }
    // for ( $i = 1; $i <= 10; $i++){

        // if( $i % 2 == 0){
            // echo "even number $i" <br> ;

        // }
        // 
    // }

    $n1 = readline('n1 :');
    $n2 = readline('n2 :');
    // $start = $n1 > $n2 ? $n2 : $n1;
    // $end = $n1 < $n2 ? $n2 : $n1;
    // for($i = $start; $i <= $end; $i++){
    //     if($i % 2 == 0){
    //         echo $i . " Even \n";
    //     } else {
    //         echo $i . " Odd \n";
    //     }
    // }
    for($i = ($n1 > $n2 ? $n2 : $n1); $i <= ($n1 < $n2 ? $n2 : $n1); $i++){
        if($i % 2 == 0){
            echo $i . " Even \n";
        } else {
            echo $i . " Odd \n";
        }
    }












            
            
            
            
        
        

        


            

            

            
            
            
            
            

            
        
            


            
            





















?>