<?php
namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
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
            "email" => ["required", "email"],
        ];
    }

    /**
     * mESSAGES
     * @return array{email.email: array|string|null, email.required: array|string|null}
     */
    public function messages(): array
    {
        return [
            "email.required" => __('auth.reset.errors.email.required'),
            "email.email"    => __('auth.reset.errors.email.email'),
        ];
    }
}
