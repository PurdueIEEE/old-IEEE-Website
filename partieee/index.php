<?php
    $site_title = 'IEEE Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>

<link href="/assets/bootstrap.partieee.css" rel="stylesheet">

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <?php include 'navigation.php'; ?>
        <script>
            let currentLink = "part-home-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
            <img src="images/part_logo_rect.png" />
            <h2 id="mission">Mission</h2>
            <p>
			The Purdue Aerial Robotics Team mission is to create an Unmanned Aerial System (UAS) to compete in the
                Association for Unmanned Vehicle Systems International Student Unmanned Air Systems (AUVSI SUAS)
                Competition. This competition will take place in Webster Field, Maryland in 2021. The team consists
                of Aeromechanical, Electrical, and Software sub-teams.
            </p>
            <hr />
            <h2 class="text-center">Join</h2>
            Our team takes any student, regardless of major, experience, or class. To join, sign up for our Slack at <a href="https://partieee.slack.com">https://partieee.slack.com</a>. 
                If you have any questions, please email us at <b><a href="mailto:partieee@purdueieee.org">partieee@purdueieee.org</a></b>.
            <hr />
            <h2 class="text-center">2021 Test Flight</h2>
            <img src="images/2021_testflight_1.jpg" alt="First 2021 Test Flight" style="width:100%" class="img-rounded">

            <br />
            <hr />
            <div class="well card-1 text-dark">
            <div class="row text-center">
            <h2 id="officers">Leadership</h2>
            <hr />
                <!--Nathan Broman-->
                <img src="/images/officers/2021_Matthieu_Opdyke.jpg" alt= "2021_Matthieu_Opdkye" class="img-circle" width=150px height=150px />
                <h4>Matthieu Opdyke</h4>
                <em>Aerospace Engineering</em>
                <p>Aerial Robotics Captain</p>
            <hr />
                <div class="row text-center">
                    </div>
                    <!--Eric O'Keefe-->
                    <div class= "col-md-4">
                        <h4>Eric O'Keefe</h4>
                        <em>Mechanical Engineering</em>
                        <p>Aeromechanical Lead</p>
                    </div>
                    <!--Alex Rodgers-->
                    <div class= "col-md-4">
                        <h4>Alex Rogers</h4>
                        <em>Computer Engineering</em>
                        <p>Software Lead</p>
                    </div>
                    <!--Hadi Ahmed-->
                    <div class= "col-md-4">
                        <h4>Hadi Ahmed</h4>
                        <em>Computer Engineering</em>
                        <p>Electrical Lead</p>
                    </div>
                    <!--Tyler Fedrizzi-->
                    <div class= "col-md-4">
                        <h4>Tyler Fedrizzi</h4>
                        <em>Computer Engineering</em>
                        <p>Autonomy Lead</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<?php include '../footer.php'; ?>
