<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $data=Project::with('technologies')->get();

        return response()->json([
            'success' => true,
            'results' => $data
        ]);
    }
}