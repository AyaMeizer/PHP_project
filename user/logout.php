<?php
session_start();
require("../database/connection.php");

unset($_SESSION['loggedUser']);
?>