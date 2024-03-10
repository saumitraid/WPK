<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frm" method="get">
        <table cellpadding="7">
            <tr>
                <td>Enter 1st Number</td>
                <td><input type="number" name="n1"</td>
            </tr>
            <tr>
                <td>Enter 2nd Number</td>
                <td><input type="number" name="n2"</td>
            </tr>
        </table>
        <input type="submit" name="ok" value="Add">
    </form>
    <?php
    if(isset($_GET['ok'])){
        $n1=$_GET['n1'];
        $n2=$_GET['n2'];
        $sum=$n1+$n2;
        echo "Addition is ".$sum;
    }
    ?>
</body>
</html>