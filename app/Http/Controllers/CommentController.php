<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request, Bb $bb)
    {
        $bb->comments()->create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => \Auth::user()->id
        ]);
        return redirect()->route('detail', ['bb' => $bb]);
    }
}
