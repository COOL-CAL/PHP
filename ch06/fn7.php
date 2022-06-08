<?php
    $mon = rand(0, 15);

    $season = get_season($mon);
    
    if($season)
    { print "${mon}월은 ${season}입니다."; }
    else
    { print "${mon}월은 잘못된 값"; }

    function get_season($mon)
    {   
        $season = "";
        switch($mon)
        {
            case 3: case 4: case 5:
                $season = "봄";
            
            case 6: case 7: case 8:
                $season = "여름";

            case 9: case 10: case 11:
                $season = "가을";

            case 12: case 1: case 2:
                $season = "겨울";

            default:
                $season = "";
                
        }
        return $season;
        /*
        return값 밖으로 안 빼고
        switch문 안에서 season값 빼고
        return 으로 작성해도 됨.
        */
    }


    {
        if($mon<1 || $mon>12)
        { return ""; }
        else if($mon<3 || $mon===12)
        { return "겨울"; }
        else if($mon<6)
        { return "봄"; }
        else if($mon<9)
        { return "여름"; }
        else
        { return "가을"; }
    }
?>