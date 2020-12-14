<?php
    $site_title = 'IEEE Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>

<link href="/assets/bootstrap.partieee.css" rel="stylesheet">

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Sidebar Column -->
        <?php include 'navigation.php' ?>
        <script>
            let currentLink = "part-media-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>
        
        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
            <h2 class="text-center">2019-21 Competition UAV</h2>
            <img src="images/2020_uav.jpg" alt="Competition UAV" style="width:75%" class="img-rounded">
            <br /><br />
            <h2 class="text-center">2019-21 CAD Model</h2>
            <img src="images/2020_cad.jpg" alt="UAV CAD Model" style="width:75%" class="img-rounded">
            <br /><br />
            <h2 class="text-center">2020 First Test Flight</h2>
            <img src="images/2020_team.png" alt="First Test Flight" style="width:75%" class="img-rounded">
            <br /><br />
            <h2 class="text-center">Social Media</h2>
            Below is where you can find PART on social media.
            <br/><br />
            <a style="padding: 5px;" href="https://www.youtube.com/channel/UCDyoVLkPq5463PZMnQ-G2hA/" target="_blank"><i class="fa fa-youtube-square fa-5x"></i></a>
            <a style="padding: 5px;" href="https://www.instagram.com/purdueaerialrobotics/" target="_blank"><i class="fa fa-instagram fa-5x"></i></a>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>