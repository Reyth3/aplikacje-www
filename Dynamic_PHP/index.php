<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="STRONA">
    <?php 
        session_start();
        
        include("header.php");
        include("content.php"); 
        include("footer.php");
    ?>
</div>
</body>

</html>