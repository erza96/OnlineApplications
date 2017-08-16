
<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: home.php');
	}	
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kyqja</title>

<style type="text/css">

#header {
margin:0 auto;
width:400px;
}

#kyqja {
text-align:center;
padding:10px 45px 10px 45px;
color: #FFF;
font-family:Arial, Helvetica, sans-serif;
width:300px;
margin: 0 auto;
background: #069;

}

#logo {
	text-align:center;
margin: 0 auto;
}

#kyqja:hover {
/*border:1px solid #000040;*/

}

#frmkyqja input[type="text"],
#frmkyqja input[type="password"]
{
width:75%;
padding:7px;
border-radius:5px;	
border:px solid #000040;    
}

#frmkyqja input[type="submit"],
#frmkyqja input[type="reset"]
{
cursor:pointer; 
color: #06F;
border:0px;
background-color: #FFF;  
width:36.5%;
margin-left:10px;
margin-right:10px;
padding:7px;
border-radius:5px;	
}

#frmkyqja input:hover[type="text"],
#frmkyqja input:hover[type="password"]
{
border:2px solid #800000;
}

#frmkyqja input:hover[type="submit"],
#frmkyqja input:hover[type="reset"]
{
background-color: #999;
cursor:pointer; 
}

.reg {
	text-decoration:none;
	color: #FFF;
}

.reg:hover {
	color: #999;
}

/*.error {
	color:#FFF;
font-family:Arial, Helvetica, sans-serif;
}*/

</style>
</head>

<body>
<header>
<br>
<br>
<br>


<div id="kyqja">
<h2><div id="logo"><br>
</div>
  Kyqja
</h2>
<form  method="post" action="" name="kyqja" id="frmkyqja">
 
             
            <input type="text" name="perdoruesi" placeholder="Perdoruesi" id="emri" tabindex="1" autofocus />
            <br><br>
          
            <input type="password" name="fjalekalimi" placeholder="Fjalekalimi" id="shifra" tabindex="2" />
            <br><br>
    <input type="submit" name="submit" value="Login" id="Login" onClick="ValidimiKyqjes()" tabindex="3"/>
    <input type="reset" value="Fshije" id="fshij" tabindex="4" />
  </form><br>
  <div class="error"><?php echo $error;?></div>
  <h2><a href="regjistrohu.php" class="reg">Regjistrohu</a></h2>
</div>
<br>
</header>


    
</body>
</html>
