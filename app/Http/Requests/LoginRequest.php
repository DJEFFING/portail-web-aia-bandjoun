<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "password" => "required|min: 8"
        ];
    }

    public function messages()
    {
        return[
            "email.required" => "l'email est obligatoire !!",
            "email.email" => "vous devez entrez un email valide !!",

            "password.required" => "le mot de passe est obligatoire",
            "password.min" => "le mot de passe doit avoir au moin 08 carratère"
        ];
    }

    public function getCredential()
    {
        return $this->only("email","password");
    }
}
