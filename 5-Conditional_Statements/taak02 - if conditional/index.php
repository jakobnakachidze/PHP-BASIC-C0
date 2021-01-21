<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 10;
$var2 = 6;

if ($var1 == $var2) {
    echo "gelijk";
}
echo "<br>";
if ($var1 != $var2) {
    echo "ongelijk";
}
echo "<br>";
if ($var1 === $var2) {
    echo "identiek";
}
echo "<br>";
if ($var1 > $var2) {
    echo "groter";
}
echo "<br>";
if ($var1 < $var2) {
    echo "kleiner";
}
echo "<br>";
if ($var1 >= $var2) {
   echo "groter of gelijk";
}
echo "<br>";
if ($var1 <= $var2) {
    echo "kleiner of gelijk";
}
?>

</body>
</html>