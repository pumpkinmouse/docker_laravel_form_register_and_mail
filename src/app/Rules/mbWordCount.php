<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class mbWordCount implements Rule
{
    /**
     * @var int
     */
    private $max;

    /**
     * Create a new rule instance.
     *
     * @param int $max
     */
    public function __construct(int $max)
    {
        $this->max = $max;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $trim = str_replace(array("\r\n", "\r", "\n"), '', $value);
        // まともにカウントできないので全部全角へ変換
        $upper = mb_convert_kana($trim, 'RNASKHCV', 'UTF-8');
        $mbLen = mb_strwidth($upper, 'UTF-8');
        return $this->max >= $mbLen;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "{$this->max}文字以下で入力してください";
    }
}
