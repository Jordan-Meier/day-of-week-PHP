<?php

    require_once "src/DateFind.php";

    class DateFindTest extends PHPUnit_Framework_TestCase
    {
        function test_dayOfWeekFinder_normalYear()
        {
            //Arrange
            $test_DateFind = new DateFind;
            $month = 7;
            $day = 5;
            $year = 1967;

            //Act
            $result = $test_DateFind->dayOfWeekFinder($month, $day, $year);

            //Assert
            $this->assertEquals("July 5, 1967 is on a Wednesday", $result);

        }

        function test_dayOfWeekFinder_leapYear()
        {
            //Arrange
            $test_DateFind = new DateFind;
            $month = 3;
            $day = 20;
            $year = 2020;

            //Act
            $result = $test_DateFind->dayOfWeekFinder($month, $day, $year);

            //Assert
            $this->assertEquals("March 20, 2020 is on a Friday", $result);

        }
    }
?>
