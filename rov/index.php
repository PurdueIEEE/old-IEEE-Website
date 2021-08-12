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

            <p><em>August, 2021 Update</em></p>
            <div>
                <p>
                    Purdue ROV competed in Johnson City, TN at the East Tennessee State University
                    from August 5th to August 7th. The team is awaiting its place in the Explorer
                    category and won the Aloha Team Spirit Award. ROV Triton performed admirably
                    at competition, piloting smoothly for both bonus runs and the mission. The team
                    is very proud of its achievements and is excited to see what can be done in the
                    upcoming season as Katherine Sandys takes over as captain.
                </p>
            </div>
            <hr>


            <br>

            <h2 class="text-center">About The ROV Team</h2>
            <div class="col-md-6">
                <img src="/rov/images/ROV Triton Iso.png" alt="ROV Triton" style="width:100%"
                     style="float:left" style="display:block">
                <p class="text-center">ROV <em>Triton</em></p>
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

            <h2 class="text-center">2021 Competition Team Picture</h2>
            <a href="/rov/images/Team_at_competition_2021.jpg"
            <p class="text-center"><img src="/rov/images/Team_at_competition_2021.jpg" alt="2018 Team" style="width:100%"></p>
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
