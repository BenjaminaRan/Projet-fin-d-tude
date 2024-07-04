<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PharmacieController extends Controller
{
    public function index()
    {
        $pharma = Pharmacie::all();
        return view('Pharmacie.liste', compact('pharma'));
    }
    public function liste()
    {
        $pharma = Pharmacie::all();
        return view('Pharmacie.liste', compact('pharma'));
    }
    public function store(Request $request)
    {
        $rules = [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Nom' => 'required|string|max:255',
            'Quantite' => 'required|string|max:255',
            'Prix' => 'required|string|max:20',
        ];

        $validatedData = $request->validate($rules);

        try {
            DB::beginTransaction();

            if ($request->hasFile('Image')) {
                $image = $request->file('Image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $imageName);
                $validatedData['Image'] = $imageName;
            } else {
                $validatedData['Image'] = null;
            }

            $pharmaci = Pharmacie::create($validatedData);

            DB::commit();

            return redirect()->back()->with('success', 'Medicament ajouté avec succès.');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Erreur lors de l\'ajout du medicament : ', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout du medicament.');
        }
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'Nom' => 'required|string|max:255',
            'Quantite' => 'required|string|max:255',
            'Prix' => 'required|string|max:20',
        ];

        $validatedData = $request->validate($rules);

        try {
            DB::beginTransaction();

            $pharmaci = Pharmacie::findOrFail($id);

            if ($request->hasFile('Image')) {
                $image = $request->file('Image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $imageName);
                $validatedData['Image'] = $imageName;
            }

            $pharmaci->update($validatedData);

            DB::commit();

            return redirect()->back()->with('success', 'Medicament modifié avec succès.');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Erreur lors de la modification du medicament : ', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Erreur lors de la modification du medicament.');
        }
    }
}