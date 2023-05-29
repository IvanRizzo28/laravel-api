<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class ProjectController extends Controller
{
    public function index(){
        $data=Project::with('technologies')->select('projects.*','types.name')->leftJoin('types', 'types.id', '=', 'projects.type_id')->get();

        return response()->json([
            'success' => true,
            'results' => $data
        ]);
    }

    public function show($id){
        $data=Project::find($id);

        return response()->json([
            'success' => true,
            'results' => $data
        ]);
    }
}
