<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideojuegoRequest extends FormRequest
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
        return [
            'videojuego'    => ['required','unique:videojuegos'],
            'categoria'=> ['required'],
            'plataforma'=> ['required'],
            'clasificacion'=> ['required'],
            'precio'=> ['required'],
            'descripcion'   => ['required'],
            'imagen'=> ['required'],
        ];
    }
}
