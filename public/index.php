<?php require_once("../includes/connexion_db.php");
 include("../includes/layouts/header.php") ; 
$subjects=$db->query('select menu_name from subjects');
	 if(!$subjects){die("Error in Query ");}

?>

<div id="page" class="row" >
	
<!-- Nav -->	
<div class="col-sm-3" id="navigation">

	<div class="list-group">
		<?php while ($subject=$subjects->fetch(PDO::FETCH_NUM)) {?>
			<a href="#"  class="list-group-item" > <?php echo $subject[0];?></a>
			<?php
		} $subjects=null; ?>
	</div>

</div>
<!-- content -->
<div class="col-sm-9" id="content"></div>

</div>

<?php include("../includes/layouts/footer.php"); ?>