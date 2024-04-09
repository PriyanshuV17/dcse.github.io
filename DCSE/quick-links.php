<?php $current_uri = $_SERVER['REQUEST_URI']; ?>
<div class="card shadow rounded">
	<h5 class="fw-bold bg-primary p-2 ps-4 mb-0 rounded">Quick Links</h5>

	<nav class="navigation">
		<ul class=" list-group list-group-flush mainmenu">
				<li class="list-group-item"><h6 class="mb-0">
					<a class="" href="CS&Edepartment.php"><i class="fa fa-home"></i> Home</a>
					</h6>
				</li>
			<?php if ($current_uri != '/DCSE/academics.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="academics.php">
					<span class='bi bi-mortarboard-fill'></span> Academics</a>
				</li>
			<?php } ?>
				<!-- <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-lightbulb-fill'></span> Research <span class='bi bi-chevron-down' style="float:right;"></span></a></h6>
										<ul class="submenu">
											<li ><a href="research-patent.php">Res- A (Patent)</a></li>
		   <li lass="list-group-item"><a href="research-project.php">Res- B (Project)</a></li>

											<li lass="list-group-item"><a href="research-publications.php">Res- C (Publications)</a></li>
										</ul>
									</li> -->
			<?php if ($current_uri != '/DCSE/faculty.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="faculty.php"><span class='bi bi-people-fill'></span> People</a></li>
			<?php } ?>
				<!-- <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='fa fa-users me-2'></span> Research  Scholars<span class='bi bi-chevron-down' style="float:right;"></span></a></h6>
										<ul class="submenu">
											<li ><a href="research-scholars.php">Ph.D’s awarded per teacher during the year</a></li>
											<li lass="list-group-item"><a href="PHDScholar.php">Profile PhD Scholars </a></li>

										</ul>
									</li> -->
			<?php if ($current_uri != '/DCSE/research-scholars.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="research-scholars.php">
					<span class='fa fa-users me-2'></span> Research  Scholars</a></h6>
				</li>
			<?php } ?>
			<?php if ($current_uri != '/DCSE/Student corner.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="Student corner.php">
					<span class='bi bi-file-person'></span> Student’s Corner</a>
				</li>
			<?php } ?>
			<?php if ($current_uri != '/DCSE/committee.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="committee.php">
					<span class='bi bi-person-workspace'></span> Committee</a>
				</li>
			<?php } ?>
					
			<?php if ($current_uri != '/DCSE/membership.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="membership.php">
					<span class='bi bi-person-workspace'></span> Membership</a>
				</li>
			<?php } ?>
					
			<?php if ($current_uri != '/DCSE/outreach.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="outreach.php">
					<span class='bi bi-person-workspace'></span> Outreach</a>
				</li>
			<?php } ?>
					
			<?php if ($current_uri != '/DCSE/announcements.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="announcements.php">
					<span class='bi bi-person-workspace'></span> Announcements</a>
				</li>
			<?php } ?>
					
					
				<!-- <li class="list-group-item"><h6 class="mb-0"><a href="/DCSE/faculty.php"> <span class='bi bi-file-person'></span> Faculty   </a></li> -->
			<?php if ($current_uri != '/DCSE/events.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="events.php">
					<span class='bi bi-calendar4-week'></span> Events</a>
				</li>
			<?php } ?>
			<?php if (true) { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-pin-map-fill'></span> Placement</a></li>
			<?php } ?>
				<!-- <li class="list-group-item"><h6 class="mb-0"><a href="#"><span class='bi bi-award'></span> Recognition by National/International Repute </a></li>
		 <li class="list-group-item"><h6 class="mb-0"><a href="E-Content.php"><span class='bi bi-envelope'></span> E-Content (Swayam/MooCs etc.)</a></li> -->
			<?php if ($current_uri != '/DCSE/contactus.php') { ?>
				<li class="list-group-item"><h6 class="mb-0"><a href="contactus.php">
					<span class='bi bi-telephone-fill'></span> Contact Us</a>
				</li>
			<?php } ?>
		</ul>
	</nav>
</div>