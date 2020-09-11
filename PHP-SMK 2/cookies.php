<?php 

    $cookie_name = 'user';
    $cookie_value = 'joni';

    setcookie($cookie_name, $cookie_value);

    $cookie_value='teho';
    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "<br>";
    var_dump($_COOKIE);


?>