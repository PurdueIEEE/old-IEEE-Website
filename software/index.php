<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../header.php';
?>
<style>
    #centerside{
        width: 100%;
    }
</style>
<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Content Column -->
        <div class="col-xs-8 text-dark col-xs-offset-2">
            <h2 class="text-center">Software Saturdays</h2>
            <h5 class="text-center">Email us at: <b>software-saturdays@purdueieee.org</b></h5>
            <!-- Selection Row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-group row">
                      <h4>
                          <a href="attendee.php" class="text-center list-group-item list-group-item-info col-xs-4 col-xs-offset-2">Join as an Attendee</a>
                          <a href="mentor.php" class="text-center list-group-item list-group-item-info col-xs-4">Join as a Mentor</a>
                          <a href="android.php" class="text-center list-group-item list-group-item-info col-xs-6 col-xs-offset-3">Join as an Android Assistant</a>
                      </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <img src="./images/tcoffeecode.jpg" alt="Software Saturdays Image" style="width:100%" style="float:left" style="display:block">
                </div>
            </div>
            <hr>

            <h5 class="text-center bg-success">Learning Sessions are semi-bi-weekly, starting in <b>ARMS B061</b> from <b>3:30 pm to 6:30 pm</b> on <b>September 15th</b></h5>
            <h5 class="text-center bg-success">Please see our calendar in the Calendar tab above for more details and further sessions</h5>

            <p class="text-justify">Software Saturdays is the brand new event fostering the learning of coding and languages, with an aim to give the Attendees a more rounded learning experience.</p>
            <p class="text-justify">The plan is to introduce projects and concepts that are useful in the world of Software Development. Regardless of what major our Attendees are pursuing, we aim to teach skills that will be usefull no matter what job or hobbies they pursue in their future.</p>
            <p class="text-justify">This semester's plan is to do a beginner's Web Development track showing the basics of databases, servers, web page is hosting, and how information flows between them. We'll be using SQLite for the database, ExpressJS for the server (a NodeJS library), and a straightforward HTML, CSS, and JavaScript web page, with helpful Frameworks like jQuery and Bootstrap to minimize code (and work).</p>
            <p class="text-justify">The track is comprised of 5 semi bi-weekly sessions, 2-3 hours long with refreshments and breaks included, for learning the concepts and tools. There will be two 4 hour Project Day sessions afterwards, for Mentors to aid Attendees with the final project. Each Thursday following a session there will be afternoon review hours for questions, general help, and review as well.</p>
            <p class="text-justify">Also, look out for next semester when we take a look into the basics of Android App Development. The curriculum is currently under development, so we'll post more details closer to the Spring semester.</p>
            <p class="text-justify">For further questions, feel free to email <b>software-saturdays@purdueieee.org</b> for more information.</p>

        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
