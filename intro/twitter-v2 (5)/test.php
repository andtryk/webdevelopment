<?php
$a = 1;
$b = &$a;
$a = 20;
echo $b;
