<?php

$time = microtime(true);

$options = [
    'cost' =>20,
];

echo password_hash("vimalchandar", PASSWORD_BCRYPT,$options);

echo "\nTook ".(microtime(true) - $time)." sec.";


