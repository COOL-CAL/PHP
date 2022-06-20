<?php
    include("./cart_class.inc");
    include("./cart_products.inc");
    $code = $_GET["code"];
    $name =  $_GET["name"];
    
    if(!$_SESSION['cart']) {
        $cart = new Cart;
        $_SESSION['cart'] = serialize($cart);
    }
    
    if($code=="insert") {
        $amount = $_POST["amount"];
        $cart = unserialize($_SESSION['cart']);
        $cart->add($name, $amount);
        $_SESSION['cart'] = serialize($cart);
    } else if($code = "delete") {
        $cart = unserialize($_SESSION['cart']);
        $cart->delete($name);
        $_SESSION['cart'] = serialize($cart);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <p><font size = "6">Shopping Cart</font></p>
    <p><a href="./cart_product_list.php">Continue</a></p>
<?php
    $cart = unserialize($_SESSION['cart']);
    if($cart->get_count()) {
?>
    <table width="380" border="1" cellspacing="1" cellpadding="0">
        <tr align="center">
            <td width="200"> Name </td>
            <td width="80"> Amount </td>
            <td width="100"> Delete </td>
        </tr>
<?php
    $sum = 0;
    $contents = $cart->get_list();
    while(list($name, $value) = each($contents)) {
        $sum += $value*$fruit[$name];
?>
        <tr>
            <td width="200"> <?=$name?> </td>
            <td width="80"> <?=$value?> </td>
            <td width="100">
                <input type="button" name="delete" value="Delete" onclick="javascript:location='cart.php?code=delete$name=<?=$name?>'">
            </td>
        </tr>
<?php
    $_SESSION['cart'] = serialize($cart);
    }
?>
        <tr>
            <td colspan="2" height="30">Total</td>
            <td width="65" height="30" align="middle"><?=$sum?></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>