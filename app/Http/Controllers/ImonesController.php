<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imone;


class ImonesController extends Controller
{
    public function destroy(Imone $imones)
    {
        $imones->delete();
        return redirect()->route('pages.sarasasimoniu');
    }
}
