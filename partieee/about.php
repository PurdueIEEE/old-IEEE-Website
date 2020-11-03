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
            let currentLink = "part-about-sidelink";
            document.getElementsByClassName(currentLink)[0].classList.add("active");
        </script>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1 text-center">
            <h2>About PARTIEEE</h2>
            <p>The Purdue Aerial Robotics Team IEEE (PARTIEEE) was founded back in 1996 as a committee within the Purdue IEEE
                Student Organization. The Purdue Aerial Robotics Team mission is to create an Unmanned Aerial System (UAS) to 
                compete in the Association for Unmanned Vehicle Systems International Student Unmanned Air Systems (AUVSI SUAS) Competition.
			<hr />
			PARTIEEE consists of both engineering and non-engineering focuses. The engineering goals are
                to create mathematical and physical models, construct prototypes, and develop a final, mission-ready
                system. The non-engineering goals are to develop relationships with companies, encourage a collaborative
                work environment, communicate effectively with team members, and provide learning opportunities for
                students of any discipline and experience level. Achieving these goals will help us develop a UAS that
                meets the rigorous standards demanded by the competition, in order to succeed as a team.
			<hr />
			PARTIEEE prides itself on its student leadership, perseverance, and desire to excel in
                all frontiers. Furthermore, team members are constantly striving to learn the technical skills necessary
                to bring the design to fruition, including 3D-modeling in SolidWorks and CATIA V5, designing the PCB in
                Eagle Pro, and programming in C, C++, Python, MATLAB, and JavaScript.
            </p>
            
            <hr />
            <div class="row text-center">
            <h2 id="officers">Leadership</h2>
                <h4>Nathan Broman</h4>
                <em>Aerospace Engineering</em>
                <p>Aerial Robotics Captain</p>
                <div class="row text-center">
                    <!--Dakota Do-->
                    <div class= "col-md-4">
                        <h4>Dakota Do</h4>
                        <em>Aerospace Engineering</em>
                        <p>Aeromechanical Lead</p>
                    </div>
                    <!--Alex Rodgers-->
                    <div class= "col-md-4">
                        <h4>Alex Rogers</h4>
                        <em>Computer Engineering</em>
                        <p>Software Lead</p>
                    </div>
                    <!--Hadi Ahmed-->
                    <div class= "col-md-4">
                        <h4>Hadi Ahmed</h4>
                        <em>Computer Engineering</em>
                        <p>Electrical Lead</p>
                    </div>
                    <!--Tyler Fedrizzi-->
                    <div class= "col-md-4">
                        <h4>Tyler Fedrizzi</h4>
                        <em>Computer Engineering</em>
                        <p>Autonomy Lead</p>
                    </div>
                    <!--Alex Zhang-->
                    <div class= "col-md-4">
                        <h4>Alex Zhang</h4>
                        <em>Finance, Supply Chain Business Analytics</em>
                        <p>Sponsorship Coordinator</p>
                    </div>
                </div>
            </div>
            
            <hr />
            <div class="row text-center">
                <h2 id="events">Sub-teams</h2>
                <h3>Aeromechanical</h3>
                <p>
                The AeroMechanical sub-team of Purdue Aerial Robotics Team designs, builds, and tests a safe, 
                    mission effective platform for the AUVSI SUAS competition. The sub-team's goal is to provide team members 
                    a worthwhile, modern experience on aircraft design. The team has a strong emphasis on system design and 
                    manufacturing practicality. A rigorous engineering approach is applied from structures and propulsion, with 
                    training to provide any necessary skills to students of all skill and experience levels. FEA and CFD techniques 
                    are utilized along with traditional analysis and testing. Our designs are built around expertise in composites 
                    manufacturing, supported by precise 3D printed molds, to provide an efficient airframe while mirroring the 
                    ongoing changes in the industry.
                </p>

                <h3>Electrical</h3>
                <p>
                The electrical sub-team of PARTIEEE is responsible for designing and implementing the plane's 
                    embedded hardware and software systems. The goals of this sub-team are to develop a safe, 
                    efficient system capable of navigating and collecting data about its surrounding 
                    environment with minimal human intervention. Much of the work done by the electrical 
                    sub-team involves both hardware and software and falls into the areas of communications, 
                    flight controls, and autonomy. 
                    <br /><br />
                    Current projects include the development of custom flight control software, radio communications 
                    between the aircraft and its ground station, telemetry sensor data collection, creation of 
                    autonomous flight algorithms, and mission simulation design to rapidly validate and improve 
                    existing navigation algorithms. To accomplish these tasks, the plane is outfitted with various 
                    sensors including an IMU, airspeed sensor, and GPS, among others. It's software is written 
                    in C and Python.
                    <br /><br />
                    The electrical sub-team strives to design and implement robust, professional solutions on board 
                    the UAV. We constantly research and improve to allow the UAV to perform to its maximum levels each year.
                </p>

                <h3>Software</h3>
                <p>
                The software sub-team of PARTIEEE is responsible for designing and 
                    implementing the UAV's computer vision system. The goal of this sub-team is to develop a 
                    robust and accurate system which can identify multiple characteristics of various objects 
                    on the ground with minimal human intervention.
                    <br /><br />
                    The software sub-team works with image 
                    processing libraries, such as openCV, to filter incoming pictures and extract necessary 
                    data. More recently, the team has also incorporated machine learning libraries to increase 
                    detection accuracy. The team is tasked with identifying targets from the air and numerous 
                    characteristics about these targets including shape, color, alphanumeric values, and location. 
                    Additionally, there exists a communication system between the aircraft camera and the ground 
                    station. The team runs some of its algorithms on board the aircraft, but the majority are 
                    processed on the ground via the communication system.
                    <br /><br />
                    Our team is committed to pushing the 
                    limits of current technology and computer science. So, the team's current, year-long goal 
                    is to create a computer vision system as well as an image database to identify these 
                    targets with high amounts of accuracy. Our work this year is starting from the ground up 
                    and will set the team up for success for many years to come.
                </p>
            </div>

        </div>
    </div>
</div>

<?php include '../footer.php'; ?>