<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | SmartDairyPro</title>

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
                    <div class="login-intro-content px-3 px-sm-4 px-lg-5 py-4 py-lg-5">
                        <img src="../images/logo.png"
                            alt="SmartDairyPro"
                            class="login-logo img-fluid">

                        <h1 class="display-5">
                            Account
                            <span>recovery.</span>
                        </h1>

                        <p class="login-description">
                            Forgot your password? Enter the email address linked to your
                            SmartDairyPro account to get started.
                        </p>

                        <div class="login-features d-none d-lg-flex">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h6>Keep your account secure</h6>
                                    <p>Use the email address you registered with.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Forgot Password Form -->
                <div class="col-12 col-lg-7 login-form-section">
                    <div class="login-form-wrapper px-3 px-sm-4 px-lg-5 py-4 py-lg-5">
                        <div class="login-heading">
                            <h2>Forgot password?</h2>
                            <p>Enter your email and we'll help you reset your password.</p>
                        </div>

                        <form action="#" method="post" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email address"
                                    autocomplete="email"
                                    data-validation="required email">
                                <span id="emailError" class="text-danger"></span>
                            </div>

                            <button type="submit" class="login-button">
                                Send reset instructions
                                <i class="bi bi-arrow-right"></i>
                            </button>

                            <p class="register-text">
                                Remember your password?
                                <a href="login.php">Back to Login</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../js/jquery-4.0.0.min.js"></script>
    <script src="../js/validation.js"></script>

</body>

</html>