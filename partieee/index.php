<?php
    $page_title = 'Home';
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
                <p>Purdue Aerial Robotics Team IEEE (PARTIEEE), founded in 1996, consists of four teams: AeroMechanical, Electrical, Software, and Writing. The AeroMechanical team designs and manufactures a custom, stable fixed wing aircraft based on mathematical models. The Electrical team develops custom hardware for the plane, such as power supply boards, sensor boards, and flight controllers. The Software team writes autopilot and image processing algorithms that will guide the system through waypoints and targets. The Writing team works on the technical journal paper, documentation, and presentation displays. The contributions from each team are blended into an unmanned aerial system (UAS) and evaluated at the AUVSI SUAS Competition at Webster Field, Maryland during the summer. For more information contact <a href="mailto:partieee@purdue.edu">Michael Malachowski</a></p>
                <br />
            </div>
        </div>
        <div class="well card-1 text-light">
            <div class="row text-center">
                <h1 id="officers">Officers</h1>
                <hr />
                <div class="row">
                    <!--Michael-->
                    <div class= "col-md-4">
                        <img src="../images/officers/Michael_Malachowski.jpg" alt= "Michael Malachowski" class="img-circle" width=250px height=250px />
                        <h4>Michael Malachowski</h4>
                        <p>Chair<br />Electrical Engineering<br />Senior</p>
                    </div>
                    <!--Jon Paul Pepen-->
                    <div class= "col-md-4">
                        <img src="./images/jon-paul-pepen.jpg" alt= "Jon Paul Pepen" class="img-circle" width=250px height=250px />
                        <h4>Jon Paul Pepen</h4>
                        <p>First Officer<br />Aeronautics and Astronautics Engineering<br />Senior</p>
                    </div>
                    <!--Ajay-->
                    <div class= "col-md-4">
                        <img src="./images/ajay-kumar.jpg" alt= "Ajay Kumar" class="img-circle" width=250px height=250px />
                        <h4>Ajay Kumar</h4>
                        <p>Secretary<br />Mechanical Engineering<br />Senior</p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <!--Joey-->
                    <div class= "col-md-4">
                        <img src="./images/joey-williamson.jpg" alt= "Joey Williamson" class="img-circle" width=250px height=250px />
                        <h4>Joey Williamson</h4>
                        <p>Aeromech Team Lead<br />Aeronautics and Astronautics Engineering<br />Sophomore</p>
                    </div>
                    <!--Patrick-->
                    <div class= "col-md-4">
                        <img src="./images/patrick-may.png" alt= "Patrick May" class="img-circle" width=250px height=250px />
                        <h4>Patrick May</h4>
                        <p>Electrical Team Lead<br />Electrical Engineering<br />Junior</p>
                    </div>
                    <!--Ellie-->
                    <div class= "col-md-4">
                        <img src="./images/ellie-topi.jpg" alt= "Ellie Topi" class="img-circle" width=250px height=250px />
                        <h4>Ellie Topi</h4>
                        <p>Lab Manager<br />Mechanical Engineering Technology<br />Junior</p>
                    </div>
                </div>
                    <br />
                <div class="row">
                    <!--Robert-->
                    <div class= "col-md-4">
                        <img src="./images/robert-mcintyre.jpg" alt= "Robert McIntyre" class="img-circle" width=250px height=250px />
                        <h4>Robert McIntyre</h4>
                        <p>Aeromech Manufacturing Lead<br />Mechanical Engineering<br />Sophomore</p>
                    </div>
                    <!--Yash-->
                    <div class= "col-md-4">
                        <img src="../images/officers/Yash_Nain.jpg" alt= "Yash Nain" class="img-circle" width=250px height=250px />
                        <h4>Yash Nain</h4>
                        <p>Sponsorship and Relations Coordinator<br />Multidisciplinary Engineering<br />Junior</p>
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
