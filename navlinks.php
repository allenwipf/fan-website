<?php 

	
	$currentPage = $_SERVER['REQUEST_URI'];
 
?>


<div> 
	<div style="float:left" id ="logo">

	    <img src="/images/logo.png" width="150" alt="logo of mountain" id = "logopic"> 

	</div>
	    
	<div style="float: right" id="links">
           
		<?php 

		if($currentPage == "/index.php") {
			$homeicon = '"/images/homeiconblue.png"';
		} else {
			$homeicon = '"/images/homeicongrey.png"';
		}

		?>

	    <a href="index.php"><img src=<?php echo $homeicon ?> width="20" alt ="home link"></a> 
	    <a <?php if($currentPage == "/external_links.php") {echo 'class="current"';}?> href="external_links.php">Links</a>
	    <a <?php if($currentPage == "/cool_videos.php") {echo 'class="current"';}?> href="cool_videos.php">Cool Videos</a>
	    <a <?php if($currentPage == "/about_me.php") {echo 'class="current"';}?> href="about_me.php">About Me</a>

	</div> 

</div>