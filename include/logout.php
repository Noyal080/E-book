<?php

include 'C:\xampp\htdocs\Ecom\include\connect.php';

session_start();
session_unset();
session_destroy();

header('location: ../userloginform.php');
