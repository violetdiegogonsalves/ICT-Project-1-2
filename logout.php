<?php

session_start();

unset($_SESSION['valid_user']);



session_destroy();



echo '<script> window.location="http://www.linfox.ictatjcub.com"</script>';
?>
