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
            <h4 class="text-center"><b>software-saturdays@purdueieee.org</b></h4>
            <!-- Selection Row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-group row">
                      <h4>
                          <a href="attendee.php" class="text-center list-group-item list-group-item-info col-xs-4 col-xs-offset-2">Join as an Attendee</a>
                          <a href="mentor.php" class="text-center list-group-item list-group-item-info col-xs-4">Join as a Mentor</a>
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

            <div class="border border-dark">
                <h3 class="text-center text-primary bg-info">Learning Sessions will be in <b>ARMS B061</b> at <b>3:30 pm</b> starting February 2nd, weekly!</h3>
                <h4 class="text-center bg-success"><b>Project Day #2</b>, April 13th, is in <b>ARMS 1010</b> from <b>2:30 to 6:30 pm</b>. The rest of the project days will be at the same time, but in <b>ARMS B061</b>.</h4>
                <h5 class="text-center bg-info">Please see our calendar in the Calendar tab above for more details on sessions, review hours, and project days</h5>

                <p class="text-justify">Software Saturdays aims to foster the learning of coding and languages, and give the Attendees a more rounded learning experience.</p>
                <p class="text-justify">The plan is to introduce projects and concepts that are useful in the world of Software Development. Regardless of what major our Attendees are pursuing, we aim to teach skills that will be usefull no matter what job or hobbies they pursue in their future.</p>
                <p class="text-justify">This semester we're teaching an Android Application Development track, showing the basics of Android Studio and healthy application design practices, both in a functional application and in a game aspect.</p>
                <p class="text-justify">The track will be comprised of weekly Saturday sessions around 1.5 hours long with refreshments included, as well as review hours and two to four ending project days that attendees can attend to work during or for help.</p>
                <p class="text-center">For further questions, feel free to email <b>software-saturdays@purdueieee.org</b> for more information.</p>
            </div>

        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
