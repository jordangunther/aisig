<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UploadRequest extends FormRequest
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
        $rules = [
            'course_title' => 'required',
            'category' => 'required',
            'image' => 'required',
            'description' => 'required|string|min:200',
            //'image' => 'image|mimes:jpeg,bmp,png|max:2000000',
        ];
    
        return $rules;
    }
}
