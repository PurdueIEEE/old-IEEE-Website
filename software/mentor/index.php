<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../../header.php';
?>
<style>
    #centerside{
        width: 100%;
    }
</style>
<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <div class="col-md-12 text-dark">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="/software" class="list-group-item">Software Saturdays</a>
                    <a href="/software/attendee" class="list-group-item">Join as an Attendee</a>
                    <a href="/software/mentor" class="list-group-item active">Join as a Mentor</a>
                    <a href="/software/history" class="list-group-item">Past Sessions</a>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
            <h2 class="text-center">Join as a Mentor</h2>
            <h3 class="text-center">Direct link to form:<a href="https://forms.gle/8uY56modpizx9AcS8">https://forms.gle/8uY56modpizx9AcS8</a></h3>
            <div class="col-md-12 text-dark">
                <p class="text-center">Even if you are not very experienced with Web Development, please still apply to be a mentor!</p>
                <iframe src="https://forms.gle/8uY56modpizx9AcS8" width="100%" height="700" frameborder="0">Loading...</iframe>
            </div>
            </div>
        </div>
    </div>
</div>

<?php include '../staff.php';?>

<?php include '../../footer.php';?>
