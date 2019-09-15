<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumberMinimumRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($minimumValue)
    {
        $this->minimumValue = $minimumValue;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value > $this->minimumValue;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute must be greater than ' . $this->minimumValue;
    }
}
