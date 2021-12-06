<?php
    session_start();
    if (!isset($_SESSION['logged'])) {
        header("Location: /login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-light border-bottom px-5">
        <h1 class="navbar-brand">ADMIN PANEL</h1>
        <a href="/logout.php" class="btn btn-primary">LOG OUT</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-2 px-1 py-3 d-flex flex-column">
                <a href="/admin.php?section=add-property" class="mx-auto mb-3" style="width: 160px;">ADD PROPERTY</a>
                <a href="/admin.php?section=add-agent" class="mx-auto" style="width: 160px;">ADD AGENT</a>
            </div>
            <div class="col p-3 border-start">
                <?php
                    if(isset($_GET['section'])) {
                        if($_GET['section'] == "add-property") {
                            include './components/property-form.php';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>