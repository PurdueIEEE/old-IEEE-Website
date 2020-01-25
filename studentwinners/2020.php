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
    <br>

    

</div>

<?php include '../footer.php'; ?>