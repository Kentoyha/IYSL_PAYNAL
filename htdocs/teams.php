<?php
    include("db_connect.php");
?>

<?php
    include("header.php");
    include("menu.php");
    include("Marama.php");
    include("Strikers.php");
    include("Wildcats.php");
    include("Boys.php");

    
?>

<html>
    <head>
    <link rel="stylesheet" href="style.css">

    </head>

       
    
<body>

<h2 align="center">List of Teams</h2>

<form>
    <table class="center">
        <tr id="marama">
            <th><a href="Marama.php">MaramaGaming</a></th>
        </tr>
        <tr id="th2">
            <th><a href="Boys.php">TambacanBoys</a></th>
        </tr>
        <tr id="th3">
            <th><a href="Strikers">KalubihonStrikers</a></th>
        </tr>
        <tr id=th>
             <th><a href="Wildcats.php">Wildcats</a></th>
        </tr>
    </table>
</form> 

</body>
</html>