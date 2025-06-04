<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                Rule::unique(Company::class)->ignore($this->company)
            ],
            'phone' => [
                'required',
                'string',
                'digits:11',
                Rule::unique(Company::class)->ignore($this->company)
            ],
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique(Company::class)->ignore($this->company)
            ],
            'full_address' => [
                'required',
                'string',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Müşteri adı',
            'phone' => 'Telefon numarası',
            'email' => 'E-mail adresi',
            'full_address' => 'Adres',
        ];
    }
}
