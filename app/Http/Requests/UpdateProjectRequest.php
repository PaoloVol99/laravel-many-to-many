<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>[
                'required',
                'max:30',
                Rule::unique('projects','title')->ignore($this->project)
            ],
            'customer'=>'nullable|max:30',
            'description'=>'required|min:10',
            'url'=>'required|url|max:220',
            'type_id' => 'nullable|exists:types,id',

        ];
    }
}
