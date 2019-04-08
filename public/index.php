<?php

require '../vendor/autoload.php';

//Class Hello
$helloWord = new app\Wcs\Hello();
echo $helloWord -> talk();

echo '<br>';

// ehime/hello-world 
use HelloWorld\SayHello;

echo SayHello::world();