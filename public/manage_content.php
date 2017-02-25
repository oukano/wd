<?php 
	session_start();
	require_once("../includes/connexion_db.php");
	require_once("../includes/functions.php");
	include("../includes/layouts/header.php") ; 

	if(isset($_GET['subject'])){ 

	 	$selected_subject=$_GET['subject'];
		if (isset($_GET['page'])){ $selected_page=$_GET['page'];
	 	}else {$selected_page=null;}
	
	}else { $selected_subject=null;$selected_page=null;}

$curentSub=array();;
	 
?>

<div id="page" class="row" >
<!-- Nav -->	
<div class="col-sm-3" id="navigation">

	 <div class="panel-group" id="accordion">
	 
	 <a href="./new_subject.php" ><button class="btn btn-success btn-block" color="#fff">  +New Subject  </button></a>
		
        	<?php get_nav($selected_page,$selected_subject); ?>

		 </ul>
	</div>
</div>

<!-- content -->
<div class="col-sm-9" id="content">



	
	<?php	
		isset( $_SESSION["message"]) ? print $_SESSION["message"] : null ;
		$_SESSION["message"]=null;

	if (isset($selected_subject)) { echo get_content($selected_page,$selected_subject); }
			else {echo "";}
?> 

		

	</div>


</div>

<?php include("../includes/layouts/footer.php"); ?>