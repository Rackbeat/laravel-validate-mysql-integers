<?php

namespace Rackbeat\Rules;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidateMysqlIntegersServiceProvider extends ServiceProvider
{
	/**
	 * @return void
	 */
	public function boot() {
		Validator::extend( 'real_tiny_int', function ( $attribute, $value, $parameters, $validator ) {
			$unsigned = filter_var( $parameters[0] ?? false, FILTER_VALIDATE_BOOLEAN );

			return ( new TinyInteger( $unsigned ) )->passes( $attribute, $value );
		} );

		Validator::extend( 'real_small_int', function ( $attribute, $value, $parameters, $validator ) {
			$unsigned = filter_var( $parameters[0] ?? false, FILTER_VALIDATE_BOOLEAN );

			return ( new SmallInteger( $unsigned ) )->passes( $attribute, $value );
		} );

		Validator::extend( 'real_int', function ( $attribute, $value, $parameters, $validator ) {
			$unsigned = filter_var( $parameters[0] ?? false, FILTER_VALIDATE_BOOLEAN );

			return ( new Integer( $unsigned ) )->passes( $attribute, $value );
		} );

		Validator::extend( 'real_big_int', function ( $attribute, $value, $parameters, $validator ) {
			$unsigned = filter_var( $parameters[0] ?? false, FILTER_VALIDATE_BOOLEAN );

			return ( new BigInteger( $unsigned ) )->passes( $attribute, $value );
		} );
	}
}
