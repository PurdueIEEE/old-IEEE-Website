<?php 
    $title = 'Purdue IEEE';

    //Output js in footer to load carousel
    $carousel = true;
    include 'header.php';
?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Purdue IEEE</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Header Carousel -->
            <header id="myCarousel" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('/images/ieee.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>IEEE</h2>
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
                        <div class="fill" style="background-image:url('/images/learning.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Learning Committee</h2>
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

    <!-- Upcoming Event List -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Join IEEE:</h2>
        </div>
    </div>

    <div class="well text-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="media-body">
                        <?php include 'events.html' ?>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <!-- Committeee List -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">What we have to offer:</h2>
        </div>
    </div>

    <div class="well text-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Purdue IEEE</h4>
                        <p>Purdue IEEE is devoted to technical achievements and social events. The Purdue chapter of the IEEE is split into several committees. Each committee is focused on a different goal, but all of them strive to further their technical achievements. In addition to the technical aspects, we are also a social organization. We hold events for our members to meet and greet each other and members of other organizations.</p><br>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/committees/csociety/">Computer Society</a></h4>
                            <p>The IEEE Computer Society. They recently reunited with Purdue IEEE. They hold education sessions, do small projects, and provide web services for many different organizations on campus. Their site is at csociety.org. Check there for updates! </p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class= "fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-medkit fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/committees/embs/">EMBS</a></h4>
                            <p>The IEEE EMBS (Engineering in Medicine and Biology Society) focuses on the development and application of engineering concepts and methods to provide new solutions to biological, medical, and healthcare problems while also providing its members the ability to learn skills and gain experience beneficial throughout the rest of their careers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                	<div class="media">
                		<div class="pull-left">
                			<span class="fa-stack fa-2x">
                				<i class="fa fa-circle fa-stack-2x text-primary"></i>
                				<i class="fa fa-signal fa-stack-1x fa-inverse"></i>
                			</span>
                		</div>
                		<div class="media-body">
                			<h4 class="media-heading"><a href="/committees/mtts/">MTT-S</a></h4>
                			<p>IEEE MTT-S (Microwave Theory & Techniques Society) holds events to further the understanding and applications of microwave circuits. The growth of communications around us relies on the continued development of high-frequency technologies that students here develop.</p><br>
                		</div>
                	</div>
                </div>
                
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-fighter-jet fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/committees/partieee/">PARTIEEE</a></h4>
                            <p>Purdue Aerial Robotics Team IEEE creates an unmanned aerial system (UAS) to compete in AUVSI SUAS Competition. The end goal is to develop an autonomous system complete with a Ground Control Station (GCS). They are looking for members to help design the airframe, develop autopilot and image processing algorithms, and design electrical hardware such as flight controllers and other PCBs.</p><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="http://www.purdueorbital.com">Purdue Orbital <i class="fa fa-external-link" style="margin-left: 5px;"></i></a></h4>
                            <p>Our goal is to further space flight technology through designing, testing, and implementing systems to achieve orbit for small satellite platforms at an affordable price. This multi-disciplinary team is focused on utilizing Faculty and Industry resources to provide the first formal Purdue design, build, test rocket team.</p><br>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/committees/racing/">Racing</a></h4>
                            <p>Racing builds an electric go-kart to compete in evGrandPrix at Purdue and at the Indy Motor Speedway. They are looking for members to redesign some systems, help get sponsors for new batteries, further improve safety features, and investigate more efficient motors.</p><br>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/committees/rov/">ROV</a></h4>
                            <p>ROV (Remotely Operated underwater Vehicle) designs and builds an ROV to compete in the MATE (Marine Advanced Technology Education) International ROV Competition each year. They are looking for members to model designs in 3D, restore old vehicles, and assemble next year's vehicle.</p><br>
                        </div>
                    </div>
                </div>
			</div>

        </div>
    </div>

    <!-- About Section -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Information:</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center text-dark">
                <div class="panel-heading">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <h4>Events and Meetings</h4>
                    <p><a href="/calendar.php">Check our calendar for upcoming events!</a></p>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center text-dark">
                <div class="panel-heading">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <h4>Want to chat or have questions?</h4>
                    <p><a href="https://purdueieee.slack.com/signup">Join us on Slack!</a><br>Chat with us in the #ieee channel!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-default text-center text-dark">
                <div class="panel-heading">
                    <span class="fa-stack fa-5x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <h4>Contact Us</h4>
                    <p>Contact us for more information at<br><a href="mailto:IEEE-Info@purdueieee.org">IEEE-Info@purdueieee.org</a>, or stop by at EE 014</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

<?php include 'footer.php'; ?>
