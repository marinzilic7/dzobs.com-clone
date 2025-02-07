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

        $data = $request->validated();

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
