<?php

namespace Neop\Blog\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function validated($key = null, $default = null)
    {
        return array_merge([
            'slug' => Str::slug($this->title),
            'author_id' => auth()->guard('admin')->id(),
            'author_type' => get_class(auth()->guard('admin')->user())
        ], parent::validated());
    }
}
