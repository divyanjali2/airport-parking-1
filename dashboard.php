<?php
session_start();
require_once __DIR__ . '/assets/includes/db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

try {
    // Count total reservations
    $reservationsCount = $conn->query(
        "SELECT COUNT(*) FROM reserved_slots"
    )->fetchColumn();

    // Count total users
    $usersCount = $conn->query(
        "SELECT COUNT(*) FROM users"
    )->fetchColumn();

} catch (PDOException $e) {
    die('<div style="color:red;">Database error: ' . $e->getMessage() . '</div>');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Airport Parking | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/footer-logo.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <style>
            body { font-family: "Cambria", sans-serif; background-color: #f4f6f8; font-size: 14px; }
            .dashboard-container { max-width: 95%; margin-top: 40px; }
            .card { border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); padding: 20px; }
            .card h3 { font-weight: 600; }
            .card .icon { font-size: 2.5rem; margin-bottom: 10px; }
        </style>
    </head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <?php include __DIR__ . '/assets/includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <div class="container dashboard-container">
            <h3 class="text-center fw-bold mb-4">📊 Dashboard</h3>

<div class="row g-4">

    <!-- Reservations -->
    <div class="col-md-6">
        <div class="card text-center bg-primary text-white">
            <div class="icon"><i class="bi bi-calendar-check"></i></div>
            <h3><?= $reservationsCount ?></h3>
            <p class="fw-bold">Total Reservations</p>
            <a href="reservations.php" class="btn btn-light btn-sm fw-bold">
                View Reservations
            </a>
        </div>
    </div>

    <!-- Users -->
    <div class="col-md-6">
        <div class="card text-center bg-success text-white">
            <div class="icon"><i class="bi bi-people"></i></div>
            <h3><?= $usersCount ?></h3>
            <p class="fw-bold">Registered Users</p>
            <a href="users.php" class="btn btn-light btn-sm fw-bold">
                View Users
            </a>
        </div>
    </div>

</div>

        </div>
    </div>
</div>
</body>
</html>
