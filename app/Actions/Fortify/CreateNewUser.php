<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    private function refId() {
        $ref_id = strtoupper(Str::random(6));
        $user_count = User::where('ref_id', $ref_id)->count();
        if($user_count == 1) {
            $this->refId();
        }
        return $ref_id;
    }

    private function refBy($ref) {
        $user = User::where('ref_id', $ref)->first();
        return $user->id;
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ref' => ['required', 'string', 'exists:users,ref_id'],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => 'required|captcha',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'country' => $input['country'],
            'ref_id' => $this->refId(),
            'ref_by' => $this->refBy($input['ref']),
            'password' => Hash::make($input['password']),
        ]);
    }
}
