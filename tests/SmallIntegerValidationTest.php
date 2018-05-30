<?php

use PHPUnit\Framework\TestCase;

class SmallIntegerValidationTest extends TestCase
{
	/** @test */
	public function can_validate_signed_small_integers() {
		$rule = new \Rackbeat\Rules\SmallInteger( false );

		$this->assertTrue( $rule->passes( 'number', 5 ) );
		$this->assertTrue( $rule->passes( 'number', -32768 ) );
		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 32767 ) );

		$this->assertFalse( $rule->passes( 'number', -500000 ) );
		$this->assertFalse( $rule->passes( 'number', 500000 ) );
	}

	/** @test */
	public function can_validate_unsigned_small_integers() {
		$rule = new \Rackbeat\Rules\SmallInteger( true );

		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 65535 ) );

		$this->assertFalse( $rule->passes( 'number', -32768 ) );
		$this->assertFalse( $rule->passes( 'number', -500000 ) );
		$this->assertFalse( $rule->passes( 'number', 500000 ) );
	}
}
