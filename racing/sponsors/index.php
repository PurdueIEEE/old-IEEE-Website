<?php
    $page_title = 'Sponsors';
    $site_title = 'IEEE Racing';
    $site_index = '/racing';
    include '../../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">

        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/racing/index.php" class="list-group-item">Main</a>
                <a href="/racing/history/" class="list-group-item">History</a>
                <a href="/racing/bylaws/" class="list-group-item">Bylaws</a>
                <a href="/racing/sponsors/" class="list-group-item active">Sponsors</a>
                <a href="/racing/alumni/" class="list-group-item">Alumni</a>
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-md-9 text-dark">
            <h1 class="text-center">Gold Sponsor</h1>
                <div class="row">
                    <div class="col-md-4 text-center">
                            <a href="http://www.purdue.edu/provost/">
                                <img src="/racing/images/sponsor_gold_Provost.png" alt="Purdue Provost" style="width:100%"></a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://www.trumpf.com/">
                            <img src="/racing/images/sponsor_gold_trumpf.png" alt="TRUMPF" style="width:100%"></a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://www.purdueesc.org/">
                            <img src="/racing/images/sponsor_gold_pesc.png" alt="Purdue PESC" style="width:100%"></a>
                    </div>
                </div>
            <br /><br />
            <h1 class="text-center">Silver Sponsor</h1>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <a href="https://www.harmonyhit.com">
                            <img src="/racing/images/sponsor_silver_HHIT.png" alt="Harmony Healthcare IT" style="width:100%"></a>
                    </div>
                </div>
        </div>
    </div>
</div>

<?php include '../../footer.php';?>
