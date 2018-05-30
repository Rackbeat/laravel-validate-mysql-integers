<?php

use PHPUnit\Framework\TestCase;

class TinyIntegerValidationTest extends TestCase
{
	/** @test */
	public function can_validate_signed_tiny_integers() {
		$rule = new \Rackbeat\Rules\TinyInteger( false );

		$this->assertTrue( $rule->passes( 'number', 5 ) );
		$this->assertTrue( $rule->passes( 'number', -128 ) );
		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 127 ) );

		$this->assertFalse( $rule->passes( 'number', -1000 ) );
		$this->assertFalse( $rule->passes( 'number', 1000 ) );
	}

	/** @test */
	public function can_validate_unsigned_tiny_integers() {
		$rule = new \Rackbeat\Rules\TinyInteger( true );

		$this->assertTrue( $rule->passes( 'number', 5 ) );
		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 127 ) );
		$this->assertTrue( $rule->passes( 'number', 255 ) );

		$this->assertFalse( $rule->passes( 'number', -127 ) );
		$this->assertFalse( $rule->passes( 'number', -1000 ) );
		$this->assertFalse( $rule->passes( 'number', 1000 ) );
	}
}
