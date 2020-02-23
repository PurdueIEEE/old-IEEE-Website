<?php
    $page_title = '2020 Purdue IEEE Student of the Week Winners';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    include '../header.php';
?>

<div class="well card-1 text-dark">

    <!--- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <?php
                    $year = 2020;
                    include 'header.php';
                ?>
            </ul>
        </div>
    </div>
	<div class="row">
			<h2 style="text-align:center">Spring</h2>
	</div>
    <hr />

	<!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Tyler_Stagge_2020.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Tyler Stagge</h3>
            <h4>Week of February 17</h4>
            <p> Tyler Stagge is ROV Co-mechanical Lead. He is from Ohio and is in his last semester studying mechanical engineering at Purdue. Tyler has done 4 co-op rotations with Detroit Diesel. Tyler has brought lots of innovations to the ROV team like custom thruster ducts, and has mentored members on CAD skills, CAM for making their designs, and the actual machining of their parts. He plans to continue his education with a master's degree at Purdue University next year. Tyler has been heavily involved with the recent rennovations in the IEEE workspace. Thanks for your hard work Tyler!</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>

	    <!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Daniel_Chen_2020.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Daniel Chen</h3>
            <h4>Week of February 3</h4>
            <p> Daniel wrote the best code for the Computer Society machine learning/AI pong competition. His pong algorithm beat human players and clearly stood out from the others. Thanks for your hard work Daniel!</p>
            <p><em>Committee Involvement</em>: <?php echo COMPUTER_SOCIETY?></p>
        </div>
    </div>


    <!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/David_Ho_2020.png')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>David Ho</h3>
            <h4>Week of January 27</h4>
            <p>David is a sophomore from Fishers, Indiana studying material science engineering with minors in German and global engineering. His is in his second year on the ROV team.  He lead the workspace management for all of IEEE. For ROV, he has designed and manufactured the mounts for the cameras, inductive charger puck, the main tether, and the micro-ROV tether. Outside ROV, he is a part of the Titus research investigating directional investment casting, Purdue admissions ambassadors, and navigators. Thanks David!</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>

    <!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Cynthia_Zatlokowicz_2020.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Cynthia Zatlokowicz</h3>
            <h4>Week of January 13</h4>
            <p>Cynthia was very instrumental in organizing the information for the EAGLE workshops. Without her expertise and assistance, these workshops would not have been as effective. Thanks Cynthia!</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?>, <?php echo LEARNING?></p>
        </div>
    </div>

    

</div>

<?php include '../footer.php'; ?>