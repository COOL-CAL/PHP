<div>
    <?php
        if(isset($_SESSION[_LOGINUSER])) { ?>
            <a href="/board/write">Write</a>
            <a href="/user/logout">Logout</a>
    <?php } else { ?>
            <a href="/user/login">Login</a>
            <a href="/user/join">Sign Up</a>
    <?php } ?>
    <a href="/board/list">List</a>
</div>