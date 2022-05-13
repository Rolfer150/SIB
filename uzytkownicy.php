<?php

	session_start();	

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="utf-8" />
    <title>Panel</title>
    <style>
        table, td, th {
        border: 1px solid;
        }

        table {
        width: 100%;
        height: auto;
        border-collapse: collapse;
        }
        
</style>
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
        <div id="panel">
            <table class="styled-table">
                <tr>
                    <th>Id</th>
                    <th>Login</th>
                    <th>Haslo</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>rafal</td>
                    <td>banka</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>kamil</td>
                    <td>fyda</td>
                </tr>
            </table>
        </div>
        <button class="przycisk" style="background-color: #6b6b6b; margin-left: 455px; margin-top: 20px"><a href="wyloguj.php">Wyloguj</a></button>
    </div>
    <div id="footer">
        COPYRIGHT @2022
    </div>
</div>
</body>
</body>
</html>