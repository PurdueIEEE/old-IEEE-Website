<?php
    $page_title = '2018 Award Winners';
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
                    $year = 2018;
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
                style="background-image: url('/images/officers/2018_Sibley_Ian.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Ian Sibley</h3>
            <h4>Executive Choice Award</h4>
            <p></p>
            <p><em>Committee Involvement</em>: <?php echo ROV.", ".SOFTWARE_SATURDAYS?></p>
        </div>
    </div>

    <hr>
    <!-- New Member Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/awardees/2018_New_Member_Ankit_Maewall.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Ankit Maewall</h3>
            <h4>New Member Choice Award</h4>
            <p></p>
            <p><em>Committee Involvement</em>: <?php echo INDUSTRIAL_RELATIONS?></p>
        </div>
    </div>

    <hr>
    <!-- Student Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/2018_King_Jason.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Jason King</h3>
            <h4>Student Choice Award</h4>
            <p></p>
            <p><em>Committee Involvement</em>: <?php echo LEARNING.', '.ROV?></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>
