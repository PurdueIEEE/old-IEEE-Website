<?php
$site_title = 'IEEE ROV';
$site_index = '/rov';
include '../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">

        <!-- Sidebar Column -->
        <?php include "sidebar.html"; ?>
        <script>
        	var currentLink = "rov-main-sidelink";
        	document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1">
            <h2 class="text-center">Remotely Operated underwater Vehicle (ROV) Team</h2>
            <br>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/LLdWLpjvKGs?start=315" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h6>Watch our 2021 Qualification video!</h6>

            <a href="https://www.youtube.com/channel/UCulNgY7xUYSKOSEMDmpFFqA">
                <h4>See our latest pool runs and more on our YouTube page!</h4>
	        </a>

            <hr>

            <p><em>April, 2020 Update</em></p>
            <div>
                <p>
					After a unique year of meetings with covid precautions and a half completed vehicle to be
					finished, the team has qualified for the 2021 MATE World Competition! Grant Geyer guided
					the team through the many shifts and sought to consolidate designs for reliability, technical
					challenge, and feasbility. Several innovations were introduced such as a resin printed pneumatic
					manifold, a USB borescope camera system, and continual improvements. The team looks forward to
					continuing its frequent pool tests and practicing as much as possible before the competition.
					Next year, Katherine Sandys will head the team and lead it to new innovations and achievements.
                </p>
            </div>
            <hr>


            <br>

            <h2 class="text-center">About The ROV Team</h2>
            <div class="col-md-6">
                <img src="/rov/images/ROV X12 transparent small.png" alt="ROV X12" style="width:100%"
                     style="float:left" style="display:block">
                <p class="text-center">ROV <em>X12</em></p>
            </div>

            <p class="text-justify">
                The Remotely Operated underwater Vehicle (ROV) team was founded as a committee within Purdue IEEE
                Student Organization in 2008 with a small but dedicated group of five students. Today, the team's
                mission is to foster technical and professional skills of its members by designing, constructing, and
                testing an innovative underwater vehicle to compete in the MATE Center International ROV Competition.
            </p>

            <p class="text-justify">
                The ROV team is comprised of both engineering and non-engineering students working collaboratively on a
                hands-on project from the vehicle's design and prototyping phase, to its construction and testing, and
                ultimately competition performance. The team fosters a multidisciplinary spirit so that the best ideas
                may come forth. In addition to the mission, the MATE competition also requires a professional
                presentation, public display poster, and technical documentation.
            </p>

            <p class="text-justify">
                Because the vehicle requires excellence in design, construction, and presentation, the team members are
                themselves multidisciplinary collaborators and experts in their own discipline. Members learn to
                communicate clearly with each other and with clients while managing their own project responsibilities.
                Through various outreach events during the year, the team aims to inspire future generations to enter
                STEM (Science, Technology, Engineering, and Mathematics) fields.
            </p>

            <p class="text-justify">
                For more current and past information view the links to the left or contact <a href="mailto:rov@purdueieee.org">Katherine Sandys</a>.
				The ROV team will be accepting new members at the beginning of each semester. The current team picture is below.
            </p>

            <h2 class="text-center">2018-2019 Team Picture</h2>
            <a href="/rov/images/2019_MATE_Competition_Team.jpg"
            <p class="text-center"><img src="/rov/images/2019_MATE_Competition_Team.jpg" alt="2018 Team" style="width:100%"></p>
            </a>
            <br>

            <p class="text-center"><a href="https://www.facebook.com/purdueieeerov"><i
                            class="fa fa-facebook-square fa-4x"></i></a></p>
            <br>
        </div>
    </div>
</div>
<!-- /.well -->

<?php include '../footer.php'; ?>
