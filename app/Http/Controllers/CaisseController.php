<?php

namespace App\Http\Controllers;

use App\Models\Caisse;
use App\Models\Pharmacie;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CaisseController extends Controller
{
    public function addMoney(Request $request)
    {
        try {
            $request->validate([
                'money' => 'required|numeric', 
            ]);

            Caisse::create([
                'money' => $request->money,
            ]);

            return redirect('/dashboard')->with('success', 'Montant ajouté avec succès à la caisse.');

        } catch (ValidationException $e) {
            return response()->json(['success' => false, 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Une erreur est survenue lors de l\'ajout du montant à la caisse.'], 500);
        }
    }

}