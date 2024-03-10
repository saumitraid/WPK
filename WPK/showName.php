<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frm" method="get">
        Enter your name
        <input type="text" name="nm"><br>
        <input type="submit" name="ok" value="Send">
    </form>
    <?php
    if(isset($_GET['ok'])){
        $nm=$_GET['nm'];
        echo "Your name is ".$nm;
    }
    ?>
</body>
</html>