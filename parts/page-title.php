<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3><?= $name ?></h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <?php if($parent!==""):?><li class="breadcrumb-item"><?= $parent ?></li><?php endif;?>
            <li class="breadcrumb-item active"><?= $name ?></li>
        </ol>
    </div>
</div>