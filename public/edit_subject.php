<?php 
	session_start();
	require_once("../includes/connexion_db.php");
	require_once("../includes/functions.php");
	 include("../includes/layouts/header.php") ; 

	if(isset($_GET['subject'])){ 

	 	$selected_subject=$_GET['subject'];
	 	$query="select * from subjects where id= {$selected_subject}";
		$curentSub=$db->query($query);
		$curentSub=$curentSub->fetch(PDO::FETCH_NUM);
		if (isset($_GET['page'])){ $selected_page=$_GET['page'];
	 	}else {$selected_page=null;}
	
	}else { $selected_subject=null;$selected_page=null;}

	 $nb=$db->query('select count(*) from subjects')->fetchColumn();

	 
?>

<div id="page" class="row" >
<!-- Nav -->	
<div class="col-sm-3" id="navigation">

	 <div class="panel-group" id="accordion">

        <a href="./new_subject.php" ><button class="btn btn-success btn-block" color="#fff">  +Create Subject  </button></a>
         <ul class="list-group">
		
        	<?php get_nav($selected_page,$selected_subject); ?>

		 </ul>
	</div>
</div>

<!-- content -->
<div class="col-sm-9" id="content">


<h2>Edite <?php echo $curentSub[1]; ?>: </h2>

	<form action="create_subject.php" method="post">


	<div class="input-group">
		<span class="input-group-addon" >Menu name :</span>
		<input class="form-control" type="text" name="menu name" value="<?php echo $curentSub[1]; ?>" placeholder="Subject name">
	</div>	
	
	<div class="input-group">
		<span  > Position :</span>
		<select name="position"> 
			<?php for ($i=1;$i<=$nb;$i++){
				echo "<option value=\"{$i}\"" ;
				if ($i==$selected_subject) {
					echo "selected";
				}
				echo ">";
				echo $i."</option>";

			}?>
		
		</select>
	</div>

	
	<div class="input-group">
	Visible :
	<input type="radio" name="visible" value="1" <?php $curentSub[3]==1 ? print "checked" :null ;?> >Yes
	<input type="radio" name="visible" value="0" <?php $curentSub[3]==0 ? print "checked" :null ;?> >No
	</div>


	<input type="submit" name="submit" value="Edite subject">
	</form>	
	


</div>


</div>

<?php include("../includes/layouts/footer.php"); ?>