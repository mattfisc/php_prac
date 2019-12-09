<?php

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$ok = true;
$message = array();

if(!isset($username) || empty($username) ){
    $ok = false;
    $message[] = "Username cannot be empty!";
}

if(isset($password) || empty($username)){
    $ok = false;
    $message[] = "Password cannot be empty!";
}

if($ok){
    if($username === 'decode' && $password === 'decode'){
        $ok = true;
        $message[] = 'Successful login!'; 
    }
    else{
        $ok = false;
        $message[] = 'Incorrect username/password combination!';
    }
}

echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages
    )
)

?>