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
                <h3 class="text-center text-primary bg-info">Info Session will be in <b>ARMS B061</b> at <b>3:30 pm</b> on January 19th!</h3>
                <h4 class="text-center bg-success">Learning Sessions are pending approval for <b>ARMS B061</b> at <b>3:30 pm</b> on Saturdays. Finalized details are aimed to be in place by the end of our first week back.</h4>
                <h5 class="text-center bg-info">Please see our calendar in the Calendar tab above for more details and sessions as they're finalized</h5>

                <p class="text-justify">Software Saturdays aims to foster the learning of coding and languages, and give the Attendees a more rounded learning experience.</p>
                <p class="text-justify">The plan is to introduce projects and concepts that are useful in the world of Software Development. Regardless of what major our Attendees are pursuing, we aim to teach skills that will be usefull no matter what job or hobbies they pursue in their future.</p>
                <p class="text-justify">This semester's plan is to do an Android Application Development track showing the basics of Android Studio and healthy application design practices, both in a functional application and in a game aspect.</p>
                <p class="text-justify">The track was previously comprised of 5 semi bi-weekly sessions, 2-3 hours long with refreshments and breaks included, as well as review hours and two project days. Whether this system will be kept, or a weekly alternative will be adapted for the Android curriculum will hopefully be decided by the semester's second week.</p>
                <p class="text-center">For further questions, feel free to email <b>software-saturdays@purdueieee.org</b> for more information.</p>
            </div>

        </div>
    </div>
</div>

<?php include './staff.php';?>

<?php include '../footer.php';?>
