<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;
class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
  

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            // $rules = Post::getFacadeRoot()->rules;
            $rules = Post::$rules;
           
            return $rules;
     
    }
    public function authorize()
    {
        return true;
    }
}
