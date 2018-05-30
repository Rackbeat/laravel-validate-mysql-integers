<?php

use PHPUnit\Framework\TestCase;

class IntegerValidationTest extends TestCase
{
	/** @test */
	public function can_validate_signed_integers() {
		$rule = new \Rackbeat\Rules\Integer( false );

		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', -2147483648 ) );
		$this->assertTrue( $rule->passes( 'number', 2147483647 ) );

		$this->assertFalse( $rule->passes( 'number', -5000000000000 ) );
		$this->assertFalse( $rule->passes( 'number', 5000000000000 ) );
	}

	/** @test */
	public function can_validate_unsigned_integers() {
		$rule = new \Rackbeat\Rules\Integer( true );

		$this->assertTrue( $rule->passes( 'number', 0 ) );
		$this->assertTrue( $rule->passes( 'number', 4294967295 ) );

		$this->assertFalse( $rule->passes( 'number', -2147483648 ) );
		$this->assertFalse( $rule->passes( 'number', -5000000000000 ) );
		$this->assertFalse( $rule->passes( 'number', 5000000000000 ) );
	}
}
