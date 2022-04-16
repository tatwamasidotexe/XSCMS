<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Home: Vendor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "vstatus.php"; ?>
    <div class="page-container">
        <div class="content-container">
            <nav>
                <ul>
                    <li><a href="#" class="vendor-name">Vendor Name</a></li>
                    <li><a href="logout.php" class="logout-button">log out</a></li>
                </ul>
            </nav>
            <form class="container" method="post">
                <button type="submit" name="open" class="btn-1">WE ARE OPEN</button>
                <button type="submit" name="closed" class="btn-2">WE ARE CLOSED</button>
            </form>
        </div>
    </div>
</body>

</html>