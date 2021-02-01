<?php
$site_title = 'Purdue IEEE'; //Creates The Site Title Equivalent to <title>
$site_index = '/'; //Root Index.
//Output js in footer to load carousel
$carousel = true; //Carousel Plugin (Slideshow) set true
include 'header.php'; //Include keyword, preprocesses the header.php file
?>
    <div class="row">
        <div class="col-lg-12">
            <!-- Header Carousel -->
            <header id="myCarousel" class="carousel slide card-2">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill" style="background-image:url('/images/ieee.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>IEEE</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image:url('/images/2019_fall_ieee_callout.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>IEEE Callout: Fall 2019</h2>
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
                        <div class="fill" style="background-image:url('/images/mtt-s.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>MTT-S</h2>
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
    <br><br><!--<br><br><br><br><br>-->

    <!-- Elections -->
    <!-- <div class="well card-1 text-dark">
        <div class="row">
            <div class="col-md-12">
                <h2><b>Elections</b></h2>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="media-body">
                        <?php //include 'elections.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Code Cafe Banner -->
    <!--<a href="codecafe/index.php" style="text-decoration:none" target="_blank">
    <<div class="well card-1 text-dark">
        <br><br>
            <h1 style = "text-align: center;"> Code Cafe </h1>
            <h2 style = "text-align: center;"> Saturday, November 9 </h2>
            <h3 style = "text-align: center;"> Click to Learn More </h3>
        <br><br>
    </div>
    </a>
    <br> -->

    <!-- Info Sessions -->
    <div class="well card-1 text-dark">
		<h2 style = "text-align: center;"> Our General Callout is on Wed 1/27 from 6:30-8:00 PM over the <a href="https://discord.gg/kZNkKXM" target="_blank">IEEE Q&A Discord.</a> If you couldn't attend, you can watch a <a href="https://youtu.be/ccfHtdQs2-I" target="_blank">YouTube prerecording</a>. Please see our <a href="/calendar.php">calendar</a> for upcoming events, and <a href="/join.php">join IEEE!</a></h2>
        <h2 style="margin-top: 0; text-align: center">
            <a href="https://docs.google.com/presentation/d/1qsCByNTLfFwjoCGVxDREy0kgfFliv3MGgO-E7ACN5Wc/edit?usp=sharing"
               target="_blank">Spring 2021 Callout Slides</a></h2>
        <?php include 'info_sessions.php'; ?>
    </div>


<!-- About Section -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="well card-1 text-center text-dark">
                <div class="panel-heading">
                    <style>#event:before {
                            content: "event";
                        }</style>
                    <i id="event" class="material-icons" style="color:#072a40; font-size: 96px;"></i>
                </div>
                <div class="panel-body">
                    <h4>Events and Meetings</h4>
                    <p><a href="/calendar.php">Check our calendar for upcoming events!</a></p>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="well card-1 text-center text-dark">
                <div class="panel-heading">
                    <style>#chat:before {
                            content: "chat";
                        }</style>
                    <i id="chat" class="material-icons" style="color:#072a40; font-size: 96px;"></i>
                </div>
                <div class="panel-body">
                    <h4>Want to chat or have questions?</h4>
                    <p><a href="https://purdueieee.slack.com/signup">Join us on Slack!</a><br>Chat with us in the #ieee
                        channel!</p>
					<p><a href="/join.php">More Join Info</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="well card-1 text-center text-dark">
                <div class="panel-heading">
                    <style>#email:before {
                            content: "email";
                        }</style>
                    <i id="email" class="material-icons" style="color:#072a40; font-size: 96px;"></i>
                </div>
                <div class="panel-body">
                    <h4>Contact Us</h4>
                    <p>Contact us for more information at<br><a href="mailto:IEEE@purdue.edu">IEEE@purdue.edu</a>, or
                        stop by EE 014</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Committee List -->
    <div class="well card-1 text-dark">
        <div class="row">
            <div class="col-md-12">
                <h2><b>What we do</b></h2>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="pull-left">
                        <img src="/images/IEEE-Kite-Blue.svg" style="height: 32px; margin-left: 16px;">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Purdue IEEE</h4>
                        <p>Purdue IEEE is devoted to technical achievements, professional development, learning
                            workshops, and social events. The Purdue IEEE Student Branch is split into several
                            committees. Each technical committee is focused on a different goal, but all of them strive
                            to further the technical abilities of members by focusing on certain projects or specialty
                            knowledge. In addition to the technical aspects, we also help our members enter their
                            professional careers, learn engineering software and hands-on skills, and socialize with
                            others to form lasting connections inside and outside of this organization.</p><br>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#laptop_mac:before {
                                    content: "laptop_mac";
                                }</style>
                            <i id="laptop_mac" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/csociety/">Computer Society</a></h4>
                            <p>The IEEE Computer Society is a quirky bunch of folks who love the ins and outs of using
                                computers. They hold education sessions, do small projects, and frequently discuss both
                                the ubiquitous services and the latest and greatest software and trends that form the
                                basis of the information age.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#local_hospital:before {
                                    content: "local_hospital";
                                }</style>
                            <i id="local_hospital" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/embs/">EMBS</a></h4>
                            <p>The IEEE Engineering in Medicine and Biology Society (EMBS) focuses on the development
                                and application of engineering concepts and methods to provide new solutions to
                                biological, medical, and healthcare problems while also providing its members the
                                ability to learn skills and gain experience beneficial throughout the rest of their
                                careers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#rss_feed:before {
                                    content: "rss_feed";
                                }</style>
                            <i id="rss_feed" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/mtts/">MTT-S</a></h4>
                            <p>IEEE Microwave Theory & Techniques Society (MTT-S) holds events to further the
                                understanding and applications of radio-frequency and microwave circuits. The growth of
                                communications and imaging techniques around us relies on the continued development of
                                high-frequency technologies that students here develop.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#local_airport:before {
                                    content: "local_airport";
                                }</style>
                            <i id="local_airport" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/partieee/">Aerial Robotics</a></h4>
                            <p>The IEEE Aerial Robotics Team creates an unmanned aerial system (UAS) to compete in
                                AUVSI SUAS Competition. The end goal is to develop an autonomous system complete with a
                                Ground Control Station (GCS). They are looking for members to help design the airframe,
                                develop autopilot and image processing algorithms, and design electrical hardware such
                                as flight controllers and other PCBs.</p><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#settings:before {
                                    content: "settings";
                                }</style>
                            <i id="settings" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/rov/">ROV</a></h4>
                            <p>Remotely Operated underwater Vehicle (ROV) designs and constructs an ROV to compete in
                                the Marine Advanced Technology Education (MATE) International ROV Competition each year.
                                They are looking for members to model designs in 3D, machine and 3D print them, design
								circuit schematics and printed circuit boards, populate circuit boards, develop the control
								software, create the pilot interface, interface with sensors, and create computer vision algorithms.
                                </p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#directions_car:before {
                                    content: "directions_car";
                                }</style>
                            <i id="directions_car" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/racing/">Racing</a></h4>
                            <p>Racing builds an electric go-kart to compete in evGrandPrix at Purdue and at the Indy
                                Motor Speedway. They are looking for members to redesign some systems, help get sponsors
                                for new batteries, further improve safety features, and investigate more efficient
                                motors.</p><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <style>#software:before {
                                    content: "developer_board";
                                }</style>
                            <i id="software" class="material-icons" style="color:#072a40; font-size: 32px;"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/software/">Software Saturdays</a></h4>
                            <p>
                                Software Saturdays is committed to developing comprehensive software development skills
                                in attendees. Lessons are open to the public and are funded by the College of Engineering.
                                Skills taught in the past have included Web and Android Development. Emphasis is placed on
                                teaching a comprehensive set of skills over a single language.
                            </p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>