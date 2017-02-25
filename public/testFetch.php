<?php
require_once("../includes/connexion_db.php");
include("../includes/layouts/header.php")
?>

<div id="page" class="row" >
	

<div class="col-sm-3" id="navigation">

<?php  	$sub=$db->query('select menu_name from subjects') ;
		if (!$sub){die("eroor in query");}
		else{ 
			?> <ul> <?php 
			while($subject =$sub->fetch(PDO::FETCH_ASSOC))
			{
				?><li>
					<?php  echo $subject["menu_name"]; ?>
				  </li>
			<?php } ?>
			</ul>
		<?php  }
?>

</div>
<!-- content -->
<div class="col-sm-9" id="content"></div>

</div>

<?php include("../includes/layouts/footer.php"); ?>