<?php
setcookie("login", $_POST["login"]);
setcookie("password", $_POST["password"]);

header('location: ./page3.php');

