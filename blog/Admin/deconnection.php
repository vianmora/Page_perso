<?php session_start();
session_destroy();

header('Location: connection?idOK=100');
?>
