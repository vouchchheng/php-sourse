<?php



$users = [
    'user1' => ['Name' => 'Pisey', 'Age' => '18', 'gender' => 'Female', 'Phone' => '012345679'],
    'user2' => ['Name' => 'Piseth', 'Age' => '19', 'gender' => 'Male', 'Phone' => '012987654'],
    'user3' => ['Name' => 'Pisal', 'Age' => '20', 'gender' => 'Male', 'Phone' => '012566777']
];


function displayOptions(){
    echo "---------------------------------------------\n";
    echo "         Select Options                      \n";
    echo "---------------------------------------------\n";
    echo "    > press v for view user info             \n";
    echo "    > press c for create user                \n";
    echo "    > press e for update and edit user       \n";
    echo "    > press d for delete user                \n";
    echo "---------------------------------------------\n";

}
displayOptions();

function user_info($users){
    
    foreach ($users as $userId => $userInfo) {
        echo "User ID: $userId\n";
        foreach ($userInfo as $key => $value) {
            echo strtoupper($key[0]) . substr($key, 1) . ": $value\n";
        }
        echo "\n"; 
        
    }
}
while(true){
    if()
}
// user_info($users);


?>
// view list for all users
