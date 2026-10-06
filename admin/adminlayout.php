<?php
$pageTitle = $pageTitle ?? "Admin Dashboard";
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

    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <div class="d-flex min-vh-100">

        <!-- Sidebar -->
        <aside class="admin-sidebar d-none d-lg-block bg-white border-end p-3">

            <div class="mb-4">
                <a href="dashboard.php" class="text-decoration-none">
                    <img src="../images/logo.png" alt="SmartDairy" class="admin-brand-logo">
                    <small class="text-muted">Admin Panel</small>
                </a>
            </div>

            <nav>

                <a href="dashboard.php"
                    class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="bi bi-grid"></i>
                    Dashboard
                </a>

                <a href="customers.php"
                    class="nav-link <?= $currentPage == 'customers.php' ? 'active' : '' ?>">
                    <i class="bi bi-people"></i>
                    Customers
                </a>

                <a href="farmers.php"
                    class="nav-link <?= $currentPage == 'farmers.php' ? 'active' : '' ?>">
                    <i class="bi bi-person-badge"></i>
                    Farmers
                </a>

                <a href="products.php"
                    class="nav-link <?= $currentPage == 'products.php' ? 'active' : '' ?>">
                    <i class="bi bi-box-seam"></i>
                    Products
                </a>

                <a href="orders.php"
                    class="nav-link <?= $currentPage == 'orders.php' ? 'active' : '' ?>">
                    <i class="bi bi-cart3"></i>
                    Orders
                </a>

                <a href="schemes.php"
                    class="nav-link <?= $currentPage == 'schemes.php' ? 'active' : '' ?>">
                    <i class="bi bi-bank"></i>
                    Government Schemes
                </a>

                <a href="notifications.php"
                    class="nav-link <?= $currentPage == 'notifications.php' ? 'active' : '' ?>">
                    <i class="bi bi-bell"></i>
                    Notifications
                </a>

                <a href="reports.php"
                    class="nav-link <?= $currentPage == 'reports.php' ? 'active' : '' ?>">
                    <i class="bi bi-bar-chart"></i>
                    Reports
                </a>

                <hr>

                <a href="profile.php"
                    class="nav-link <?= $currentPage == 'profile.php' ? 'active' : '' ?>">
                    <i class="bi bi-person"></i>
                    Profile
                </a>

                <a href="settings.php"
                    class="nav-link <?= $currentPage == 'settings.php' ? 'active' : '' ?>">
                    <i class="bi bi-gear"></i>
                    Settings
                </a>

                <a href="../auth/login.php" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>

            </nav>

        </aside>


        <!-- Main Area -->
        <div class="admin-main flex-grow-1 d-flex flex-column">

            <!-- Header -->
            <header class="bg-white border-bottom px-3 px-md-4 py-3">

                <div class="admin-header-inner d-flex flex-wrap align-items-center justify-content-between gap-2">

                    <div class="d-flex align-items-center gap-3">

                        <details class="d-lg-none position-relative">
                            <summary class="btn btn-light">
                                <i class="bi bi-list"></i>
                            </summary>

                            <div class="mobile-menu bg-white border rounded shadow-sm p-2">

                                <a href="dashboard.php" class="nav-link">
                                    <i class="bi bi-grid"></i> Dashboard
                                </a>

                                <a href="customers.php" class="nav-link">
                                    <i class="bi bi-people"></i> Customers
                                </a>

                                <a href="farmers.php" class="nav-link">
                                    <i class="bi bi-person-badge"></i> Farmers
                                </a>

                                <a href="products.php" class="nav-link">
                                    <i class="bi bi-box-seam"></i> Products
                                </a>

                                <a href="orders.php" class="nav-link">
                                    <i class="bi bi-cart3"></i> Orders
                                </a>

                                <a href="schemes.php" class="nav-link">
                                    <i class="bi bi-bank"></i> Government Schemes
                                </a>

                                <a href="notifications.php" class="nav-link">
                                    <i class="bi bi-bell"></i> Notifications
                                </a>

                                <a href="reports.php" class="nav-link">
                                    <i class="bi bi-bar-chart"></i> Reports
                                </a>

                                <a href="profile.php" class="nav-link">
                                    <i class="bi bi-person"></i> Profile
                                </a>

                                <a href="settings.php" class="nav-link">
                                    <i class="bi bi-gear"></i> Settings
                                </a>

                            </div>
                        </details>

                        <div>
                            <h5 class="mb-0 fw-semibold"><?= $pageTitle ?></h5>
                            <small class="admin-header-description text-muted d-none d-sm-block">
                                Manage your SmartDairyPro system
                            </small>
                        </div>

                    </div>


                    <div class="d-flex align-items-center gap-3 ms-auto">

                        <a href="notifications.php"
                            class="text-dark fs-5">
                            <i class="bi bi-bell"></i>
                        </a>

                        <div class="d-flex align-items-center gap-2">

                            <div class="admin-avatar">
                                <i class="bi bi-person"></i>
                            </div>

                            <div class="d-none d-md-block">
                                <div class="fw-semibold">Admin</div>
                                <small class="text-muted">Administrator</small>
                            </div>

                        </div>

                    </div>

                </div>

            </header>


            <!-- Page Content -->
            <main class="flex-grow-1 p-3 p-md-4">

                <?= $content ?? '' ?>

            </main>


            <!-- Footer -->
            <footer class="bg-white border-top px-3 px-md-4 py-3">

                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">

                    <small class="text-muted">
                        © 2026 SmartDairyPro
                    </small>

                    <small class="text-muted">
                        Admin Panel
                    </small>

                </div>

            </footer>

        </div>

    </div>

    <script src="../js/jquery-4.0.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validation.js"></script>

</body>

</html>
