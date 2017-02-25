<?php
	session_start(); 
	require_once("../includes/connexion_db.php");
	require_once("../includes/functions.php");

	if(isset($_POST['submit'])){

	if(isset($_POST['menu_name']) && $_POST['menu_name']!=="" && isset($_POST['position']) && $_POST['position']!=="" && isset($_POST['visible']) && $_POST['visible']!=="" ){
		  
		    
		$query="insert into subjects ";
		$query.="(menu_name,position,visible)";
		$query.="values (?,?,?)";

		$res=$db->prepare($query);

		$res->bindParam(1,$_POST['menu_name']);
		$res->bindParam(2,$_POST['position']);
		$res->bindParam(3,$_POST['visible']);
		$res->execute();

		if ($res){
			$_SESSION["message"]="<pre class=\"bg-success msg\" >Subject created successfuly!</pre>";
			redirect("manage_content.php");	
		}else{

            $_SESSION["message"]="<pre class=\"bg-warning msg\" >Subject Not Created !</pre>";
			redirect("new_subject.php");}} else{ redirect("new_subject.php");}
	}else{

		redirect("new_subject.php");
	}


    include("../includes/layouts/footer.php"); ?>