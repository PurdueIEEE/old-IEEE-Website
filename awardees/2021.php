<?php
    $page_title = '2019 Award Winners';
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

    <hr />

    <!-- Executive Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/awardees/2021_Grant_Geyer.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Grant Geyer</h3>
            <h4>Executive Choice Award</h4>
            <p>In recognition for his adept leadership as Captain of ROV (Fall 2019 - Spring 2021) and for his continual aid to the Purdue IEEE Student Branch at large.</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>

    <hr>
    <!-- New Member Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/2021_Siwen_Hu.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Siwen Hu</h3>
            <h4>New Member Choice Award</h4>
            <p>In recognition for her bold initiative, vision, and creativity within the Purdue IEEE Social and Learning Committees and for her promising potential as an Executive Officer.</p>
            <p><em>Committee Involvement</em>: <?php echo SOCIAL.", ".LEARNING?></p>
        </div>
    </div>

    <hr>
    <!-- Student Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/studentwinners/awardees/2021_Scott_Hotchkiss.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Scott Hotchkiss</h3>
            <h4>Student Choice Award</h4>
            <p>In recognition by his peers for his transformative influence on ROV as R&D Lead, pioneering many technical ventures, mentoring members, and enriching the Purdue IEEE community.</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>

    <hr>
    <!-- Special this year: Impact award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/2021_Hadi_Ahmed.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Hadi Ahmed</h3>
            <h4>Impact Award</h4>
            <p>In recognition for his exceptional impact, leadership, and devotion to Purdue IEEE members as Chair of Software Saturdays and as Electrical Lead of Aerial Robotics.</p>
            <p><em>Committee Involvement</em>: Committee Involvement</em>: <?php echo SOFTWARE_SATURDAYS?>, <?php echo PARTIEEE?>, <?php echo COMPUTER_SOCIETY?></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>