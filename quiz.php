<?php
function UserInfo($name, $age, $gender, $phone) {
    echo "Name: $name \n";
    echo "Age: $age \n";
    echo "Gender: $gender \n";
    echo "Phone: $phone \n";
}
$name = "lisa";
$age = 22;
$gender = "female";
$phone = "023-456-7890";
UserInfo($name, $age, $gender, $phone);


?>