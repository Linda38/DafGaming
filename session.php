<?php
session_start();
    function estaLogeado() {
    if (isset($_SESSION["admin"])) {
    return true;
    } else {
    return false;
    }
}
?>