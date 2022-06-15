<?php
    include_once '../db/db_user.php';

    $u_id = $_POST["decided_id"];
    $u_pw = $_POST["u_pw"];
    $u_pw = $_POST["confirm_pw"];
    $u_mail1 = $_POST["u_mail1"];
    $u_mail2 = $_POST["u_mail2"];

    $u_mail = $u_mail1 . "@" . $u_mail2;

    $param = [
        "u_id" => $u_id,
        "u_pw" => $u_pw,
        "u_mail" => $u_mail
    ];

    $check = sel_user($param);
    $result = ins_join($param);

    if(!$check) {
        if($u_pw !== $confirm_pw) { ?>
            <script>
                alert ('Password incorrect.');
                history.back();
            </script>
        <?php exit; } else {
            if($result) { ?>
                <script>
                    alert ('Signed up!');
                    location.replace('login.php');
                </script>
            <?php exit; } else { ?>
                <script>
                    alert('Something went wrong. Please contact us.');
                    mysqli_error($conn);
                </script>
            <?php }
        }    
    } ?>
    