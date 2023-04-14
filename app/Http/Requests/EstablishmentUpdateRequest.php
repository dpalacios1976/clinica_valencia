<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class EstablishmentUpdateRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('establishments.update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ruc' => 'required|min:13|max:13',
            'razon_social' => 'required',
            'nombre_comercial' => 'required',
            'direccion' => 'required|string',
            'cont_especial' => 'required',
            'contabilidad' => 'required',
            'produccion' => 'required',
            'firma' => 'sometimes|nullable',
            'password' => 'sometimes|nullable',
            'logo' => 'sometimes|nullable|file',
            'nivel' => 'required',
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
            'razon_social' => 'razon social',
            'nombre_comercial' => 'nombre comercial',
            'cont_especial' => 'contribuyente especial',
            'produccion' => 'Ambiente de produccion',
            'password' => 'contrasena',
        ];
    }

    protected function failedAuthorization()
    {
        $errors = array("No tiene permisos para actualizar los parametros");

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
