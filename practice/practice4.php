4번
<br>
<?php
    $name = array("김재훈","남그린","박은지","신혜미","윤정인","이경식","이승재","최우원","허영롱");

    while ($name_1 == $name_2)
    {
        $name_1 = rand(0,8);
        $name_2 = rand(0,8);
    }
    if($name_1 !== $name_2)
    {
        print $name[$name_1] . " ". $name[$name_2];
    }
?>