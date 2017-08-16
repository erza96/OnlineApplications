<?php

	session_start();
	include("connection.php"); 
	
	$error = ""; 
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalekalimi"]))
		{
			$error = "Të plotësohen fushat?";
		}else
		{	
			$perdoruesi=$_POST['perdoruesi'];
			$fjalekalimi=$_POST['fjalekalimi'];

	
			$sql="SELECT id_Kyqja FROM Kyqja WHERE perdoruesi='$perdoruesi' 
			and fjalekalimi='$fjalekalimi'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; 
				header("Location: index.php"); 
			}else
			{
				$error = "Emri ose fjalëkalimi i përdoruesit  është i gabuar.";
			}

		}
	}

?>