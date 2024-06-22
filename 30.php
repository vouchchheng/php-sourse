<?php

// $arr = ['fruit' => 'kiwi', 'food'=> 'noodle'];
// 
// find key array 
// 
// echo array_key_exists('food', $arr);

// -----------------------------------------

// >>>>>>>>>>>>array_pop : to remove the last index of array<<<<<<<<<<<<<<<<
// 
// $arr = [ 'greentea', 2, 'ice-mocha', 3, 'chocolate-frape', 4];
// 
// var_dump (array_pop($arr));
// var_dump ($arr);

// ---------------------------------------------------
// >>>>>>>>>>>>array_push : to add one or more index to array  <<<<<<<<<<<<<<<<

// $arr = [ 'greentea', 2, 'ice-mocha', 3, 'chocolate-frape', 4];
// 
// var_dump (array_push($arr, 'latte', 5));
// var_dump ($arr);

// ---------------------------------------------------

// >>>>>>>>>>>>>>>>>>practice more at home!!!!!!!!!!!!!!!!!!!!


// --------------PRACTICE--------------------


    $lists = [];

    function clearConsole(){

        if (strtoupper(substr(PHP_OS, 0, 3))=== 'WIN'){
            system('cls');
        } else{
            system ('clear');
        }

    }
    
    function display_crud_operation(){
        
        echo "\t ---------------------------------------------\n";
        echo "\t\t          CRUD                              \n";
        echo "\t ---------------------------------------------\n";
        echo "\t     > press l for list items                 \n";
        echo "\t     > press c for create items               \n";
        echo "\t     > press e for update and edit items      \n";
        echo "\t     > press d for delete items               \n";
        echo "\t     > press x for exits program.             \n";
        echo "\t ---------------------------------------------\n";
    }

    function listItems(){
        echo "\t>>>>>>>>>>>>>List of Items<<<<<<<<<<<<<<<<\n";
        foreach ( $items as $index => $item ){
            echo "\n";
        }

        
    }
    display_crud_operation();

    while (true){
        echo "\t    ";
        $press_input =  readline ( ' Input item : ' );

        if( $press_input == 'x' ){
            clearConsole();
            echo "\n \t     Exit program....\n";
            break;
        } 
        
        else if ( $press_input == 'l' ){
            // list all items 
           
            

        } 
        
        else if ( $press_input == 'c' ){
            // create new items 
        } 
        
        else if ( $press_input == 'e' ){
            // edit and update items 
        } 
        
        else if ( $press_input == 'd '){
            // delete items 
        } 
        
        else {
            clearConsole();
            echo "\n";
            echo "\t ---------------------------------------------\n";           
            echo "\t     Please try again!! Wrong Input           \n";   
            echo "\t ---------------------------------------------\n";           
            sleep(2);
            display_crud_operation();
        } 

        

        


    }

















?>