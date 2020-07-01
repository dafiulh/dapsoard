<?php 
if (!isset($_COOKIE["login"])) {
    header("Location: login.php");
}
$parent="";
$name="Settings";
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'parts/head.php'; ?>

<body class="fix-header fix-sidebar">
    <?php require 'parts/preloader.php'; ?>
    <div id="main-wrapper">
        <?php require 'parts/sidebar.php'; ?>
        <div class="page-wrapper">
            <?php require 'parts/header.php'; ?>
            <div class="container p-4">
                <div class="row bg-white box-shadow mx-auto">
                    <div class="card card-body">
                        <h1 class="card-title">Account Details</h1>
                        <p class="mb-0">Name: </p>
                        <p class="mb-0">Password: </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <?php require 'parts/scripts.php'; ?>
    
</body>

</html>
