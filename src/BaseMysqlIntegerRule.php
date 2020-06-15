<?php namespace Rackbeat\Rules;

use Illuminate\Contracts\Validation\Rule;

abstract class BaseMysqlIntegerRule implements Rule
{
	/**
	 * @var bool
	 */
	protected $unsigned;

	/**
	 * @var int
	 */
	public $min;

	/**
	 * @var int
	 */
	public $max;

	/**
	 * @param bool $unsigned
	 */
	public function __construct( $unsigned = false ) {
		$this->unsigned = $unsigned;
		$this->min      = $this->min();
		$this->max      = $this->max();
	}

	/**
	 * Determine if the validation rule passes.
	 *
	 * @param  string $attribute
	 * @param  mixed  $value
	 *
	 * @return bool
	 */
	public function passes( $attribute, $value ) {
		return $value >= $this->min && $value <= $this->max;
	}

	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message() {
		return ':attribute must be between ' . $this->min . ' and ' . $this->max . '.';
	}
}
