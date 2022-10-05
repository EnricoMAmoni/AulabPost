<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        return[
            'title'=>'required|max:50',
            'description'=>'required|min:5|max:255',
            'body'=>'required|min:30|max:10000',
            'img'=>'required|mimes:png,jpg,jpeg,webp',
        ];
    }

    public function messages(){
                
        return[
            'title.required'=>'Devi inserire il titolo.',
            'title.max'=>'Il titolo deve essere di massimo 50 caratteri.',

            'description.required'=>'Devi inserire la descrizione.',
            'description.min'=>'La descrizione deve essere di minimo 5 caratteri.',
            'description.max'=>'La descrizione deve essere di massimo 255 caratteri.',

            'body.required'=>'Devi inserire il corpo dell\'articolo.',
            'body.min'=>'La descrizione deve essere di minimo 30 caratteri.',
            'body.max'=>'La descrizione deve essere di massimo 10000 caratteri.',

            'img.required'=>'Devi inserire un\'immagine.',
            'img.mimes'=>'Il file da inserire può essere solo: .png .jpg .jpeg .webp',
        ];
    }
}
