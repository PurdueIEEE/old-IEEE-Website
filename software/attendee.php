<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software';
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
                <a href="index.php" class="list-group-item">Software Saturdays</a>
                <a href="attendee.php" class="list-group-item">Join as an Attendee</a>
                <a href="mentor.php" class="list-group-item">Join as a Mentor</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h2 class="text-center">Join as an Attendee</h2>
            <div class="col-md-12 text-dark">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfWHy0TBiUVPJMEpPcLlwTpl5hIlCYr91hxJUoRax_uXuHpoA/viewform" width="100%" height="700" frameborder="0">Loading...</iframe>
            </div>
        </div>
    </div>
</div>
<div class="well card-1 text-dark">
    <div class="row text-center">
        <h1 id="leaders">Leadership</h1>
        <hr/>
        <div class="row">
            <!--Gavin Shanley-->
            <div class="col-md-3 col-md-offset-3">
                <img src="images/Gavin_Shanley.jpg" alt="Gavin Shanley" class="img-circle" width=200px height=200px/>
                <h4>Gavin Shanley</h4>
                <p>Vice President<br/><br/></p>
            </div>
            <!--Ian Sibley-->
            <div class="col-md-3">
                <img src="images/Ian_Sibley.jpg" alt="Ian Sibley" class="img-circle" width=200px height=200px/>
                <h4>Ian Sibley</h4>
                <p>Chair<br/><br/></p>
            </div>
            <!--Rebecca Chow-->
        </div>
    </div>
</div>

<?php include '../footer.php';?>