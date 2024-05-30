<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php

$_SESSION["favcolor"]="white";
$_SESSION["favanimal"]="dog";

echo "SESSION variable are set";
?>

</body>
</html>
