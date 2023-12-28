<?php

namespace App\Actions\Fortify;
use Illuminate\Validation\Rule;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


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
        // Determine the user's role (replace 'default_role' with your actual default role)
        $defaultRole = 'default_role';
        $role = isset($_GET['role']) ? $_GET['role'] : $defaultRole;

        // Set the usertype based on the role
        $input['usertype'] = isset($input['usertype']) ? $input['usertype'] : $role;

        // Validation rules
        $validator = Validator::make($input, [
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'user_address' => isset($input['user_address']) ? ['required', 'string'] : [],
            'phone' => isset($input['phone']) ? ['required', 'string'] : [],
            'user_expertise' => isset($input['user_expertise']) ? ['required', 'string'] : [],  
            'user_qualification' => isset($input['user_qualification']) ? ['required', 'string'] : [],
            'gender' => isset($input['gender']) ? ['required', 'string'] : [],
            'service' => isset($input['service']) ? ['required', 'string'] : [],
            'usertype' => ['required', 'string', Rule::in(['valid_value1', 'valid_value2'])], // Add valid values for 'usertype'
        ]);

        $validator->validate();

        // Remove null values before creating the user
        $filteredInput = array_filter($input, function ($value) {
            return $value !== null;
        });

        // Create and return the user
        return User::create([
            'name' => $filteredInput['name'] ?? null,
            'email' => $filteredInput['email'] ?? null,
            'user_address' => $filteredInput['user_address'] ?? null,
            'phone' => $filteredInput['phone'] ?? null,
            'user_expertise' => $filteredInput['user_expertise'] ?? null,
            'user_qualification' => $filteredInput['user_qualification'] ?? null,
            'gender' => $filteredInput['gender'] ?? null,
            'service' => $filteredInput['service'] ?? null,
            'password' => Hash::make($filteredInput['password'] ?? null),
            'usertype' => $filteredInput['usertype'] ?? null,
        ]);
    }
}