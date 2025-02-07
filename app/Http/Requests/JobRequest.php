<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'naziv_pozicije' => 'required',
            'iskustvo' => 'required',
            'kompanija' => 'required',
            'lokacija' => 'required',
            'opis_pozicije' => 'required',
            'link' => 'required',
            'ime' => 'required',
            'kontakt' => 'required',
            'vrsta_oglasa' => ''
        ];
    }

    public function messages () {
        return [
            'naziv_pozicije.required' => 'Naziv pozicije je obavezan',
            'iskustvo.required' => 'Iskustvo je obavezno',
            'kompanija.required' => 'Kompanija je obavezna',
            'lokacija.required' => 'Lokacija je obavezna',
            'opis_pozicije.required' => 'Opis pozicije je obavezan',
            'link.required' => 'Link je obavezan',
            'ime.required' => 'Ime je obavezno',
            'kontakt.required' => 'Kontakt je obavezan'
        ];
    }
}
