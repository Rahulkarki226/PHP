<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

echo "Fav color is ".$_SESSION["favcolor"].".<br>";
echo "Fav animal is ".$_SESSION["favanimal"].".";
?>

</body>
</html>
