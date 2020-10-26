<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imone;
use Illuminate\Support\Facades\Auth;

class ImonesController extends Controller
{
    public function destroy(Imone $imone)
    {
        if(Auth::check()){
        $imone->delete();
        return redirect('home');
        }
        return redirect ('/login');
    }

    public function edit(Imone $imone)
    {
        if(Auth::check()){
        return view('pages.formaedit', compact('imone'));
        }
        return redirect ('/login');

    }

    public function update(Imone $imone, Request $request)
    {
        if(Auth::check()){
        $imone->update($request->all());
        return redirect('/manage');
        }
        return redirect ('/login');

    }
}
