<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SmartDairyPro</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="register-page">
        <div class="container-fluid min-vh-100">
            <div class="row min-vh-100">

                <!-- Left Section -->
                <div class="col-12 col-lg-5 register-intro">
                    <div class="register-intro-content px-3 px-sm-4 px-lg-5 py-4 py-lg-5">

                        <img src="../images/logo.png"
                            alt="SmartDairyPro"
                            class="register-logo img-fluid">

                        <h1 class="display-5">
                            Join the
                            <span>SmartDairyPro</span>
                            family.
                        </h1>

                        <p class="register-description">
                            Create your account to discover fresh milk,
                            quality dairy products, and a simpler way to
                            support local farmers.
                        </p>

                        <div class="register-features d-none d-lg-flex">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-basket2"></i>
                                </div>
                                <div>
                                    <h6>Fresh dairy, delivered</h6>
                                    <p>Shop trusted products in one place.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-person-heart"></i>
                                </div>
                                <div>
                                    <h6>Support local farmers</h6>
                                    <p>Be part of a better dairy community.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-12 col-lg-7 register-form-section">
                    <div class="register-form-wrapper px-3 px-sm-4 px-lg-5 py-4 py-lg-5">

                        <div class="form-title">
                            <h2>Create your account</h2>
                            <p>
                                Join SmartDairyPro and get started today.
                            </p>
                        </div>


                        <form id="registerForm" novalidate>


                            <div id="registerSuccess" class="alert alert-success d-none">
                                <i class="bi bi-check-circle me-1"></i>
                                Account created successfully! You can now
                                <a href="login.php" class="alert-link">login</a>.
                            </div>

                            <div class="row g-4">

                                <!-- Full Name -->
                                <div class="col-12 col-md-6">
                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </span>

                                        <input type="text"
                                            class="form-control"
                                            name="fullname"
                                            placeholder="Enter full name"
                                            data-validation="required alpha">
                                    </div>

                                    <span class="error text-danger"
                                        id="fullnameError"></span>
                                </div>

                                <!-- Mobile Number -->
                                <div class="col-12 col-md-6">
                                    <label class="form-label">
                                        Mobile Number
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone"></i>
                                        </span>

                                        <input type="text"
                                            class="form-control"
                                            name="mobile"
                                            placeholder="Enter mobile number"
                                            data-validation="required numeric min max"
                                            data-min="10"
                                            data-max="10">
                                    </div>

                                    <span class="error text-danger"
                                        id="mobileError"></span>
                                </div>

                                <!-- Email Address -->
                                <div class="col-12">
                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope"></i>
                                        </span>

                                        <input type="text"
                                            class="form-control"
                                            name="email"
                                            placeholder="you@example.com"
                                            data-validation="required email">
                                    </div>

                                    <span class="error text-danger"
                                        id="emailError"></span>
                                </div>

                                <!-- Address -->
                                <div class="col-12">
                                    <label class="form-label">
                                        Address
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-geo-alt"></i>
                                        </span>

                                        <input type="text"
                                            class="form-control"
                                            name="address"
                                            placeholder="Enter your address"
                                            data-validation="required">
                                    </div>

                                    <span class="error text-danger"
                                        id="addressError"></span>
                                </div>

                                <!-- Village / City -->
                                <div class="col-12 col-md-4">
                                    <label class="form-label">
                                        Village / City
                                    </label>

                                    <input type="text"
                                        class="form-control"
                                        name="city"
                                        placeholder="Village / City"
                                        data-validation="required alpha">

                                    <span class="error text-danger"
                                        id="cityError"></span>
                                </div>

                                <!-- District -->
                                <div class="col-12 col-md-4">
                                    <label class="form-label">
                                        District
                                    </label>

                                    <input type="text"
                                        class="form-control"
                                        name="district"
                                        placeholder="District"
                                        data-validation="required alpha">

                                    <span class="error text-danger"
                                        id="districtError"></span>
                                </div>

                                <!-- State -->
                                <div class="col-12 col-md-4">
                                    <label class="form-label">
                                        State
                                    </label>

                                    <input type="text"
                                        class="form-control"
                                        name="state"
                                        placeholder="State"
                                        data-validation="required alpha">

                                    <span class="error text-danger"
                                        id="stateError"></span>
                                </div>

                                <!-- Password -->
                                <div class="col-12 col-md-6">
                                    <label class="form-label">
                                        Password
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </span>

                                        <input type="password"
                                            class="form-control"
                                            name="password"
                                            id="password"
                                            placeholder="Create a password"
                                            data-validation="required strongPassword min max"
                                            data-min="8"
                                            data-max="25">
                                    </div>

                                    <span class="error text-danger"
                                        id="passwordError"></span>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-12 col-md-6">
                                    <label class="form-label">
                                        Confirm Password
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-shield-lock"></i>
                                        </span>

                                        <input type="password"
                                            class="form-control"
                                            name="confirm_password"
                                            placeholder="Repeat your password"
                                            data-validation="required confirmPassword"
                                            data-password-id="password">
                                    </div>

                                    <span class="error text-danger"
                                        id="confirm_passwordError"></span>
                                </div>

                                <!-- Register As -->
                                <div class="col-12">
                                    <label class="form-label">
                                        Register as
                                    </label>

                                    <div class="role-options">

                                        <!-- Customer -->
                                        <label class="role-option">
                                            <input type="radio"
                                                name="role"
                                                value="customer"
                                                data-validation="required">

                                            <span class="role-content">
                                                <i class="bi bi-person"></i>
                                                <span>
                                                    Customer
                                                </span>
                                            </span>
                                        </label>

                                        <!-- Farmer -->
                                        <label class="role-option">
                                            <input type="radio"
                                                name="role"
                                                value="farmer"
                                                data-validation="required">

                                            <span class="role-content">
                                                <i class="bi bi-person-badge"></i>
                                                <span>
                                                    Farmer
                                                </span>
                                            </span>
                                        </label>

                                    </div>

                                    <span class="error text-danger"
                                        id="roleError"></span>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit"
                                        class="register-button">
                                        <span>
                                            Create my account
                                        </span>
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                                <!-- Login -->
                                <div class="col-12">
                                    <p class="login-text">
                                        Already have an account?
                                        <a href="login.php">
                                            Login now
                                        </a>
                                    </p>
                                </div>

                            </div>
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