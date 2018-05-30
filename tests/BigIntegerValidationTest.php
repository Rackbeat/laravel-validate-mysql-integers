<?php

use PHPUnit\Framework\TestCase;

class BigIntegerValidationTest extends TestCase
{
	/** @test */
	public function can_validate_signed_big_integers() {
		$rule = new \Rackbeat\Rules\BigInteger( false );

		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', -2 ^ 63 ) );
		$this->assertTrue( $rule->passes( 'number', 2 ^ 63 - 1 ) );

		$this->assertFalse( $rule->passes( 'number', -5000000000000000000 ) );
		$this->assertFalse( $rule->passes( 'number', 50000000000000000000 ) );
	}

	/** @test */
	public function can_validate_unsigned_big_integers() {
		$rule = new \Rackbeat\Rules\BigInteger( true );

		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 2 ^ 64 - 1 ) );

		$this->assertFalse( $rule->passes( 'number', -2147483648 ) );
		$this->assertFalse( $rule->passes( 'number', -50000000000000000000 ) );
		$this->assertFalse( $rule->passes( 'number', 50000000000000000000 ) );
	}
}
