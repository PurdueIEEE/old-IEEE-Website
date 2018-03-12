<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>
    <?php
        include 'navigation.php';
    ?>
    <link href="/assets/bootstrap.partieee.css" rel="stylesheet">
    <!-- Content Row -->

    <div class="fullscreen-bg">
    <video loop muted autoplay poster="images/Genie.jpg" id="bg-vid" class="fullscreen-bg__video">
        <source src="videos/backgroundl" type="video/webm">
    </video>
    </div>
    <script type="text/javascript">
      /* set playback rate for bg video */
      document.getElementById("bg-vid").playbackRate = .7;
    </script>
<div class="well card-1 text-light">
    <div class="row text-center">
        <h1 id="events">Project Updates</h1>
        <hr />
        <br /><br />
    </div>
</div>

<?php include '../footer.php'; ?>
