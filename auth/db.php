<?php

$conn = mysqli_connect("localhost", "root", "", "smartdairypro", 3307);

if (!$conn) {
    die("Database connection failed");
}
