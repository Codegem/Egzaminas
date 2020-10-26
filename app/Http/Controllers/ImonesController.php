<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imone;


class ImonesController extends Controller
{
    public function destroy(Imone $imone)
    {
        $imone->delete();
        return redirect('home');
    }

    public function edit(Imone $imone)
    {
        return view('pages.formaedit', compact('imone'));
    }

    public function update(Imone $imone, Request $request)
    {
        $imone->update($request->all());

        return redirect('/manage');
    }
}
