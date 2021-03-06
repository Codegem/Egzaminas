<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Imone;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function forma()
    {
        return view('pages.imonesforma');
    }

    public function store(){
        if(Auth::check()){
        $data = request()->validate([
        'pavadinimas' => 'required',
        'kodas' => 'required',
        'pvm_kodas' => 'required',
        'adresas' => 'required',
        'telefonas' => 'required',
        'elpastas' => 'required',
        'veikla' => 'required',
        'vadovas' => 'required'
        ]);
        
        $data['user_id'] = auth()->user()->id;
        $data = \App\Models\Imone::create($data);
        return redirect('/home');
        }
        return redirect ('/login');

    }

    public function showall(){
        $imones=Imone::all();
        return view('pages.sarasasimoniu', compact('imones'));
    }   
    
    public function manage(){
        if(Auth::check()){
        $imones=Imone::all();
        return view('pages.manage', compact('imones'));
    }
    return redirect ('/login');
    }

}
