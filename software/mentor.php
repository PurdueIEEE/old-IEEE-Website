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
                <a href="mentor.php" class="list-group-item">Join as a Mentor</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h2 class="text-center">Join as a Mentor</h2>
            <h3 class="text-center">Direct link to form:<a href="https://forms.gle/BHxVaJGEBqdEYVSe8">https://forms.gle/BHxVaJGEBqdEYVSe8</a></h3>
            <div class="col-md-12 text-dark">
                <p class="text-center">Even if you are not very experienced with Web Development, please still apply to be a mentor!</p>
                <iframe src="https://forms.gle/BHxVaJGEBqdEYVSe8" width="100%" height="700" frameborder="0">Loading...</iframe>
            </div>
        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
