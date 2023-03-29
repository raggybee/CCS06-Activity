<?php

function greet() {
    $message = 'Hello';
    $message .= 'World!';
    $message .= 'Today is ';
    $message .= date("m d Y");
    echo $message;
}
greet();
?>