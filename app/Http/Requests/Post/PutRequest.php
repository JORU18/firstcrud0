<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class PutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */




    static public function myRules()
    {


        
        return [
            "title" => "required",
           "slug"=>"required|min:5|max:500|unique:posts",
            "content" => "required|min:7",
            "description" => "required|min:7",
            "posted" => "required",
            "category_id" => "required|integer"

        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            "title" => "required",
            "slug"=>"required|min:5|max:500|unique:posts,slug,".$this->route("post")->id,
            "content" => "required|min:7",
            "description" => "required|min:7",
            "posted" => "required",
            "category_id" => "required|integer",
            "image"=>"mimes:jpeg,jpg,png|max:10240"

        ];
    }
}
