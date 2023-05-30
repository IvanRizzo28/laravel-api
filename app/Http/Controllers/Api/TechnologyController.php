<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function show($id){
        $data=Technology::find($id);
        $data=array_merge($data->toArray(),['projects'=>$data->projects]);

        return response()->json([
            'success' => true,
            'results' => $data
            //'projects'=> $data->projects
        ]);
    }
}
