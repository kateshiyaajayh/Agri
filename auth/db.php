
<?php
try {
    $con = mysqli_connect("localhost:3307", "root", "", "agri");

    if (!$con) {
        throw new Exception("Database connection failed");
    }

    mysqli_select_db($con, "agri");
} catch (Exception $e) {
    die($e->getMessage());
}
?>
