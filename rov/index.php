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

            <hr>

            <p><em>March, 2020 Update</em></p>
            <div>
                <p>
					The 2019-2020 season marked an exciting and bustling new season for the team. The team experienced its fourth change in captaincy with Grant Geyer heading the team. 
					Also new are many of the leads for the technical teams. The team pursued many new designs and approaches toward making X12, in addition to several refinements from ROV <i>Remora</i>. 
					The R&D department found new ethernet camerad that were more reliable and PoE compatible for a nearly independent camera system. 
					The major mechanical improvements include a faster and effective method of using a ring clamp to seal the logic electronics tube and 
					the use of 3D prints to house thrusters and to provide buoyancy in conjuntion with expanding marine foam. 
					With the suspension of all Purdue activities and the cancellation of the MATE competition, the team is now working at a very limited capacity to prepare ROV X12 for a pool test when available. 
					The team is excited to see its hard work come to completion when normal activities resume. 
                </p>
            </div>
            <hr>


            <br>

            <h2 class="text-center">About The ROV Team</h2>
            <div class="col-md-6">
                <img src="/rov/images/X11.png" alt="ROV X11" style="width:100%"
                     style="float:left" style="display:block">
                <p class="text-center">ROV <em>Remora</em></p>
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
                For more current and past information view the links to the left or contact <a href="mailto:rov@purdueieee.org">Grant Geyer</a>. The ROV team will be accepting new
                members at the beginning of each semester. The current team picture is below.
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
