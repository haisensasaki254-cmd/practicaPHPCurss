<?php 

unset($_COOKIE["username"]);
unset($_COOKIE["username_with_time"]);
setcookie("username","",time()-100);
setcookie("username_with_time","",time()-100);

header('Location:index.php');


?>