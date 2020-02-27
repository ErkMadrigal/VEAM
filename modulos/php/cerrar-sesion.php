<?php
    include '../RaizV.php';
    session_start();
    session_destroy();
    session_unset();
    header('location: '.$raizV);