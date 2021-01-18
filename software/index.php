<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Content Column -->
        <div class="col-md-12 text-dark">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="/software" class="list-group-item active">Software Saturdays</a>
                    <a href="/software/attendee" class="list-group-item">Join as an Attendee</a>
                    <a href="/software/mentor" class="list-group-item">Join as a Mentor</a>
                    <a href="/software/history" class="list-group-item">Past Sessions</a>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <h1 class="text-center">Software Saturdays</h1>
                <h4 class="text-center">Contact us at: <a href="mailto:software-saturdays@purdueieee.org">software-saturdays@purdueieee.org</a></h4>
                <div class="col-xl-12">
                    <img src="/software/images/logo_white.jpg" alt="Software Saturdays Logo" style="width:50%" class="center-block">
                </div>

                <!-- Session Specific Information -->
                <div class="alert alert-info text-center">
                    <h4>Learning Sessions will be on Zoom from 3:30pm-5:30pm, every Saturday!</h4>
                    <h4>Meeting <a href="https://purdue-edu.zoom.us/j/94050037139?pwd=SzNhY3hxWHZDNzNXSFdVdUdqTTFxUT09">Link</a> - Meeting ID: 940 5003 7139 - Meeting Passcode: SofSat</h4>
                    <!-- <h4>Software Saturdays has ended for Fall 2020. Please join us next semester!</h4> -->
                    <h4>Please see the <b><i>Calendar</i></b> tab above for more details on sessions, review hours, and project days</h4>
                </div>

                <p class="text-justify">Software Saturdays aims to introduce progamming frameworks, software development, and give the attendees a project-based learning experience.</p>
                <p class="text-justify">The goal is to introduce projects and concepts that are useful regardless of what major our attendees are pursuing. We aim to teach skills that will be applicable no matter what job or hobbies our attendees pursue in the future.</p>
                <p class="text-justify">This semester we're teaching a Web Application Development curriculum, showing the basics of VueJS and healthy application design practices, both in a functional application and project based curriculum building a basic To-Do web app.</p>
                <p class="text-justify">The program will be comprised of weekly Saturday sessions around 2 hours long, as well as review hours that attendees can attend for help.</p>
                <p class="text-center">For further questions, feel free to email <b>software-saturdays@purdueieee.org</b> for more information.</p>
                <p class="text-center">Join us on Slack as well at <a href="https://softwaresaturdays.slack.com">softwaresaturdays.slack.com</a> (requires a Purdue email address).</p>
            </div>
        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
