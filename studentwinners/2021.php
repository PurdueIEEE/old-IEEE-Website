<?php
    $page_title = '2021 Purdue IEEE Student of the Week Winners';
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
            <p>
                Hadi is a sophomore in Computer Engineering from Naperville, IL. As the chair of Software Saturdays, 
                he helped increase participation and completion rate. Hadi is also involved with Aerial Robotics, 
                serving as the Electrical team lead, and Computer Society. When not in class, he enjoys all sorts of 
                outdoor activities, but mainly hiking and photography.
			</p>
            <p><em>Committee Involvement</em>: <?php echo SOFTWARE_SATURDAYS?>,  <?php echo PARTIEEE?>, <?php echo COMPUTER_SOCIETY?></p>
        </div>
    </div>


</div>

<?php include '../footer.php'; ?>
