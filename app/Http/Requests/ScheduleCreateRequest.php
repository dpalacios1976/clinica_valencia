<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class ScheduleCreateRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('doctors.schedules.store');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'active' => 'required|array|min:1',
            'active.*' => 'numeric',
            'horas_desde' => 'required|array|min:1',
            // 'horas_desde.*' => 'min:1',
            'horas_hasta' => 'required|array|min:1',
            // 'horas_hasta.*' => 'date_format:H:i',
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
            'active' => 'estado',
            'horas_desde' => 'horas desde',
            // 'horas_desde.*' => 'horas desde',
            'horas_hasta' => 'horas hasta',
            // 'horas_hasta.*' => 'horas hasta',
        ];
    }

    protected function failedAuthorization()
    {
        $errors = array("No tiene permisos para agregar o actualizar un horario");
        // throw new AuthorizationException(
        //     $this->jsonErrorValidate("Permisos", $errors)
        // );

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
