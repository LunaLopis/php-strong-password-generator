<?php
function randomNumber($min, $max){
    return rand($min, $max);
}

function generatePassword($length){
    $result = '';
    $password = '';
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = '0123456789';
    $symbols = '!@*#%&()£';

    $baseString = $letters.$numbers.$symbols;

    if(empty($length)){
        $result ='inserire parametro valido';
    }
    else if($length < 8 || $length > 32){
        $result = 'Attenzione! La password deve essere compresa tra 8 e 32 caratteri';
    }
    else{
        while(strlen($password) < $length){
            $index = randomNumber(0, strlen($baseString) - 1);
            $char = $baseString[$index];
            $password .= $char;
        }
        session_start();
        $_SESSION['password'] = $password;
        header('Location: ./success.php');
    }
    return $result;
}
?>