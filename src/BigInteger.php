<?php namespace Rackbeat\Rules;

class BigInteger extends BaseMysqlIntegerRule
{
	/**
	 * @return int
	 */
	protected function min() {
		if ( $this->unsigned ) {
			return 0;
		}

		return -2 ^ 63;
	}

	/**
	 * @return int
	 */
	protected function max() {
		if ( $this->unsigned ) {
			return 2 ^ 64 - 1;
		}

		return 2 ^ 63 - 1;
	}
}
