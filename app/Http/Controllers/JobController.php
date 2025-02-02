<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\job as Job;


class JobController extends Controller
{
    public function dodajOglas(Request $request)
    {
        $iskustvoString = implode(',', $request->iskustvo);

        $data = $request->validate([
            'naziv_pozicije' => 'required',
            'iskustvo' => 'required',
            'kompanija' => 'required',
            'lokacija' => 'required',
            'opis_pozicije' => 'required',
            'link' => 'required',
            'ime' => 'required',
            'kontakt' => 'required',
            'vrsta_oglasa' => ''
        ]);

        $data['iskustvo'] = $iskustvoString;
        $job = Job::create($data);

        $job->save();
        if($job){
            return response()->json(['status' => 'success', 'message' => 'Oglas je uspješno dodan.']);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Došlo je do greške prilikom dodavanja oglasa.']);
        }
    }

    public function dohvatiOglase()
    {
        $jobs = Job::all();
        return response()->json($jobs);
    }
}
