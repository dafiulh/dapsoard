<?php 
if (!isset($_COOKIE["login"])) {
    header("Location: login.php");
}
$parent="";
$name="Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'parts/head.php'; ?>

<body class="fix-header fix-sidebar">
    <?php require 'parts/preloader.php'; ?>
    <div id="main-wrapper">
        <?php require 'parts/sidebar.php'; ?>
        <div class="page-wrapper">
            <?php require 'parts/page-title.php'; ?>
            <div class="container p-4">
                <div class="row bg-white box-shadow mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title mb-0">Welcome back Admin</h1>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <?php require 'parts/scripts.php'; ?>
    
</body>

</html>
