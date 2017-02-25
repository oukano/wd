<?php  include("../includes/layouts/header.php") ;  
 
		function somme(){ 
			$num=func_num_args();
			$som=0;
			$a=func_get_args();
			var_dump($a);

			foreach ($a as $key => $value) {
				
				$som+=$value;
			}
			return $som;
		}


		echo somme(1,2,3,6,9);
		?>
<script src="js/jquery-3.1.1.min"></script>
<script src="js/bootstrap.min"></script>
<script src="js/plugin.js"></script>

</body>
</html>
