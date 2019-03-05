<?php
	
	include('bdd.php');
	
	
	if(!empty($_POST)) {

			
			
			
			
			
			$unn = $_POST['nom']; 
			$katre = $_POST['prenom'];
			$deux = $_POST['mail'];
			$troix = $_POST['message'];
			
		$reg= mysql_query("INSERT INTO contact VALUES('','$unn','$deux','$troix','$katre')");
		



			}
header('Location: index.php');

?> 