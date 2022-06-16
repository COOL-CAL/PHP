<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><font size="6">Fruit list</font></p>
    <p><a href="cart.php">To Cart</a></p>
    <table width="420" border="1" cellpadding="1">
        <tr align="center">
            <td width="200"> Name </td>
            <td width="80"> Price </td>
            <td width="140"> Amount </td>
        </tr>

    <?php
        include("./cart_products.inc");
        while(list($name, $price) = each($fruit)) {
    ?>
        <form name="insert_form" method="post" action="./cart.php?code=insert$name=<?=$name?>">
            <tr>
                <td width="200"> <?=$name?> </td>
                <td width="80" align="right"> <?=$price?> won </td>
                <td width="140" align="center">
                    <select name = "amount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" name="submit" value="choose">
                </td>
            </tr>
        </form>
    <?php } ?>
    </table>
</body>
</html>