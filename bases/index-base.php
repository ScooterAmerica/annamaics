<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
	<head>
		<title>Project Title</title>
		<link rel="stylesheet" href="/resources/css/foundation-main.css" />
		<link rel="icon" 
		      type="image/png" 
		      href="http://scooter.deadcodersociety.org/resources/images/scooter.png">
		<link rel="stylesheet" href="/resources/css/site-specific/footer.css" />
		<link rel="stylesheet" href="/resources/css/site-specific/project-posts.css" />
		<script src="/resources/js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="page-wrapper">
		<div class="page-header">
			<?php
				$project = '<project-name>'; // **** FILL THIS OUT TO MAKE LIFE EASIER ****
				include($_SERVER['DOCUMENT_ROOT'].'/resources/menus/menu.php');
				$IMAGE_ROOT_PATH = '/resources/images/projects/'.$project.'/'.$project.'-photos'; 
			?>
		</div>
		<div class="page-content">
			<?php
				include ($_SERVER['DOCUMENT_ROOT'].'/resources/project-posts/'.$project.'.php');
			?>

			<div>
				<a class="button round info" href="/projects">Back to Projects</a>
			</div>
		</div>

		<script src="/resources/js/vendor/jquery.js"></script>
		<script src="/resources/js/foundation.min.js"></script>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/resources/menus/footer-menu.php'); ?>
		</div>
	</body>
</html>
