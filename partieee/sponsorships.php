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
            let currentLink = "part-sponsorship-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
        <h1>Sponsorships</h2>
        <p>
        Without our generous sponsors, it would not be possible for our team to go to 
            competition. We are very thankful to the support provided by our sponsors.
        </p>

        <hr />
        <h2>Current Sponsors</h2>
        <p>
        The sponsors for the 2020-21 competition year.
        </p>
        <div style="display:flex; flex-flow: row wrap; justify-content: space-evenly; align-items: center">
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/insgc.jpg"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/nasa.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/northrop_grumman.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/blue_origin.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/mathworks.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/solidworks.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/soga.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/pesc.png"></div>
            <div style="margin: 20px;"><img style="width: 150px; height: auto; padding:5px;" src="images/sponsors/ieee_cis.png"></div>
        </div>

        <hr />
        <h2>Sponsorship Levels</h2>
        <p>We recognize corporate sponsors in the following ways: </p>
        <div class="text-left" style="padding-left:20%;">
        <h3><b>Black: $500</b></h3>
            <ul>
                <li>Recognition in journal and all presentations</li>
                <li>Small decal on either side of aircraft fuselage</li>
            </ul>
        <h3><b>Gold: $1000</b></h3>
            <ul>
                <li>Recognition in journal and all presentations</li>
                <li>Recognition on team website and social media platforms</li>
                <li>Small decal on either side of aircraft fuselage</li>
                <li>Large decal on one aircraft wing</li>
                <li>Resume book of interested team members</li>
            </ul>
        <h3><b>Boiler: $2500</b></h3>
            <ul>
            <li>Recognition in journal and all presentations</li>
            <li>Recognition on team website and social media platforms</li>
            <li>Small decal on either side of aircraft fuselage</li>
            <li>Larger decal on both aircraft wings</li>
            <li>Decal on aircraft tail</li>
            <li>Resume book of interested team members</li>
            <li>Logo on all team apparel</li>
        </div>

        <hr />
        <h2>Become a Sponsor</h2>
        <p>
        By supporting Purdue Aerial Robotics Team IEEE, your company will be helping 
            passionate and motivated students gain valuable experience that will enhance 
            their technical and professional skills. The UAS will be a key component 
            in outreach events to promote the benefits of STEM (science, technology, 
            engineering, and mathematics) fields and the students' respective career 
            opportunities. Your company logo will also appear with the team in the 
            view of its competitors, thereby expanding your company's presence among 
            students with design and hands-on technical experience. The Industrial Relations 
            arm of the Purdue IEEE Student Organization will also be available for hosting 
            and publicizing your visits to campus.
        </p>
        <div class="center-box">
            <h3 id="events"><b>Contact</b></h3>
            <h4 id="events">Matthieu Opdyke</h4>
            <h4 id="events">Sponsorship Coordinator</h4>
            <h4 id="events"><a href="mailto:partieeee@purdueieee.org">partieeee@purdueieee.org</a>
        </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
