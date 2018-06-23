<!-- Navigation -->
<div id="header">
    <div id="headerTitle" onclick="window.open('index.php','_self');">Benjamin Floyd Rubin</div>
    <div class="button" id="menuButton">
        <label class="material-icons" style="font-size:30px" id="menuButton" onclick="openMenu();">menu</label>
    </div>
    <div id="navLinks">
	 	<div class="navLink"><a href="index.php">HOME</a></div>
	 	<div class="navLink"><a href="aboutMe.php">ABOUT ME</a></div>
	 	<div class="navLink"><a href="myWork.php">MY WORK</a></div>
	 	<div class="navLink"><a href="contact.php">CONTACT</a></div>
	 	<div class="navLink"><a href="https://www.soundcloud.com/benja_music/" target="_blank">MUSIC</a></div>
    </div>
</div>
    <div id="mobileMenu">
    	<div id="closeButton"><label class="material-icons" style="font-size:25px" id="menuButton" onclick="closeMenu();">close</label></div>
    	<div class="mobLink"><a href="index.php">HOME</a></div>
	 	<div class="mobLink"><a href="aboutMe.php">ABOUT ME</a></div>
	 	<div class="mobLink"><a href="myWork.php">MY WORK</a></div>
	 	<div class="mobLink"><a href="contact.php">CONTACT</a></div>
	 	<div class="mobLink"><a href="https://www.soundcloud.com/benja_music/" target="_blank">MUSIC</a></div>
    </div>
<div class="contentPadding"></div>

<script>
	function openMenu() {
		$("#mobileMenu").fadeIn(150);
	}
	function closeMenu() {
		$("#mobileMenu").fadeOut(150);
	}
</script>

<!-- End of navigation -->