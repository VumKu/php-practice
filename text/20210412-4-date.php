<?php

echo time() . '<br>';
echo date("Y-m-d H:i:s"). '<br>';
echo date("Y-m-d H:i:s", time() + 2592000). '<br>';
echo date("Y-m-d H:i:s", time() + 30*24*60*60). '<br>';

$t = strtotime('4/3/21');
echo $t . '<br>';
echo date("Y-m-d H:i:s", $t). '<br>';
