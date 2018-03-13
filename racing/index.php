<?php
    $site_title = 'IEEE Racing';
    $site_index = '/racing';
    include '../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">

        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/racing/index.php" class="list-group-item active">Main</a>
                <a href="/racing/history/" class="list-group-item">History</a>
                <a href="/racing/bylaws/" class="list-group-item">Bylaws</a>
                <a href="/racing/sponsors/" class="list-group-item">Sponsors</a>
                <a href="/racing/alumni/" class="list-group-item">Alumni</a>
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-md-9 text-dark">

            <h2 class="text-center">Racing Team</h2>
            <br>

            <p class="text-justify">
                IEEE Racing builds an electric go-kart that competes in the Purdue evGrandPrixthat takes place annually
                at the Indianapolis Motor Speedway. We are looking for members to redesign electrical systems, get
                sponsors and build industry contacts, improve safety features, and most importantly, have a great time
                learning about electric vehicle technology.
            </p>
            <p class="text-justify">
                Team meetings are once a week in the off-season and twice a week during race season. Meetings are broken
                into planning time where we discuss our project and budget and build sessions where members get hands-on
                with the go-kart.
            </p>

            <p class="text-justify">
                All majors are welcome!! Contact <a href="mailto:white378@purdue.edu">Adrian White</a> for more details.
            </p>


            <h2 class="text-center">2016-2017 Team Picture</h2>
            <a href="/racing/images/GoKart.jpg"
                <p class="text-center"><img src="/racing/images/GoKart.jpg" alt="2016 Team" style="width:100%"></p>
            </a>
            <br>


            <div class="well card-1 text-dark">
                <div class="row text-center">

                    <h1 id="leaders">Leadership</h1>
                    <hr/>
                    <div class="row">
                        <!--Adrian White-->
                        <div class="col-md-4">
                            <img src="/racing/images/Adrian.jpg" alt="Adrian White" class="img-circle" width=200px
                                 height=200px/>
                            <h4>Adrian White</h4>
                            <p>Chair<br/>Electrical Engineering<br/>Senior</p>
                        </div>
                        <!--Charlie Watts-->
                        <div class="col-md-4">
                            <img src="/racing/images/Charlie.jpg" alt="Charlie Watts" class="img-circle" width=200px
                                 height=200px/>
                            <h4>Charlie Watts</h4>
                            <p>Vice Chair<br/>Electrical Engineering<br/>Sophomore</p>
                        </div>
                        <!--Micaela Salmon-->
                        <div class="col-md-4">
                            <img src="/racing/images/Micaela.jpg" alt="Micaela Salmon" class="img-circle" width=200px height=200px/>
                            <h4>Micaela Salmon</h4>
                            <p>Electrical Lead<br/>Robotics Engineering Technology<br/>Freshman</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--Anthony Huo-->
                        <div class="col-md-4">
                            <img src="/racing/images/Anthony.jpg" alt="Adrian White" class="img-circle" width=200px
                                 height=200px/>
                            <h4>Anthony Huo</h4>
                            <p>Controls Lead<br/>Electrical Engineering<br/>Sophomore</p>
                        </div>
                        <!--Chuck Vamos-->
                        <div class="col-md-4">
                            <img src="/racing/images/Chuck.jpg" alt="Chuck Vamos" class="img-circle" width=200px
                                 height=200px/>
                            <h4>Chuck Vamos</h4>
                            <p>Mechanical Lead<br/>Electrical Engineering<br/>Sophomore</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Content Column -->
    </div>
</div>
<!-- /.well -->

<?php include '../footer.php'; ?>
