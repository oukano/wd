<?php require_once("../includes/connexion_db.php");?>
<?php  include("../includes/layouts/header.php") ; ?>

<div id="page" class="row" >
<!-- Nav -->	
<div class="col-sm-3" id="navigation">

</div>
<!-- content -->
<div class="col-sm-9" id="content">

	<h1>Admin Menu </h1>
	<p>Welcome to the Admin area .</p>
	<ul>
		<li><a href="manage_content.php">Mange Website Content</a></li>
		<li><a href="manage_admins.php">Manage Admin Users</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

	<p>Copyright 2017 , Widget Corp .</p>

</div>

</div>

<?php include("../includes/layouts/footer.php"); ?>