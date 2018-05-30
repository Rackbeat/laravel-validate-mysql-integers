<?php namespace Rackbeat\Rules;

class TinyInteger extends BaseMysqlIntegerRule
{
	/**
	 * @return int
	 */
	protected function min() {
		if ( $this->unsigned ) {
			return 0;
		}

		return -128;
	}

	/**
	 * @return int
	 */
	protected function max() {
		if ( $this->unsigned ) {
			return 255;
		}

		return 127;
	}
}
