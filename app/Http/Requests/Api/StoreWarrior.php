<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreWarrior extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->input('id') ? ',' . $this->input('id') : '';

        return [
            'name'            => 'required|string|max:45|unique:warriors,name' . $id,
            'type_id'         => 'required|integer',
            'speciality_id'   => 'required|array',
            'speciality_id.*' => 'integer|exists:specialities,id',
            'health'          => 'required|integer',
            'defense'         => 'required|integer',
            'damage'          => 'required|integer',
            'attack_speed'    => 'required|numeric',
            'move_speed'      => 'required|numeric',
            'thumbnail'       => 'nullable|file|image',
        ];
    }

    /**
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     */
    protected function failedValidation(Validator $validator)
    {
        dd($this->input('id'));
    }
}
