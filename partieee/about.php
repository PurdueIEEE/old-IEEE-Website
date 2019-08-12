<?php
    $site_title = 'Aerial Robotics';
    $site_index = '/partieee';
    include '../header.php';
?>
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
      document.getElementById("bg-vid").playbackRate = .7;
    </script>
    <div class="well card-1 text-light">
            <div class="row text-center">
                <h1 id="officers">Officers</h1>
                <hr />
                <div class="row">
                    <div class= "col-md-4">
                        <h4>Milan Bidare</h4>
                        <p>Captain<br /><br /></p>
                    </div>
                    <div class= "col-md-4">
                        <h4>Mark Benati</h4>
                        <p>Vice-Captain<br /><br /></p>
                    </div>
                    <div class="col-md-4">
                        <h4>Humza Nasir</h4>
                        <p>Project Lead<br /><br /></p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class= "col-md-4">
                        <h4>Jacob Cottrell</h4>
                        <p>Sponsorship Coordinator<br /><br /></p>
                    </div>
                    <div class= "col-md-4">
                        <h4>Brian Helfrecht</h4>
                        <p>Electrical Lead<br /><br /></p>
                    </div>
                    <div class= "col-md-4">
                        <h4>Chris Jovanovic</h4>
                        <p>Software Lead<br /><br /></p>
                    </div>
                    <div class= "col-md-4">
                        <h4>Prateek Chamakura</h4>
                        <p>AeroMechanical Lead<br /><br /></p>
                    </div>
                </div>

            </div>
    </div>
    <div class="well card-1 text-light">
        <div class="row text-center">
            <h1 id="events">Sub-teams</h1>
            <hr />
            <br /><br />
        </div>
        <h2>AeroMechanical</h2>
        <p>The AeroMechanical sub-team of Purdue Aerial Robotics Team (IEEE) designs, builds, and tests a safe, mission effective platform for the AUVSI SUAS competition. The sub-team's goal is to provide team members a worthwhile, modern experience on aircraft design. The team has a strong emphasis on system design and manufacturing practicality. A rigorous engineering approach is applied from structures and propulsion, with training to provide any necessary skills to students of all skill and experience levels. FEA and CFD techniques are utilized along with traditional analysis and testing. Our designs are built around expertise in composites manufacturing, supported by precise 3D printed molds, to provide an efficient airframe while mirroring the ongoing changes in the industry.
        </p>
        <br />
        <img src="images/AeroMech.png" style="width: 100%">
        <br />
        <h2>Electrical</h2>
        <p>The electrical sub-team of Purdue Aerial Robotics Team (IEEE) is responsible for designing and implementing the plane's embedded hardware and software systems. The goals of this sub-team are to develop a safe, efficient system capable of navigating and collecting data about its surrounding environment with minimal human intervention.
            <br /><br />
            Much of the work done by the electrical sub-team involves both hardware and software and falls into the areas of communications, signal processing, and circuit design. Past projects have included the development of a custom flight controller, radio communications between the aircraft and its ground station, filter implementations for sensor systems, creation of autonomous flight control algorithms, and simulation design in MATLAB and Simulink to rapidly validate and improve existing navigation algorithms. To accomplish these tasks, the plane is outfitted with various sensors including an IMU, lidar, airspeed sensor, and GPS, among others, and software written in C, MATLAB, and Python. Lastly, the plane is temporarily controlled with a Pixhawk flight controller to ensure a working system at competition.
            <br /><br />
            The team's current goal is to prepare for competition by ensuring that the plane's flight data is properly sent to the server used to judge the aircraft's abilities. This involves writing communication scripts in Python to ensure all data is sent and received correctly. Over the next year, the electrical sub-team hopes to redesign the current flight control system to create a new system that is more capable and easier to use for future competitions.
        </p>
        <br />
        <img src="images/Electrical.png" style="width: 100%">
        <br />
        <h2>Software</h2>
        <p>The software sub-team of Purdue Aerial Robotics Team (IEEE) is responsible for designing and implementing the UAV's computer vision system. The goal of this sub-team is to develop a robust and accurate system which can identify multiple characteristics of various objects on the ground with minimal human intervention.
           <br /><br />
           The software sub-team works with image processing libraries, such as openCV, to filter incoming pictures and extract necessary data. More recently, the team has also incorporated machine learning libraries, such as Keras, to increase detection accuracy. Additionally, past projects have included reading image data from our camera and implementing a communication system between the aircraft computer vision boards and the ground station. The team also maintains a custom ground control station. Developed from scratch, this system displays telemetry from our aircraft and sends necessary data to the judging station for competition.
           <br /><br />
           Our team is committed to pushing the limits of current technology and computer science. So, the team's current, year-long goal is to create a computer vision system which entirely runs on the aircraft. This includes all image processing, object detection, and object classification, which improves our system by allowing the aircraft to perform object detection tasks without a connection to the ground station.
        </p>
    </div>

<?php include '../footer.php'; ?>