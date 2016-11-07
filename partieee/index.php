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
        <source src="videos/forest.mov" type="video/webm">
    	</video>
    </div>
    <script type="text/javascript">
      /* play video twice as fast */
      document.getElementById("bg-vid").playbackRate = .75;
       
    </script>
        <div class="row well nopad">
        <div class="col-lg-12 nopad">
            <!-- Header Carousel -->
            <header id="myCarousel" class="carousel slide card-2">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('images/cad.png');"></div>
                        <div class="carousel-caption">
                            <h2>UAV CAD</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/ieee_callout.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>IEEE Callout: Fall 2016</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/aerial.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Aerial Robotics</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/csociety.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Computer Society</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/EMBS.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>EMBS</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/racing.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Racing</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/rov.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>ROV</h2>
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
        <div class="well card-1 text-dark">
            <div class="row text-center">
                <h1 id="mission">Mission</h1>
                <hr />
                <p>Purdue Aerial Robotics Team IEEE (PARTIEEE), founded in 1996, consists of four teams: AeroMechanical, Electrical, Software, and Writing. The AeroMechanical team designs and manufactures a custom, stable fixed wing aircraft based on mathematical models. The Electrical team develops custom hardware for the plane, such as power supply boards, sensor boards, and flight controllers. The Software team writes autopilot and image processing algorithms that will guide the system through waypoints and targets. The Writing team works on the technical journal paper, documentation, and presentation displays. The contributions from each team are blended into an unmanned aerial system (UAS) and evaluated at the AUVSI SUAS Competition at Webster Field, Maryland during the summer. <a href="https://drive.google.com/folderview?id=0B5107H94KnS1Q0dDOEJ5TTU0OEk&usp=sharing">Here is a link</a> to media relevant to the team's progress over the past year. For more information contact <a href="mailto:partieee@purdue.edu">Michael Malachowski</a></p>
                <br />
            </div>
        </div>
        <div class="well card-1 text-dark">
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
                        <img src="./images/jon-paul.jpg" alt= "Jon Paul Pepen" class="img-circle" width=250px height=250px />
                        <h4>Jon Paul Pepen</h4>
                        <p>First Officer<br />Major<br />Senior</p>
                    </div>
                    <!--Ajay-->
                    <div class= "col-md-4">
                        <img src="./images/ajay.png" alt= "Ajay Kumar" class="img-circle" width=250px height=250px />
                        <h4>Ajay Kumar</h4>
                        <p>Secretary<br />Major<br />Senior</p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <!--Joey-->
                    <div class= "col-md-4">
                        <img src="./images/joey.jpg" alt= "Cooper Pratt" class="img-circle" width=250px height=250px />
                        <h4>Joey Williamson</h4>
                        <p>Aeromech Team Lead<br />Major<br />Year</p>
                    </div>
                    <!--Patrick-->
                    <div class= "col-md-4">
                        <img src="./images/patrick.jpg" alt= "Justin Joco" class="img-circle" width=250px height=250px />
                        <h4>Patrick May</h4>
                        <p>Electrical Team Lead<br />Electrical Engineering<br />Year</p>
                    </div>
                    <!--Ellie-->
                    <div class= "col-md-4">
                        <img src="./images/ellie.jpg" alt= "Ellie Topi" class="img-circle" width=250px height=250px />
                        <h4>Ellie Topi</h4>
                        <p>Lab Manager<br />Major<br />Year</p>
                    </div>
                </div>
                    <br />
                <div class="row">
                    <!--George-->
                    <div class= "col-md-4">
                        <img src="./images/george.jpg" alt= "George Xu" class="img-circle" width=250px height=250px />
                        <h4>George Xu</h4>
                        <p>Aeromech Technical Lead<br />Major<br />Year</p>
                    </div>
                    <!--Robert-->
                    <div class= "col-md-4">
                        <img src="./images/robert.jpg" alt= "Robert McIntyre" class="img-circle" width=250px height=250px />
                        <h4>Robert McIntyre</h4>
                        <p>Aeromech Manufacturing Lead<br />Major<br />Year</p>
                    </div>
                    <!--Yash-->
                    <div class= "col-md-4">
                        <img src="./images/yash.jpg" alt= "Yash Nain" class="img-circle" width=250px height=250px />
                        <h4>Yash Nain</h4>
                        <p>Sponsorship and Relations Coordinator<br />Major<br />Year</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="well card-1 text-dark">
            <div class="row text-center">
                <h1 id="events">Past Events</h1>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/Sabbagh.gif" alt= "Placeholder" class="img-rounded" width=200px height=250px />
                        <h4>Dr. Harold Sabbagh</h4>
                        <p>Modeling neuronal functionality in PSPICE as an electrical circuit.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/rocky.jpg" alt= "Placeholder" class="img-rounded" width=200px height=250px />
                        <h4>Dr. Rocky Clancy</h4>
                        <p>Engineering Ethics.</p>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/amy.jpg" alt= "Placeholder" class="img-rounded" width=220px height=250px />
                        <h4>Dr. Amy Brewster</h4>
                        <p>Neuroethics.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/song.jpg" alt= "Placeholder" class="img-rounded" width=200px height=250px />
                        <h4>Dr. Yujia Song</h4>
                        <p>Biomedical Ethics.</p>
                    </div>
                </div>
                <br /><br />
            </div>
        </div>
        <div class="well card-1 text-dark">
            <div class="row text-center">
                <h1 id="projects">Projects</h1>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/EEG.jpg" alt= "EEG" class="img-rounded" width=300px height=250px />
                    </div>
                    <div class="col-md-6">
                        <br /><br />
                        <h4>Electroencephalogram (EEG)</h4>
                        <p>An EEG can be used to interpret the brain's neural activity at a low resultion for both clinical diagnostics and to develop assistive devices.</p>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/CoopWithDog.jpg" alt= "Zeus?" class="img-rounded" width=300px height=250px />
                    </div>
                    <div class="col-md-6">
                        <br /><br />
                        <h4>Dog Shelter</h4>
                        <p>We're partnering with Circle-K on volunteering in the local community, building biomedical instruments and devices to aid veterinarians and dogs alike.</p>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.well -->

<?php include '../footer.php'; ?>
