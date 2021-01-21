<?php
$var1 = 10;

if ($var1 < 10 && $var1 >9) {
    echo "true";
} else {
    echo "false";
}

if ($var1 < 10 || $var1 >9) {
    echo "true";
} else {
    echo "false";
}

if ($var1 < 10 xor $var1 >9) {
    echo "true";
} else {
    echo "false";
}

if ($var1 < 10 ! $var1 >9) {
    echo "true";
} else {
    echo "false";
}

?>