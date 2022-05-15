<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title> Hover Buttons</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "vstatus.php"; ?>
    <div class="page-container">
        <div class="content-container">
            <p>Welcome to XSCS Vendor Page!</p>
            <nav>
                <ul>
                    <li><a href="#" id="vendorName" class="vendor-name">Vendor</a></li>
                    <li><a href="logout.php" class="logout-button">log out</a></li>
                </ul>
            </nav>
            <?php include "usernameHandler.php"; ?>
            <div class="container">
                <button class="btn-1">WE ARE OPEN</button>
                <button class="btn-2">WE ARE CLOSED</button>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>Project By <br>
                <a class="link" target="_blank" href="https://github.com/Gtree123/AWD-Project"> Gayatri Rout </a>,
                <a class="link" target="_blank" href="https://github.com/ManyapuShreya/projecctt/"> Manyapu Shreya </a>
                <a class="link" target="_blank" href="https://github.com/tatwamasidotexe/XSCMS"> Tatwamasi Mishra </a>,
                <a class="link" target="_blank" href="https://github.com/Yashikoi/AWD-project"> Yashica Pradhan </a>
            </p>
        </div>
    </div>
</body>

</html>