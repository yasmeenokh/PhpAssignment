<?php

use PHPUnit\Framework\TestCase;

class AssertionTest extends TestCase
{
    public function testSortArray()
    {
        require 'main.php';
        $testArray = array(3, 6, 8, 7, 0, 1, 4, 2, 9, 5);
        $tested = sortArray($testArray);
        $expected = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

        $testArr = array(15, 11, 13, 14, 16, 12, 10, 17, 19, 18);
        $testedInput = sortArray($testArr);
        $expectedOutput = array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19);

        $testThree = array(1.5, 1.4, 1, 1.1, 1.2, 1.6, 1.3, 1.7, 1.9, 1.8);
        $testedInputThree = sortArray($testThree);
        $expectedOutputThree = array(1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);

        $this->assertEquals($expected, $tested);
        $this->assertEquals($expectedOutput, $testedInput);
        $this->assertEquals($expectedOutputThree, $testedInputThree);
    }

    public function testIsValidHex()
    {
        $inputOne = '#CD5C5C';
        $testOne = isValidHexCode($inputOne);
        $expectedOne = 'true';

        $inputTwo = '#eaecee';
        $testTwo = isValidHexCode($inputTwo);
        $expectedTwo = 'true';

        $inputThree = '#CD5C58C';
        $testThree = isValidHexCode($inputThree);
        $expectedThree = 'false';

        $inputFour = '#CD5C5Z';
        $testFour = isValidHexCode($inputFour);
        $expectedFour = 'false';

        $inputFive = '#CD5C&C"';
        $testFive = isValidHexCode($inputFive);
        $expectedFive = 'false';

        $inputSix = 'CD5C5C"';
        $testSix = isValidHexCode($inputSix);
        $expectedSix = 'false';

        $this->assertEquals($expectedOne, $testOne);
        $this->assertEquals($expectedTwo, $testTwo);
        $this->assertEquals($expectedThree, $testThree);
        $this->assertEquals($expectedFour, $testFour);
        $this->assertEquals($expectedFive, $testFive);
        $this->assertEquals($expectedSix, $testSix);
    }
}
