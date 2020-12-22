<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:30'],
            'description' => ['required', 'string'],
            'pertanyaan1' => ['required', 'string', 'max:50'],
            'pertanyaan2' => ['required', 'string', 'max:50'],
            'pertanyaan10' => ['required', 'string', 'max:50'],
            'pertanyaan9' => ['required', 'string', 'max:50'],
            'pertanyaan8' => ['required', 'string', 'max:50'],
            'pertanyaan7' => ['required', 'string', 'max:50'],
            'pertanyaan6' => ['required', 'string', 'max:50'],
            'pertanyaan5' => ['required', 'string', 'max:50'],
            'pertanyaan4' => ['required', 'string', 'max:50'],
            'pertanyaan3' => ['required', 'string', 'max:50'],
            'jawaban1' => ['required', 'string'],
            'jawaban2' => ['required', 'string'],
            'jawaban10' => ['required', 'string'],
            'jawaban9' => ['required', 'string'],
            'jawaban8' => ['required', 'string'],
            'jawaban7' => ['required', 'string'],
            'jawaban6' => ['required', 'string'],
            'jawaban5' => ['required', 'string'],
            'jawaban4' => ['required', 'string'],
            'jawaban3' => ['required', 'string'],
        ];
    }
}
