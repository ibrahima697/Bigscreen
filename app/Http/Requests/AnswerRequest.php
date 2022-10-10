<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            "email" => "required|email",
            "url" => "required",
            "answers" => "required|array",
            "answers.*" => "required|integer",

        ];
    }
    public function messages()
    {
        return [
            "email.required" => "L'email est obligatoire",
            "email.email" => "L'email n'est pas valide",
            "url.required" => "L'url est obligatoire",
            "answers.required" => "Les réponses sont obligatoires",
            "answers.array" => "Les réponses doivent être un tableau",
            "answers.*.required" => "Les réponses sont obligatoires",
            "answers.*.integer" => "Les réponses doivent être un entier",
        ];

    }
    public function attributes()
    {
        return [
            "email" => "L'email",
            "url" => "L'url",
            "answers" => "Les réponses",
            "answers.*" => "Les réponses",
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $url = $this->input('url');
            $poll = Poll::where('url', $url)->first();
            if (!$poll) {
                $validator->errors()->add('url', 'L\'url n\'existe pas');
            }
        });
    }
}
