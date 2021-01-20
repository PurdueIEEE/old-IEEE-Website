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
                    $year = 2021;
                    include 'header.php';
                ?>
            </ul>
        </div>
    </div>
	
    <hr/>
	<div class="row">
			<h2 style="text-align:center">Spring</h2>
	</div>

    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/2020_Hadi_Ahmed.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Hadi Ahmed</h3>
            <h4>Week of January 18</h4>
            <p>Hadi has gone above and beyond as an IEEE officer and member -- his dedication to our student branch is outstanding.
				This past semester, he increased the completion rate of Software Saturdays many-fold compared to previous semesters.
				His clear and concise teaching style is something many of my past professors should aspire towards.
				Hadi has led the Aerial Robotics electrical subteam.
				To top it off, Hadi has helped significantly with the upkeep of our website and administrative interface.
				Hadi has been very active in CSociety as well.
			</p>
            <p><em>Committee Involvement</em>: <?php echo SOFTWARE?>, <?php echo CSOCIETY?>, <?php echo PARTIEEE?></p>
        </div>
    </div>


</div>

<?php include '../footer.php'; ?>
