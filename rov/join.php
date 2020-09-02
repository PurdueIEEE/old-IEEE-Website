<?php
$page_title = 'Join the ROV Team';
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
        	var currentLink = "rov-join-sidelink";
        	document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1">

            <h2 class="text-center">Join ROV</h2>

			<p>
				The ROV Fall 2020 Info Session will be held at Wednesday, September 9th at 6:30 in ME 1130 (pending approval).
				Though not prefered, the info session can be joined virtually, in the
				ROV channel of the <a href="https://discordapp.com/invite/fFNnKPK">IEEE Q&A discord</a>
			</p>

            <p>
                The ROV team brings together expertise in electronics, mechanics, and software in order to create an
                unrivaled vehicle. We strive to finish first place in the world, and we are therefore looking for
                dedicated and talented members to help us achieve this goal! If you enjoy being a part of a fast-paced
                team and learn quickly look no further.
            </p>

            <p>
               Applications for the 2020 Fall semester are now open!
               <u><a href="https://docs.google.com/forms/d/e/1FAIpQLSeth3z0i0iMqrmDyHHm2cs1e6QQc7lPG10GdWTnvpd2SOX43Q/viewform?usp=sf_link">here</a></u>.
               Applications must be filled out by 11:59 pm on Friday, September 11th. If you have any questions please reach out to Grant Geyer at <a href="mailto:rov@purdueieee.org">rov@purdueieee.org</a>.
               <hr>
               <!--
               <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfH-CqASDCHd7Ufl6dEkFcpMXlWsgE0pazMNHB8NVjM82jhiA/viewform?usp=sf_link"
                       width="700" height="700" frameborder="0" marginheight="0" marginwidth="0">
                   Loading...
               </iframe>
               -->
            </p>

        </div>

    </div>
</div>
<!-- /.well -->

<?php include '../footer.php'; ?>
