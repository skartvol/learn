<?php
function sendMyMessage($message) {
    if(isset($message) && !empty($message))
    {
        return 'Your message: '.$message;
    }
    return 'You don\'t send message!';
}

function sumOfNumbers(int $a, int $b) {
    return $a + $b;
}