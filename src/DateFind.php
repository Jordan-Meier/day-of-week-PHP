<?php
    class DateFind
    {
        function dayOfWeekFinder($month, $day, $year)
        {
            return date('F', mktime(0, 0, 0, $month, $day, $year)) . " $day, $year is on a " . date('l', mktime(0, 0, 0, $month, $day, $year));
        }
    }


 ?>
