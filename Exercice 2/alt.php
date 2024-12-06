<?php
session_start();


if(isset($_SESSION["firstName"], $_SESSION["lastName"], $_SESSION["age"])){
    echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] . " " . $_SESSION["age"];
}