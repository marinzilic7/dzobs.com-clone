<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\job as Job;


class JobController extends Controller
{
    public function dodajOglas(JobRequest $request)
    {
        $iskustvoString = implode(',', $request->iskustvo);
        $tipOglasaString = implode(',', $request->tip_oglasa);
        $data = $request->validated();

        $data['iskustvo'] = $iskustvoString;
        $data['tip_oglasa'] = $tipOglasaString;
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
        $job = Job::orderByRaw("FIELD(tip_oglasa, 'Premium', 'Standard', 'Običan')")
                  ->get();

            return response()->json($job);
    }
}
