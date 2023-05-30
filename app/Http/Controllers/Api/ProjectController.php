<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class ProjectController extends Controller
{
    public function index(){
        $data=Project::with('technologies')->select('projects.*','types.name')->leftJoin('types', 'types.id', '=', 'projects.type_id')->paginate(3);

        return response()->json([
            'success' => true,
            'results' => $data
        ]);
    }

    public function show($id){
        try {
            $data=Project::with('technologies','comments')->select('projects.*','types.name')->leftJoin('types', 'types.id', '=', 'projects.type_id')->find($id);

            if ($data){
                return response()->json([
                    'success' => true,
                    'results' => $data
                ]);
            }else{
                return response()->json([
                    'success' => false,
                    'results' => null,
                    'error' => 404
                ], 404);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'results' => null,
                'error' => 500
            ], 500);
        }
    }
}
