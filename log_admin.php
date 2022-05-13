<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: panel_admin.php');
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="utf-8" />    
    <title>Administrator</title>
</head>
<body>
    <img style="background-image: url(C:\Users\rbank\Documents\SIB_SIP\img2.jpg);">
    <div id="container">
        <div id="logo">
            
        </div>
        <div style="clear:both;"></div>     
        
        <div id="tytul">
            <span class="bigtitle">Układ sterowania obecnością napięcia gniazd jedno-fazowych</span>                 
        </div>
        <div id="content">
            <div id="menu2">
                <div class="option3">Administrator</div>                         
                <div style="clear:both;"></div>
            </div>
            <div id="panel">
                <form action="logowanie.php" method="post">
                <label for="username">Nazwa administratora:</label>
                <input type="text" id="username" name="username">
                <label for="password">Hasło:</label>                
                <input type="password" id="password" name="password">                
                <div id="lower">                
                <input type="submit" value="Login">
                </div>
                </form>
                <?php
	                if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
                ?>
                </div>
        </div>        
        <div id="footer">
            COPYRIGHT @2022
        </div>
    </div>
</body>
</body>
</html>