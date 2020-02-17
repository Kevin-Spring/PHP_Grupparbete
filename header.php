<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
    if(empty($title)){
        echo "Min Sida!";
    }else{
        echo$title;
    }
    ?>
    </title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/main.js"></script>
</head>
<body>
<h1>Välkommen till min PHP-sida!</h1>
<a href="index.php">Start</a> | <a href="about.php">Om Oss</a> | <a href="login.php">Logga in</a>
<hr>