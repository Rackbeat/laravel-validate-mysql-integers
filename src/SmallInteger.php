<?php namespace Rackbeat\Rules;

class SmallInteger extends BaseMysqlIntegerRule
{
	/**
	 * @return int
	 */
	protected function min() {
		if ( $this->unsigned ) {
			return 0;
		}

		return -32768;
	}

	/**
	 * @return int
	 */
	protected function max() {
		if ( $this->unsigned ) {
			return 65535;
		}

		return 32767;
	}
}
