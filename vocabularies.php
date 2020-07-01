<?php 
if (!isset($_COOKIE["login"])) {
    header("Location: login.php");
}
$parent="English";
$name="Vocabularies";
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
                            <h1 class="card-title">List of Vocabulary</h1>
                            <table class="table table-striped text-left">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">English</th>
                                  <th scope="col">Indonesia</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Car</td>
                                  <td>Mobil</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Rumah</td>
                                  <td>House</td>
                                </tr>
                              </tbody>
                            </table>
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
