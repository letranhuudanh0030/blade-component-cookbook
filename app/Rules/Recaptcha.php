<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements Rule
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
        // curl request to https://www.google.com/recaptcha/api/siteverify
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
            'secret' => config('services.recaptcha.secret'),
            'response' => $value,
            'remoteip' => request()->ip()
        ])->json();
        // pass through the data
        // and then check the result and return if it was successful

        return $response['success'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Recaptcha verification failed.';
    }
}
