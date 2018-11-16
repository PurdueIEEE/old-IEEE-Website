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
            <p>Within ROV, Ian has taken on more responsibility this year as a project group head and has run his group smoothly. He went above and beyond what was expected of him this year by balancing his ROV leadership responsibilities with his Software Saturdays responsibilities, which he picked up midway through the semester. He has performed extremely well with both groups, and hasn't let his commitment to one decrease the quality of his work in the other.</p>
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
            <p>Ankit joined IEEE with a mission to bring industry leaders to students and our members to learn about different industries. Ankit has excelled at this under the Industrial Relations committee hosting and planning 6 talks in his short time with IEEE. As a new member, Ankit has proven he is willing to work hard and set great examples for the future Industrial Relation events.</p>
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
            <p>Jason rose to Electrical Team Lead this year after being Cameras and Sensors Project Group Head in the spring last year. He has helped grow the technical knowledge within the Electrical Team and built up a great atmosphere. He has also helped run several soldering workshops throughout the year to the benefit of everyone who has participated in them.</p>
            <p><em>Committee Involvement</em>: <?php echo LEARNING.', '.ROV?></p>
        </div>
    </div>

</div>

<?php include '../footer.php'; ?>
