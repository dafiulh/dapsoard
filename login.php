<?php
if (isset($_COOKIE["login"])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {
    if($_POST["password"] == "iluzyimbf95"){
        setcookie("login",md5($_POST["password"]));
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php require 'parts/head-tags.php'; ?>
    
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                   <h2>Admin Login</h2>
                   <p class="text-muted">Enter admin passsword</p>
                </div>
                <form method="post">
                    <div class="form-group"><input type="password" name="password" class="form-control rounded border" placeholder="Password" value="<?= $password ?>"></div>
                    <?php if(isset($_POST["submit"]) && $_POST["password"] != "iluzyimbf95"): ?><p class="text-danger">Wrong password</p><?php endif; ?>
                    <div class="form-group mt-4"><input type="submit" name="submit" value="Submit" class="btn btn-dark rounded"></div>
                </form>
            </div>
        </div>
    </div>

    <?php require 'parts/foot-scripts.php'; ?>
    
</body>
    
</html>