<?php namespace Rackbeat\Rules;

class Integer extends BaseMysqlIntegerRule
{
	/**
	 * @return int
	 */
	protected function min() {
		if ( $this->unsigned ) {
			return 0;
		}

		return -2147483648;
	}

	/**
	 * @return int
	 */
	protected function max() {
		if ( $this->unsigned ) {
			return 4294967295;
		}

		return 2147483647;
	}
}
