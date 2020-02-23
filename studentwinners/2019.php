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
                    $year = 2019;
                    include 'header.php';
                ?>
            </ul>
        </div>
    </div>
	<div class="row">
			<h2 style="text-align:center">Fall</h2>
	</div>
    <hr />

<!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Ryan_Donoghue_2019.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Ryan Donoghue</h3>
            <h4>Week of December 2</h4>
            <p>Ryan is a sophomore and a member of the Engineering Medical and Biology Society. He has gone above and beyond in leading our mechanical team and working on our headphone project. Worked overtime to ensure his members learned new techniques and took it upon himself to deliver a fantastic exterior design! Thanks Ryan!</p>
            <p><em>Committee Involvement</em>: <?php echo EMBS?>
        </div>
    </div>
    <br/>

<!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Jonathan_Heidegger_2019.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Jonathan Heidegger</h3>
            <h4>Week of November 18</h4>
            <p>Our second student of the week is Jonathan Heidegger, is a sophomore studying Computer Science with a minor in German from Brownsburg, IN. Jonathan joined the team in Spring 2019 and dove into the software development. He picked up on the ROV environment quickly and wrote several of the sensor nodes. For the current school year, Jonathan has tested multiple thruster control algorithms and tracked the dataflow and connection systemwide between the pilot's controller and the physical outputs on the ROV. Jonathan has been helpful getting members started in ROS and getting the ROV into a reliable, working state. Outside of ROV, he plays tenor saxophone in the Purdue All-American Marching band and in the Men's basketball pep band. He is a FIRST alum and a member of Purdue FIRST Programs helping coordinate the competition events on the regional team.</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>
    <br/>

<!-- New Awardee -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/images/Aidan_Fisher_2019.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Aidan Fisher</h3>
            <h4>Week of November 11</h4>
            <p>We want to recognize Aidan for his help administrating Code Cafe. He helped a lot of students with his clear instructions and made lots of important announcements. Thanks Aidan!</p>
            <p><em>Committee Involvement</em>: <?php echo LEARNING?></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>