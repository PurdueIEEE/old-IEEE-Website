<?php 
	$title = 'IEEE ROV';
	include '../../header.php';
?>

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Committees</h1>
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/committees/">Committees</a></li>
				<li class="active">ROV</li>
			</ol>
		</div>
	</div>

	<!-- Content Row -->
	<div class="well">
		<div class="row">

			<!-- Sidebar Column -->
			<div class="col-md-3">
				<div class="list-group">
					<a href="/committees/partieee/" class="list-group-item">Aerial Robotics</a>
					<a href="/committees/csociety/" class="list-group-item">Computer Society</a>
					<a href="/committees/embs/" class="list-group-item">Engineering in Medicine and Biology Society</a>
					<a href="/committees/learning/" class="list-group-item">Learning Committee</a>
					<a href="/committees/orbital/" class="list-group-item">Orbital</a>
					<a href="/committees/racing/" class="list-group-item">Racing</a>
					<a href="#rov" data-toggle="collapse" class="list-group-item active">Remotely Operated underwater Vehicle</a>
					<div id="rov" class="panel-collapse collapse in">
						<ul class="list-group">
						<ul><a href="/committees/rov/history/" class="list-group-item">Past Seasons and Pictures</a></ul>
						<ul><a href="/committees/rov/bylaws/" class="list-group-item">Bylaws</a></ul>
						<ul><a href="/committees/rov/sponsors/" class="list-group-item">Sponsors</a></ul>
						<ul><a href="http://rovwiki.pieee.org/" class="list-group-item">Wiki</a> </ul>
					</ul>
					</div>  
				</div>
			</div>

			<!-- Content Column -->
			<div class="col-md-7 text-dark col-md-offset-1">
				<h2 class="text-center">ROV Team</h2>

				<p class="text-justify">The Remotely Operated underwater Vehicle (ROV) team was founded as a committee within Purdue IEEE Student 
				Organization in 2008 with a small but dedicated group of five students. Today, the team's mission is to foster 
				technical and professional skills of its members by designing, constructing, and testing an innovative 
				underwater vehicle to compete in the MATE Center International ROV Competition.</p>
				
				<p class="text-justify">The ROV team is comprised of both engineering and non-engineering students working collaboratively on a 
				hands-on project from the vehicle's design and prototyping phase, to its construction and testing, and ultimately 
				competition performance. The team fosters a multidisciplinary spirit so that the 
				best ideas may come forth. In addition to the mission, the MATE competition also requires a professional 
				presentation, public display poster, and technical documentation.</p>
				
				<p class="text-justify">Because the vehicle requires excellence in 
				design, construction, and presentation, the team members are themselves multidisciplinary collaborators and 
				experts in their own discipline. Members learn to communicate clearly 
				with each other and with clients while managing their own project responsibilities. Through various outreach events 
				during the year, the team aims to inspire future generations to enter STEM (Science, Technology, Engineering, 
				and Mathematics) fields.</p>
				
				<p class="text-justify">The team is eagerly preparing for the 2015 - 2016 competition at NASA's Neutral Buyouncy Lab in Houston, Texas from 
				June 23 - 25, 2016. For more current and past information view the links to the left or 
				contact <a href="mailto:krakos@purdue.edu">Kyle Rakos</a>.</p><br>
				
				<p class="text-center"><img src="/committees/rov/images/ROVCeruleanRender.jpg" alt="ROV Cerulean" style="width:90%"></p>
				
				<p class="text-center"><a href="https://www.facebook.com/purdueieeerov"><i class="fa fa-facebook-square fa-4x"></i></a></p>
			</div>
		</div> 
	</div>
	<!-- /.well -->  

<?php include '../../footer.php';?>