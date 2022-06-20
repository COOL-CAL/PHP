<a href="product_list.php">Show Shops</a>
<a href="cart.php">Cart</a>
<?php
    session_start();
    if(isset($_SESSION["login_user"])) { //if logged
        $login_user = $_SESSION["login_user"];

        if($login_user[0] == "admin") { //if manager
            echo ("
                <a href='add_goods.php'>Product submit</a>
                <a href='admin_buy.php'>Manage purchase</a>
                <a href='admin_mem_list.php'>Customer list</a>
                <a href='admin_mem_update.php'>Customer info edit</a>
            ");
        } else { //if customer
            echo("
                <a href='my_buy.php'>Manage purchase</a>
                <a href='update_member.php'>My info edit</a>
            ");
        }
    }