<?php
$page_title = 'History';
$site_title = 'IEEE Racing';
$site_index = '/racing';
include '../../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/racing/index.php" class="list-group-item">Main</a>
                <a href="/racing/history/" class="list-group-item active">History</a>
                <a href="/racing/bylaws/" class="list-group-item">Bylaws</a>
                <a href="/racing/sponsors/" class="list-group-item">Sponsors</a>
                <a href="/racing/alumni/" class="list-group-item">Alumni</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h1 class="text-center">Racing Team History</h1>
            <br />
            <h3 class="text-center">2017-2018 Season</h3>
            <p class="text-justify">
                The 2017 Season was filled with new breath. The goal this year was to refine the go-kart by reorganizing
                wiring and implementing the long-wanted torque vectoring system. The team used an Arduino  to control
                the two motors. The competition started off strong with the team qualifying 9th in the race. During the
                race, the driver, Chuck Vamos, worked his way up to 4th place. However fourteen laps in, he got into a
                rear end collision with the driver behind him. The kart suffered a damaged control arm and was not able
                to continue the race. The team looks forward to the next season. They plan to fix the control arm and
                improve the torque vectoring.
            </p>
            <br />
                        <a href="/racing/images/2018_GoKart.png">
                            <img src="/racing/images/2018_GoKart.png" alt="2018 Team" style="width:100%">
                        </a>
            <br />
            <h3 class="text-center">2016-2017 Season</h3>
            <p class="text-justify">
                The 2016 season was challenging for us due to many members leaving. Our focus this year was repairing
                and upgrading our current dual-motor go-kart. We had a lot of long nights leading up to the race but
                were able to field a successful go-kart and finished the race. Due to technical difficulties our
                finishing position was not recorded and we are currently in the process of solving  this. Thank you to
                all of our sponsors and fans and we look forward to an even better season in 2017!
            </p>
            <br />
            <a href="/racing/images/2016_GoKart2.jpg">
                <img src="/racing/images/2016_GoKart2.jpg" alt="2016 Team" style="width:100%">
            </a>
            <br />
        </div>
    </div>
</div>
<!-- /.well -->

<?php include '../../footer.php'; ?>
