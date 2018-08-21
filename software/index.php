<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software';
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
        <div class="col-md-8 text-dark col-md-offset-2">
            <h2 class="text-center">Software Saturdays</h2>
            <h5 class="text-center">Email us at: <b>software-saturdays@purdueieee.org</b></h5>
                <!-- Selection Row -->
                <div class="col-md-12">
                    <div class="list-group row">
                      <h4>
                          <a href="attendee.php" class="text-center list-group-item list-group-item-info col-xs-3 col-xs-offset-1">Join as an Attendee</a>
                          <a href="mentor.php" class="text-center list-group-item list-group-item-info col-xs-3">Join as a Mentor</a>
                          <a href="android.php" class="text-center list-group-item list-group-item-info col-xs-5">Join as an Android Assistant</a>
                      </h4>
                    </div>
                </div>
            <hr>
            <img src="/software/images/tcoffeecode.jpg" alt="Software Saturdays Image" style="width:100%" style="float:left" style="display:block">
            <hr>

            <p class="text-justify">
                Software Saturdays is the brand new event that's the offspring of Code Café, which has been very popular
                in the past (and we hope will continue to be). Software Saturdays would like to expand on that idea,
                fostering the learning of coding and languages, but with a twist. Namely, we want to give the students a
                more rounded learning experience.
            </p>
            <p class="text-justify">
                This required an expansion on the idea of Code Café. Rather than one Saturday, the track is comprised of
                5 to 6 Saturdays. The first 4 to 5 sessions will be 3 hours long, and for learning the parts that will
                be necessary for the project. The last day will be the project day, and the students will have 6 hours
                to work on the project and tie all those pieces together. The sessions will be held bi-weekly to allow
                the students to work on their components in between the sessions, and each off week there will be office
                hours held in case students come across questions as well.
            </p>
            <p class="text-justify">
                The plan is to introduce projects and concepts that are useful in the world of software development. The
                projects that will be pursued during each semester will be picked based on what would be useful in
                engineering contexts, but that doesn't mean they're not useful beyond the bounds of engineering.
                Regardless of what major our students are pursuing, we aim to teach them a skill that will be usefull no
                matter what job or hobbies they pursue in their future.
            </p>
            <p class="text-justify">
                This semester's plan is to do a beginner's web development track, showing the basics of how a webpage is
                hosted by a server, and how information typically flows between the page, the server, and a database.
                We'll be using MySQL Workbench for the database, the Nodejs module Express for the server (and its mysql
                module to talk to the database), and a straightforward HTML, CSS, and JavaScript/jQuery webpage.
            </p>
            <p class="text-justify">
            For further questions or interest, especially in attending or mentoring and teaching, feel free to email
            <b>software-saturdays@purdueieee.org</b> for more information.
            </p>
        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
