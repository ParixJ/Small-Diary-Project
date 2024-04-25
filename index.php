<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php require "database.php" ?>
    

<div class="container">

<form action="index.php" method="POST">

<div class="inp">

<h2>My Diary</h2>

<hr>
    
<input type="textarea" class="form-group col-md-3" name="comment" placeholder="Write Today's Diary" >
<input type="date" name="date" class="form-group col-md-2">
<br>
<input type="submit">

</div>

</form>
</div>


</body>
</html>