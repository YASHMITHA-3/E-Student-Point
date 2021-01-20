<?php

session_start();
unset($_SESSION["username"]);
 header('Refresh:2; url=index.html');
 echo '<h4><center> Logout successful </center></h4>';
?>