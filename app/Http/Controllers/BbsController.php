<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Support\Facades\DB;

class BbsController extends Controller
{
    public function index()
    {
        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
    }

    public function detail(Bb $bb)
    {
        return view('detail', ['bb' => $bb]);
    }

    public function search(Request $request) {
        $context = ['bbs' => DB::table('bbs')->where('title', 'LIKE', '%' . $request->q . '%')->get()];
        return view('index', $context);
    }
}
