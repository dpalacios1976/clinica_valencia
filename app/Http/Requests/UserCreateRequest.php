<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserCreateRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('admin.users.store');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required|string',
            'user' => 'required|string',
            'cedula' => 'sometimes|nullable|size:10',
            'mail' => 'required|email',
            'pass' => ['required', Password::min(6)->mixedCase()->numbers()],
            'confpass' => 'required|same:pass',
            'roles' => 'required|array|min:1',
            'roles.*' => 'numeric',
            'medicos' => 'required'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'fullname' => 'nombre completo',
            'user' => 'usuario',
            'cedula' => 'cedula',
            'mail' => 'correo',
            'pass' => 'contraseña',
            'confpass' => 'confirmar contraseña',
            'medicos' => 'medico',
        ];
    }

    protected function failedAuthorization()
    {
        $errors = array("No tiene permisos para agregar un usuario");

        throw new HttpResponseException(
            $this->jsonErrorValidate("Permisos", $errors)
        );
    }

    /**
     * Return for form submission with javascript
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            $this->jsonErrorValidate("Faltan datos requeridos", $errors)
        );
    }

}
