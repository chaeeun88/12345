<!DOCTYPE html>
<html>
<body>

<?php
$n = 20;
for($x = 0; $x < $n; $x++) {
  $data[$x]=rand(0, 100);
  echo "$data[$x] ";
}
echo "<br>";
echo "<br>";
sort($data);

for($y = 0; $y < $n; $y++) {
  echo " $data[$y]";
}
?>
</body>
</html>