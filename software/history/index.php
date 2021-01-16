<?php
    $site_title = 'IEEE Software Saturdays';
    $site_index = '/software/';
    include '../../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">
        <!-- Content Column -->
        <div class="col-md-12 text-dark">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="/software" class="list-group-item">Software Saturdays</a>
                    <a href="/software/attendee" class="list-group-item">Join as an Attendee</a>
                    <a href="/software/mentor" class="list-group-item">Join as a Mentor</a>
                    <a href="/software/history" class="list-group-item active">Past Sessions</a>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <h1 class="text-center">Software Saturdays</h1>
                <h4 class="text-center">Contact us at: <a href="mailto:software-saturdays@purdueieee.org">software-saturdays@purdueieee.org</a></h4>
                <div class="col-xl-12">
                    <img src="/software/images/logo_white.jpg" alt="Software Saturdays Logo" style="width:50%" class="center-block">
                </div>

                <div class="">
                    <h5 class="text-center">For all previous code, visit <a href="https://github.com/SoftwareSaturdays/">our GitHub page</a>.</h5>
                    <ul >
                        <li>2018
                            <ul>
                                <li>Spring 2018 was the first semester of Software Saturdays!</li>
                                <li>The topic during the Spring and Fall semesters was making a full stack website and web server</li>
                                <li>Software used: HTML/CSS, JavaScript, JQuery, SQLite3, NodeJS</li>
                            </ul>
                        </li>
                        <li>2019
                            <ul>
                                <li>The topic during the Spring and Fall semesters was making Android apps</li>
                                <li>Software used: Java, Android Studio, Firebase</li>
                            </ul>
                        </li>
                        <li>2020
                            <ul>    
                                <li>The topic during the Spring and Fall semesters was web app development</li>
                                <li>Software used: HTML/CSS, JavaScript, ReactJS, NodeJS</li>
                                <li>Fall 2020: <a href="https://hadiahmed098.github.io/pokedex">PokeDex</a></li>
                            </ul>   
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include '../staff.php';?>

<?php include '../../footer.php';?>