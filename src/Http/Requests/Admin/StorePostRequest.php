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
            'title.*' => 'required|string',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'content.*' => 'nullable|string',
            'tags' => 'exists:blog_tags,id',
        ];
    }

    /**
     * @return array
     */
    public function validated($key = null, $default = null)
    {
        unset(parent::validated()['tags']);

        return array_merge([
            'slug' => [
                'en' => Str::slug($this->title['en']),
                'ar' => arabicSlug($this->title['ar'])
            ],
            'author_id' => auth()->guard('admin')->id(),
            'author_type' => get_class(auth()->guard('admin')->user())
        ], parent::validated());
    }
}
