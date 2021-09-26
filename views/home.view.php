<?php include 'layouts/app-start.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?php component('card') ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?php include 'components/card copy 3.php' ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?php include 'components/card copy 2.php' ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?php include 'components/card copy.php' ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php include 'components/chart.php' ?>
        </div>
        <div class="col-md-4">
            <?php include 'components/chart copy.php' ?>
        </div>
        <div class="col-md-4">
            <?php include 'components/chart copy 2.php' ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <?php include 'components/tasks.php' ?>
        </div>
        <div class="col-lg-6 col-md-12">
            <?php include 'components/stats.php' ?>
        </div>
    </div>
</div>
<?php include 'layouts/app-end.php' ?>
