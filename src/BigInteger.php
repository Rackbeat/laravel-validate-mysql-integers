<?php namespace Rackbeat\Rules;

class BigInteger extends BaseMysqlIntegerRule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return bccomp($value, $this->min) >= 0
            && bccomp($value, $this->max) <= 0;
    }

    /**
     * @return int
     */
    protected function min()
    {
        if ($this->unsigned) {
            return 0;
        }

        return bcpow(-2, 63);
    }

    /**
     * @return int
     */
    protected function max()
    {
        if ($this->unsigned) {
            return bcsub(bcpow(2, 64), 1);
        }

        return bcsub(bcpow(2, 63), 1);
    }
}
