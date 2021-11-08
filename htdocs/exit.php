<?php
setcookie("user", $user['name'], time()-36000,"/");
header('location: /' );
 ?>
