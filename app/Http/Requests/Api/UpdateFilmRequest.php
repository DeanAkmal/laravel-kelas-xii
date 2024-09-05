<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class UpdateFilmRequest extends FormRequest
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

                'title'     => 'required',
                'sinopsis'  =>  'required|min:20',
                'year'      =>  'required|integer',
                'poster'    =>  'required',
                'genre_id'  => 'required|exists:genre,id',

        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
        'succes' => false,
        'message'=> 'validation error',
        'data' => $validator->errors(),
        ]));
    }
}
