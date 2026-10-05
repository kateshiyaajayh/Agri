<?php
$pageTitle = $pageTitle ?? "Customer";
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/customer.css">
</head>

<body>

    <div class="min-vh-100 d-flex flex-column">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white border-bottom px-3 px-lg-4">

            <div class="container-fluid">

                <!-- Logo -->
                <a href="market.php" class="navbar-brand">
                    <img src="../images/logo.png"
                        width="150"
                        alt="SmartDairyPro">
                </a>


                <!-- Mobile Menu Button -->
                <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#customerNav">

                    <i class="bi bi-list"></i>

                </button>


                <div class="collapse navbar-collapse" id="customerNav">

                    <!-- Main Menu -->
                    <ul class="navbar-nav mx-auto gap-lg-2">

                        <li class="nav-item">

                            <a href="dashboard.php"
                                class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">

                                Dashboard

                            </a>

                        </li>


                        <li class="nav-item">

                            <a href="market.php"
                                class="nav-link <?= $currentPage == 'market.php' ? 'active' : '' ?>">

                                <i class="bi bi-shop me-1"></i>
                                Market

                            </a>

                        </li>

                    </ul>


                    <!-- Profile -->
                    <div class="dropdown">

                        <button class="btn profile-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <i class="bi bi-person-circle me-2"></i>
                            Profile

                        </button>


                        <ul class="dropdown-menu dropdown-menu-end profile-menu">

                            <li>

                                <a class="dropdown-item"
                                    href="profile.php">

                                    <i class="bi bi-person me-2"></i>
                                    Edit Profile

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="cart.php">

                                    <i class="bi bi-cart3 me-2"></i>
                                    My Cart

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="wishlist.php">

                                    <i class="bi bi-heart me-2"></i>
                                    Wishlist

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="orders.php">

                                    <i class="bi bi-box-seam me-2"></i>
                                    My Orders

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="notifications.php">

                                    <i class="bi bi-bell me-2"></i>
                                    Notifications

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="addresses.php">

                                    <i class="bi bi-geo-alt me-2"></i>
                                    My Address

                                </a>

                            </li>


                            <li>

                                <a class="dropdown-item"
                                    href="settings.php">

                                    <i class="bi bi-gear me-2"></i>
                                    Settings

                                </a>

                            </li>


                            <li>

                                <hr class="dropdown-divider">

                            </li>


                            <li>

                                <a class="dropdown-item text-danger"
                                    href="../auth/login.php">

                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Logout

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </nav>


        <!-- Page Content -->
        <main class="flex-grow-1">

            <?= $content ?? '' ?>

        </main>


        <!-- Footer -->
        <footer class="bg-white border-top text-center p-3">

            <small class="text-muted">

                © 2026 SmartDairyPro. All rights reserved.

            </small>

        </footer>

    </div>


    <script src="../js/jquery-4.0.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validation.js"></script>

</body>

</html>