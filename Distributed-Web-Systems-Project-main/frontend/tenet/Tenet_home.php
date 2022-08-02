<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tenet Homepage</title>
    <link rel="stylesheet" href="Tenet_home.css">
    <script src="/backend/js/jQuery.js"></script>
    <script src="/backend/js/Tenet_home.js"></script>
</head>

<body>
<?php
include("/backend/php/session.php");
?>
<header id="header-container">BANDYL</header>
<h1 id= "logout" onclick="window.location.replace('/frontend/homePage.html')">Logout</h1>
<div class="body-container">
<p class="Payment" onclick="window.location.replace('payment.html')" onmouseover="">Pay Rent</p>
<p class="Maintenance" onclick="window.location.replace('workOrder.html')">Submit Maintenance Report</p>
<p class="Messages" onclick="window.location.replace('apartmentReview.html')">View Messages</p>
<p class="Documents" onclick="window.location.replace('documentUpload.html')">View Documents</p>
</div>
</body>
</html>
