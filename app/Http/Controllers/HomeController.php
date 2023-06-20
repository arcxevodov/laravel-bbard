<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private const BB_VALIDATOR = [
        'title' => 'required|max:50',
        'content' => 'required',
        'price' => 'required|numeric'
    ];

    private const BB_ERROR_MESSAGES = [
        'price.required' => 'Бесплатно нельзя :)',
        'required' => 'Заполни это поле, плиз :)',
        'max' => 'Слишком много букаф, надо меньше :max',
        'numeric' => 'По твоему это число? :)'
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home', ['bbs' => Auth::user()->bbs()->latest()->get()]);
    }

    public function showAddBbForm()
    {
        return view('bb_add');
    }

    public function storeBb(Request $request)
    {
        $validated = $request->validate(self::BB_VALIDATOR, self::BB_ERROR_MESSAGES);
        Auth::user()->bbs()->create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'price' => $validated['price']
        ]);
        return redirect()->route('home');
    }

    public function showEditForm(Bb $bb)
    {
        return view('bb_edit', ['bb' => $bb]);
    }

    public function updateBb(Request $request, Bb $bb)
    {
        $validated = $request->validate(self::BB_VALIDATOR, self::BB_ERROR_MESSAGES);
        $bb->fill([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'price' => $validated['price']
        ]);
        $bb->save();
        return redirect()->route('home');
    }

    public function showDeleteBbForm(Bb $bb)
    {
        return view('bb_delete', ['bb' => $bb]);
    }

    public function destroyBb(Bb $bb)
    {
        $bb->delete();
        return redirect()->route('home');
    }
}
