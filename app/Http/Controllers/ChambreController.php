<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Caisse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ChambreController extends Controller
{
    public function addMoney(Request $request)
    {
        $request->validate([
            'money' => 'required',

        ]);
        $argnet = Caisse::create([
            'money' => $request->Nom,
            
        ]);
    }
}
