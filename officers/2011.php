<?php
    $page_title = '2011 Officers';
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
                        $year = 2011;
                        include 'header.php';
                    ?>
                </ul>
            </div>
        </div>

        <hr />
        <!-- President -->
        <div class="row">
            <div class="col-md-3">
                <div class="officer-cropped"
                    style="background-image: url('/images/officers/Seth.jpg')">
                </div>
            </div>
            <div class="col-md-9">
                <h3>Seth Baklor</h3>
                <h4>President and Remotely Operated underwater Vehicle (ROV) Committee Chair</h4>
                <p></p>
                <p><em>Committee Involvement</em>: <a href="/rov/">ROV</a></p>
            </div>
        </div>
        <!-- /.row -->
    </div>

<?php include '../footer.php'; ?>
