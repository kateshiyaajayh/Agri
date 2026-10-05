<?php

session_start();

require_once __DIR__ . "/db.php";

$message = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, full_name, password, role FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == "customer") {
                header("Location: ../customer/dashboard.php");
                exit;
            }

            if ($user['role'] == "farmer") {
                header("Location: ../farmer/dashboard.php");
                exit;
            }
        } else {
            $message = "Invalid email or password.";
        }
    } else {
        $message = "Invalid email or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | SmartDairyPro</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="login-page">

        <div class="container-fluid min-vh-100">

            <div class="row min-vh-100">

                <!-- Left Section -->

                <div class="col-12 col-lg-5 login-intro">

                    <div class="login-intro-content">

                        <img src="../images/logo.png"
                            alt="SmartDairyPro"
                            class="login-logo">

                        <h1>
                            Welcome back to
                            <span>SmartDairyPro.</span>
                        </h1>

                        <p class="login-description">
                            Login to manage your dairy activities, explore
                            quality dairy products, and stay connected with
                            your local dairy community.
                        </p>

                        <div class="login-features">

                            <div class="feature-item">

                                <div class="feature-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>

                                <div>
                                    <h6>Manage everything easily</h6>
                                    <p>
                                        Access your account and activities in one place.
                                    </p>
                                </div>

                            </div>


                            <div class="feature-item">

                                <div class="feature-icon">
                                    <i class="bi bi-person-heart"></i>
                                </div>

                                <div>
                                    <h6>Connected dairy community</h6>
                                    <p>
                                        Stay connected with farmers and customers.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Login Section -->

                <div class="col-12 col-lg-7 login-form-section">

                    <div class="login-form-wrapper">

                        <div class="login-heading">

                            <h2>Welcome back</h2>

                            <p>
                                Login to your SmartDairyPro account
                            </p>

                        </div>


                        <form action="login.php"
                            method="post"
                            id="loginForm"
                            novalidate>


                            <?php if ($message != "") { ?>

                                <div class="alert alert-danger">
                                    <?php echo $message; ?>
                                </div>

                            <?php } ?>


                            <!-- Email -->

                            <div class="mb-3">

                                <label for="email" class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email address"
                                    data-validation="required email">

                                <span id="emailError"
                                    class="text-danger"></span>

                            </div>


                            <!-- Password -->

                            <div class="mb-3">

                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    data-validation="required">

                                <span id="passwordError"
                                    class="text-danger"></span>

                            </div>


                            <!-- Remember / Forgot -->

                            <div class="login-options">

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="remember"
                                        name="remember">

                                    <label
                                        class="form-check-label"
                                        for="remember">
                                        Remember me
                                    </label>

                                </div>

                                <a href="forgot-password.php">
                                    Forgot Password?
                                </a>

                            </div>


                            <!-- Login Button -->

                            <button
                                type="submit"
                                name="login"
                                class="login-button">

                                Login
                                <i class="bi bi-arrow-right"></i>

                            </button>


                            <!-- Register -->

                            <p class="register-text">

                                Don't have an account?

                                <a href="register.php">
                                    Create account
                                </a>

                            </p>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script src="../js/jquery-4.0.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validation.js"></script>

</body>

</html>