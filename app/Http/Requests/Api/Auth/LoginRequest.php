<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function ensureIsNotRateLimited()
    {
        if (! $this->hasTooManyLoginAttempts($this)) {
            return;
        }

        $this->fireLockoutEvent($this);

        throw ValidationException::withMessages([
            'email' => __('Too many login attempts. Please try again in :seconds seconds.', [
                'seconds' => $this->limiter()->availableIn(
                    $this->throttleKey()
                ),
            ]),
        ])->status(429);
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
