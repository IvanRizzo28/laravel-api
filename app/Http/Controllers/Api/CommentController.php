<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(CommentRequest $request){
        $data=$request->validated();
        Comment::create($data);
        return $data;
    }
}
