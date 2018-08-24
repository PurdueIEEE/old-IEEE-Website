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
                    <div class="fill" style="background-image:url('./images/TeamPhoto.jpg');"></div>
                    <div class="carousel-caption"><h2>2017-2018 Purdue Aerial Robotics Team</h2></div>
            </header>
        </div>
    </div>
    <?php
        include 'navigation.php';
    ?>
    <div class="well card-1 text-light">
        <div class="row text-center">
            <h1 id="mission">Mission</h1>
            <hr />
			<p>The Purdue Aerial Robotics Team IEEE was founded back in 1996 as a committee within the Purdue IEEE
                Student Organization. The team's mission is to create an Unmanned Aerial System (UAS) to compete in the
                Association for Unmanned Vehicle Systems International Student Unmanned Air Systems (AUVSI SUAS)
                Competition. This competition will take place in Webster Field, Maryland in 2018. The team, consisting
                of AeroMechanical, Electrical, and Software sub-teams, develops a comprehensive system that performs
                various autonomous tasks.
			<br /><br />
			The Aerial Robotics Team consists of both engineering and non-engineering focuses. The engineering goals are
                to create mathematical and physical models, construct prototypes, and develop a final, mission-ready
                system. The non-engineering goals are to develop relationships with companies, encourage a collaborative
                work environment, communicate effectively with team members, and provide learning opportunities for
                students of any discipline and experience level. Achieving these goals will help us develop a UAS that
                meets the rigorous standards demanded by the competition, in order to succeed as a team.
			<br /><br />
			Purdue Aerial Robotics Team prides itself on its student leadership, perseverance, and desire to excel in
                all frontiers. Furthermore, team members are constantly striving to learn the technical skills necessary
                to bring the design to fruition, including 3D-modeling in SolidWorks and CATIA V5, designing the PCB in
                Eagle Pro, and programming in C, C++, Python, and JavaScript.
			</p>
        </div>
    </div>
    <div class="well card-1 text-light">
        <div class="row text-center">
            <h1 id="officers">Contact Us</h1>
            <hr />
            <div class="row text-center">
                <!--Ellie-->
                <img src="../images/officers/2018_Bidare_Milan.jpg" alt= "" class="img-circle" width=250px height=250px />
                <h4>Milan Bidare</h4>
                <p>Captain</p>
                <p><a href="mailto:mbidare@purdue.edu">mbidare@purdue.edu</a><br /></p>
            </div>
        </div>
    </div>

<?php include '../footer.php'; ?>
