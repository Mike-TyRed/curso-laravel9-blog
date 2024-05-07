<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreCursoRequest extends FormRequest
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
     * Prepare the data for validation.
     */
    public function prepareForValidation():void
    {
        $this->merge([
            'slug' => Str::slug($this->name,'-'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->isMethod('PATCH')){
            return [
                'name' => 'required|unique:posts|max:25',
                'slug' => 'required',
                'description' => 'required',
                'category' => 'required',
            ];
        }
        return [
            'name' => 'required|unique:posts|max:25',
            'slug' => 'required',
            'description' => 'required',
            'category' => 'required',
        ];
    }

    /* Personalizar mensajes */
    public function attributes(){
        return [
            'name' => 'nombre del curso',
            'description' => 'descripcion del curso',
            'category' => 'categoria del curso',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Debe ingresar el nombre del curso',
            'description.required' => 'Debe ingresar una descripcion al curso',
            'category.required' => 'Debe ingresar la categoria del curso',
        ];
    }
}
