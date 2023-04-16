<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make(
            $input,
            [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'password' => $this->passwordRules(),
            ],
            [
                'email.required' => 'Email обязателен',
                'email.email' => 'Введите корректный email',
                'password.required' => 'Пароль обязателен',
                'password.min' => 'Пароль должен содержать минимум 4 символа',
                'password.confirmed' => 'Пароли не совпадают',
            ]
        )->validate();

        return User::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
