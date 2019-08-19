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
                style="background-image: url('/images/officers/2018_Topi_Ellie.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Ellie Topi</h3>
            <h4>Executive Choice Award</h4>
            <p>Ellie exemplifies the traits of IEEE leadership. Over this past year, she has taken on a responsibility much greater than that which was simply assigned. </p>
            <p><em>Committee Involvement</em>: <?php echo PARTIEEE?></p>
        </div>
    </div>

    <hr>
    <!-- New Member Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/2019_Schweitzer_Jerome.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Jerome Schweitzer</h3>
            <h4>New Member Choice Award</h4>
            <p>Jerome has shown himself to be dedicated to Purdue IEEE. He continues to work hard and challenges himself to do more than is asked.</p>
            <p><em>Committee Involvement</em>: <?php echo SOCIAL.", ".COMPUTER_SOCIETY?></p>
        </div>
    </div>

    <hr>
    <!-- Student Choice Award -->
    <div class="row">
        <div class="col-md-3">
            <div class="officer-cropped"
                style="background-image: url('/images/officers/.jpg')">
            </div>
        </div>
        <div class="col-md-9">
            <h3>Tyler Stagge</h3>
            <h4>Student Choice Award</h4>
            <p>Tyler is a 3rd year ROV member and Mechanical Lead. He took over as mechanical lead in the Spring semester and has dedicated well over 100 hours to making sure the power enclosure, logic enclosure, and frame were finished on time.</p>
            <p><em>Committee Involvement</em>: <?php echo ROV?></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>