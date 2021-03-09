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
            <h2>2019-21 Competition Plane</h2>
            <img style="width:80%; height:auto;" class="img-rounded" alt="2019-21 Competition Plane" src="images/2020_uav.jpg" />
            <hr />
            <h2 class="text-center">2021 Test Flight</h2>
            <img style="width:80%; height:auto;" class="img-rounded" alt="2021 Test Flight 1" src="images/2021_testflight_1.jpg"/>
            <br /><br />
            <iframe class="img-rounded" width="80%" height="315" src="https://www.youtube.com/embed/Hn3Vr8AKFJc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <hr />
            <h2>2020 Test Flight</h2>
            <img style="width:80%; height:auto;" class="img-rounded" alt="2020 Team Photo" src="images/2020_team.png" />
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