<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>
<style>
    .center-box{
        width: 300px;
        border: 5px solid white;
        padding: 25px;
        margin: 25px;
    }
</style>
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
      document.getElementById("bg-vid").playbackRate = .6;
    </script>
<div class="well card-1 text-light">
    <div class="row text-center">
        <h1 id="events">Sponsors</h1>
        <p>Without our generous sponsors, it would not be possible for our team to go to competition. We are very thankful for the support provided by our sponsors.
        </p>
        <br />
        <img src="images/ECE.png" style="width: 50%">
        <img src="images/IEEE.png" style="width: 50%">
        <img src="images/solidworks.png" style="width: 50%">
        <img src="images/northropgrumman.png" style="width: 50%">

        <h1 id="events">Acknowledgement</h1>
        <br />
    </div>
    <div class "row-text-list" style="padding-left: 30%;">
        <p>We recognize corporate sponsors in the following ways:</p>
        <ul>
            <li>Aerial Robotics Partner Colonel: $3,500</li>
            <ul>
            	<li>Recognition in Journal Paper and on Sponsor Board</li>
            	<li>Logo on Back of Team Shirts</li>
            	<li>Large Sticker on the Vehicle</li>
            	<li>Recognition in Official Team Press Release to Media</li>
            </ul>
            <li>Aerial Robotics Partner Major: $2,000</li>
            <ul>
            	<li>Recognition in Journal Paper and on Sponsor Board</li>
	            <li>Logo on Back of Team Shirts</li>
                <li>Small Sticker on the Vehicle</li>
            </ul>
            <li>Aerial Robotics Partner Captain: $1,500</li>
            <ul>
                <li>Recognition in Journal Paper and on Sponsor Board</li>
	            <li>Small Sticker on the Vehicle</li>
            </ul>
            <li>Aerial Robotics Partner Lieutenant: $500</li>
            <ul><li>Recognition in Journal Paper and on Sponsor Board</li></ul>
        </ul>
    </div>
    <div class="row text-center">
        <br /><br />
        <h1 id="events">Interested In Sponsoring Us?</h1>
        <br />
        <p>By supporting Purdue Aerial Robotics Team IEEE, your company will be helping passionate and motivated students gain valuable experience that will enhance their technical and professional skills. The UAS will be a key component in outreach events to promote the benefits of STEM (science, technology, engineering, and mathematics) fields and the students' respective career opportunities. Your company logo will also appear with the team in the view of its competitors, thereby expanding your company's presence among students with design and hands-on technical experience. The Industrial Relations arm of the Purdue IEEE Student Organization will also be available for hosting and publicizing your visits to campus.
        </p>
        <br />
        <div style="padding-left: 34%;">
            <div class="center-box">
                <h2 id="events">CONTACT:</h2>
                <h4 id="events">Dakota Do</h4>
                <h4 id="events">Sponsorship Coordinator</h4>
                <h4 id="events"><a href="mailto:do18@purdue.edu">do18@purdue.edu</a>
            </div>

        </div>
        <br />
    </div>
</div>

<?php include '../footer.php'; ?>
