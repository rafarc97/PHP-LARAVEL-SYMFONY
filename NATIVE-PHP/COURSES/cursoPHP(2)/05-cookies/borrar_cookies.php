<?php

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('unyear','valor de mi cookie de 365 días', time() - 1);
}

header('Location: ver_cookies.php');

?>