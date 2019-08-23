<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../header.php';
?>
<style>
    #centerside{
        width: 100%;
    }
</style>
<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/software/" class="list-group-item">Software Saturdays</a>
                <a href="attendee.php" class="list-group-item">Join as an Attendee</a>
                <a href="reactmentor.php" class="list-group-item">Join as a React Mentor</a>
                <a href="androidmentor.php" class="list-group-item">Join as an Android Mentor</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h2 class="text-center">Join as a React Mentor</h2>
            <div class="col-md-12 text-dark">
                <iframe src="https://forms.gle/M4S3QuFxt1U6ZiHx9" width="100%" height="700" frameborder="0">Loading...</iframe>
            </div>
        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
