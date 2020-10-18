<?php

namespace App\Http\Requests\Favorite;

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
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => ['required', 'string'],
            'author'       => ['nullable', 'string'],
            'content'      => ['nullable', 'string'],
            'url_to_image' => ['nullable', 'string'],
            'url'          => ['nullable', 'string'],
            'published_at' => ['required', 'string'],
        ];
    }
}