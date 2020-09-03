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
        <h4 class="text-center"><b>Contact us at: <a href="mailto:software-saturdays@purdueieee.org">software-saturdays@purdueieee.org</a>  </b></h4>
            <!-- Selection Row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-group row">
                      <h4>
                          <a href="attendee.php" class="text-center list-group-item list-group-item-info col-xs-4 col-xs-offset-1">Join as an Attendee</a>
                          <a href="mentor.php" class="text-center list-group-item list-group-item-info col-xs-4 col-xs-offset-2">Join as a Mentor</a>
                      </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <img src="./images/tcoffeecode.jpg" alt="Software Saturdays Logo" style="width:100%" style="float:left" style="display:block">
                </div>
            </div>
            <hr>

            <div class="border border-dark">
                <h3 class="text-center text-primary bg-info">Learning Sessions will be on WebEx from 3:30pm-5:30pm, every Saturday!</h3>
                <h3 class="text-center bg-info">WebEx Link <a href="https://purdue-student.webex.com/purdue-student/j.php?MTID=m68f0330821e4ab9106d526094dfce814">Here</a><h3>
                <h4 class="text-center bg-info">Please see the <b><i>Calendar</i></b> tab above for more details on sessions, review hours, and project days</h5>

                <p class="text-justify">Software Saturdays aims to introduce progamming frameworks and software development, and give the attendees a rounded project-based learning experience.</p>
                <p class="text-justify">The plan is to introduce projects and concepts that are useful in the world of Software Development. Regardless of what major our Attendees are pursuing, we aim to teach skills that will be useful no matter what job or hobbies they pursue in their future.</p>
                <p class="text-justify">This semester we're teaching a Web Application Development curriculum, showing the basics of React.js and healthy application design practices, both in a functional application and project based curriculum building a PokeDex style Web App.</p>
                <p class="text-justify">The track will be comprised of weekly Saturday sessions around 2 hours long with refreshments included, as well as review hours that attendees can attend to work during or for help.</p>
                <p class="text-center">For further questions, feel free to email <b>software-saturdays@purdueieee.org</b> for more information.</p>
                <p class="text-center">Join us on Slack as well at <a href="https://softwaresaturdays.slack.com">softwaresaturdays.slack.com</a> (requires a Purdue email address).</p>
            </div>

        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
