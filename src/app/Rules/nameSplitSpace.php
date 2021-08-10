<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class nameSplitSpace implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $name = str_replace('　', ' ', $value);
        $name = explode(' ',$name);
    
        $result = false;

        if(count($name) === 2 
        && !empty($name[0])
        && !empty($name[1])
        ) {
            $result = true;
        }

        return $result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '姓と名の間にスペース一文字を入力してください';
    }
}
