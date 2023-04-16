<!DOCTYPE html>
<html>
<body>

<?php
$n = 30;
$sum = 0;
$prod = 1;
for($x =1; $x <= $n; $x+=1){
    $sum += $x;
    $prod *= $x;
    echo "$x ";
}
echo "<br>1+...+n = $sum<br>";
echo "1*...*n = $prod<br>";

?>
</body>
</html>

