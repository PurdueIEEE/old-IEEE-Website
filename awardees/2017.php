<?php
    $page_title = '2017 Award Winners';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    $root = true;
    include '../header.php';
?>

    <div class="well card-1 text-dark">

        <!--- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <?php
                        $year = 2017;
                        include 'header.php';
                    ?>
                </ul>
            </div>
        </div>

        <hr />

        <!-- Presidential Award -->
        <div class="row">

            <div class="col-md-3">
                <div class="officer-cropped"
                    style="background-image: url('/images/awardees/Carolyn_Lewelling_P2017.jpg')">
                </div>
            </div>
            <div class="col-md-9">
                <h3>Carolyn Lewelling</h3>
                <h4>Presidential Award</h4>
                <p>Awarded by 2016-2017 President Aditya Vaidyam for contributing to Purdue IEEE as the 2015-2016 Secretary, promoting leadership development and member growth, supporting inter-committee relations, and encouraging mentorship in the community</p>
                <p><em>Committee Involvement</em>: <a href="/rov/">ROV</a></p>
            </div>
        </div>

        <hr>
        <!-- Executive Committee Award -->
        <div class="row">
            <div class="col-md-3">
                <div class="officer-cropped"
                    style="background-image: url('/images/awardees/Brandon_Stewart_EC2017.jpg')">
                </div>
            </div>
            <div class="col-md-9">
                <h3>Brandon Stewart</h3>
                <h4>Executive Committee Award</h4>
                <p>Awarded by the 2016-2017 IEEE Executive Committee for leading a project group not focused on robotics, maintaining communications and the mailing list, and server maintenance</p>
                <p><em>Committee Involvement</em>: <a href="/csociety/">Computer Society</a>, <a href="/rov/">ROV</a></p>
            </div>
        </div>

        <hr>
        <!-- Student Branch Award -->
        <div class="row">
            <div class="col-md-3">
                <div class="officer-cropped"
                    style="background-image: url('/images/awardees/Sophia_Duan_SB2017.jpg')">
                </div>
            </div>
            <div class="col-md-9">
                <h3>Yuqin "Sophia" Duan</h3>
                <h4>Student Branch Award</h4>
                <p>Awarded by the 2016-2017 members of Purdue IEEE Student Branch for extraordinary service to continue the Learning Committee as a way to teach members value skills, introduction of research interests into IEEE, and friendliness to all members</p>
                <p><em>Committee Involvement</em>: <a href="/learning">Learning</a>, <a href="/rov">ROV</a></p>
            </div>
        </div>


    </div>

<?php include '../footer.php'; ?>
