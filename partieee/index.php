<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>

    <link href="/assets/bootstrap.partieee.css" rel="stylesheet">
    <!-- Content Row -->


    <div class="fullscreen-bg">
    <video loop muted autoplay poster="images/Genie.jpg" id="bg-vid" class="fullscreen-bg__video">
        <source src="videos/backgroundl" type="video/webm">
    </video>
    </div>
    <script type="text/javascript">
      /* set playback rate for bg video */
      document.getElementById("bg-vid").playbackRate = .7;

    </script>
        <div class="row well nopad">
        <div class="col-lg-12 nopad">
            <!-- Header Carousel -->
            <header id="myCarousel" class="carousel slide card-2">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('./images/cad.png');"></div>
                        <div class="carousel-caption">
                            <h2>UAV P17</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('./images/fcskp.png');"></div>
                        <div class="carousel-caption">
                            <h2>Flight Controller v2.0</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('./images/arceustaxi.png');"></div>
                        <div class="carousel-caption">
                            <h2>Arceus</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>
        </div>
    </div>
    <div class="text-dark">
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="http://www.auvsi-suas.org/competitions/2017/">SUAS Competition Info</a>
                    </li>
                    <li>
                        <a href="/professional/">Info for Sponsors</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCDyoVLkPq5463PZMnQ-G2hA">Youtube</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/purdueaerial/">Facebook</a>
                    </li>
                    <li>
                        <a href="https://drive.google.com/folderview?id=0B5107H94KnS1Q0dDOEJ5TTU0OEk&usp=sharing">Pictures</a>
                    </li>
                </ul>
            </div>
    </div>
    </div>
       <div class="well card-1 text-light">

            <div class="row text-center">
                <h1 id="mission">Mission</h1>
                <hr />
                <p>Purdue Aerial Robotics Team IEEE (PARTIEEE), founded in 1996, consists of four teams: AeroMechanical, Electrical, Software, and Writing. The AeroMechanical team designs and manufactures a custom, stable fixed wing aircraft based on mathematical models. The Electrical team develops custom hardware for the plane, such as power supply boards, sensor boards, and flight controllers. The Software team writes autopilot and image processing algorithms that will guide the system through waypoints and targets. The Writing team works on the technical journal paper, documentation, and presentation displays. The contributions from each team are blended into an unmanned aerial system (UAS) and evaluated at the AUVSI SUAS Competition at Webster Field, Maryland during the summer. For more information contact <a href="mailto:partieee@purdue.edu">Ellie Topi</a></p>
                <br />
            </div>
        </div>
        <div class="well card-1 text-light">
            <div class="row text-center">
                <h1 id="officers">Officers</h1>
                <hr />
                <div class="row">
                    <!--Ellie-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Ellie Topi</h4>
                        <p>Captain<br /><br /></p>
                    </div>
                    <!--Anthony-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Anthony Goeckner</h4>
                        <p>Vice Captain<br /><br /></p>
                    </div>
                    <!--Erik-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Erik VanderWerf</h4>
                        <p>Vice Captain<br /> <br /></p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <!--Mark -->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Mark Benati </h4>
                        <p>Software Lead<br /><br /></p>
                    </div>
                    <!--Patrick-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Patrick May</h4>
                        <p>Electrical Lead<br /><br /></p>
                    </div>
                    <!--Landon-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Landon Glunt</h4>
                        <p>AeroMechanical Lead<br /><br /></p>
                    </div>
                </div>
                    <br />
                <div class="row">
                    <!--George Xu-->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>George Xu</h4>
                        <p>AeroMechanical Technical Head<br /><br /></p>
                    </div>
                    <!---->
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Robert McIntyre</h4>
                        <p>AeroMechanical Manufacturing Head<br /><br /></p>
                    </div>
                    <div class= "col-md-4">
                        <img src="" alt= "" class="img-circle" width=250px height=250px />
                        <h4>Milan Bidare</h4>
                        <p>Sponsorship Lead<br /><br /></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="well card-1 text-light">
            <div class="row text-center">
                <h1 id="events">Project Updates</h1>
                <hr />

                <br /><br />
            </div>
        </div>


<?php include '../footer.php'; ?>
