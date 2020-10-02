<?php
session_start();
unset($_SESSION["password"]);
unset($_SESSION["id"]);
header("Location: login.php");

