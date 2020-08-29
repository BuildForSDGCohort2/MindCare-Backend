<?php

namespace App\Http\Requests\Api\Answer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'answers' => 'required|array',
            'answers.*.question' => 'required|exists:mental_condition_questions,id',
            'answers.*.option' => 'required|exists:mental_condition_question_options,id'
        ];
    }
}
