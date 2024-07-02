<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmployersController extends Controller
{
    public function index()
    {
        $emps = Employers::all();
        return view('Employer.liste', compact('emps'));
    }


    public function liste()
    {
        $emps = Employers::all();
        return view('liste', compact('emps'));
    }
    public function store(Request $request)
    {
        $rules = [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'Nom' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'Phone' => 'required|string|max:20',
            'Poste' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'MotDePasse' => 'required|string|min:8'
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

            $validatedData['MotDePasse'] = bcrypt($validatedData['MotDePasse']);

            $employee = Employers::create($validatedData);

            DB::commit();

            return redirect()->back()->with('success', 'Employé ajouté avec succès.');
        } catch (\Exception $employee) {
            DB::rollback();
            Log::error('Erreur lors de l\'ajout de l\'employé : ', ['error' => $employee->getMessage()]);
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout de l\'employé.');
        }

    }
    public function update(Request $request, $id)
    {
        $rules = [
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'Nom' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'Phone' => 'required|string|max:20',
            'Poste' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'MotDePasse' => 'nullable|string|min:8'
        ];

        $validatedData = $request->validate($rules);

        try {
            DB::beginTransaction();
            
            $employee = Employers::findOrFail($id);

            if ($request->hasFile('Image')) {
                $image = $request->file('Image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $imageName);
                $validatedData['Image'] = $imageName;
            }

            if (!empty($validatedData['MotDePasse'])) {
                $validatedData['MotDePasse'] = bcrypt($validatedData['MotDePasse']);
            } else {
                unset($validatedData['MotDePasse']);
            }

            $employee->update($validatedData);

            DB::commit();

            return redirect()->back()->with('success', 'Employé modifié avec succès.');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Erreur lors de la modification de l\'employé : ', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Erreur lors de la modification de l\'employé.');
        }
    }

}
