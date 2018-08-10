<?php

use PHPUnit\Framework\TestCase;

class BigIntegerValidationTest extends TestCase
{
    /** @test */
    public function can_validate_signed_big_integers()
    {
        $rule = new \Rackbeat\Rules\BigInteger(false);
        $min = '-9223372036854775808';
        $max = '9223372036854775807';

        $this->assertTrue($rule->passes('number', 0));
        $this->assertTrue($rule->passes('number', $min));
        $this->assertTrue($rule->passes('number', $max));

        $this->assertFalse($rule->passes('number', bcsub($min, 1)));
        $this->assertFalse($rule->passes('number', bcadd($max, 1)));
    }

    /** @test */
    public function can_validate_unsigned_big_integers()
    {
        $rule = new \Rackbeat\Rules\BigInteger(true);
        $min = 0;
        $max = '18446744073709551615';

        $this->assertTrue($rule->passes('number', $min));
        $this->assertTrue($rule->passes('number', $max));

        $this->assertFalse($rule->passes('number', $min - 1));
        $this->assertFalse($rule->passes('number', bcadd($max, 1)));
    }
}
