<?php
function getUserInfo() {
    return [
        'name' => 'John',
        'age' => 25,
        'city' => 'New York'
    ];
}

$user = getUserInfo();
echo $user['name'] . " is " . $user['age'] . " years old from " . $user['city'];
?>