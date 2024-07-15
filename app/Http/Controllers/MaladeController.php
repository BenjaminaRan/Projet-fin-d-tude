<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Malade;
use App\Models\Employers;
use App\Models\Chambre;
use App\Models\Pharmacie;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MaladeController extends Controller
{
    public function index()
    {
        $caisseiers = Employers::where('Poste', 'caissier')->get();
        $pharmaciens = Employers::where('Poste', 'pharmacien')->get();
        $medicaments = Pharmacie::all();

        $tranokely = Chambre::with('malade')->get();
        $malade = Malade::all();
        $tomobile = Ambulance::all();

        foreach ($tranokely as $chambre) {
            if ($chambre->Ocupation) {
                // Calculer le temps restant en mois
                $occupationTime = Carbon::parse($chambre->occupation_time);
                $currentDate = Carbon::now();
                $remainingMonths = $currentDate->diffInMonths($occupationTime, false);

                // Passer la valeur de $remainingMonths à la vue
                $chambre->remaining_months = $remainingMonths;
            }
        }

        return view('dashboard', compact('tranokely', 'malade', 'tomobile', 'caisseiers', 'pharmaciens', 'medicaments'));
    }

    public function accueil()
    {
        // Redirection vers la vue welcome
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'age' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'cas' => 'required',
        ]);

        // Création du malade
        $malade = Malade::create([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'age' => $request->age,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'cas' => $request->cas,
        ]);

        // Trouver une chambre libre
        $chambre = Chambre::where('Ocupation', false)->first();

        // Si une chambre est trouvée, l'attribuer au malade
        if ($chambre) {
            $malade->chambre_id = $chambre->id;
            $malade->save();

            // Marquer la chambre comme occupée
            $chambre->Ocupation = true;
            $chambre->occupation_time = Carbon::now();
            $chambre->duree_restante = 10800; // 3 heures en secondes
            $chambre->save();

            return back()->with('success', 'Malade ajouté avec succès.');
        } else {
            return back()->with('error', 'Aucune chambre libre disponible.');
        }
    }

    // Méthode pour vérifier si une chambre doit être libérée
    private function shouldFreeRoom($chambre)
    {
        // Vérifier si la chambre est occupée depuis plus de 1 heure
        return $chambre->occupation_time && Carbon::parse($chambre->occupation_time)->lte(now()->subHour());
    }

    // Méthode pour obtenir le statut d'une chambre via AJAX
    public function getChambreStatus($id)
    {
        $chambre = Chambre::findOrFail($id);
        $startTimestamp = strtotime($chambre->occupation_time);
        $now = time();
        $elapsedSeconds = $now - $startTimestamp;
        $durationSeconds = 3600; // Durée d'occupation en secondes (1 heure)
        $remainingSeconds = max(0, $durationSeconds - $elapsedSeconds);

        return response()->json(['remainingSeconds' => $remainingSeconds]);
    }

    public function destroy($id)
    {
        // Trouver le malade par son ID
        $malade = Malade::findOrFail($id);

        $chambre = Chambre::find($malade->chambre_id);

        // Si la chambre est trouvée
        if ($chambre) {
            $chambre->Ocupation = false;
            $chambre->save();
        }

        // Supprimer le malade
        $malade->delete();

        return back()->with('success', 'Malade supprimé avec succès.');
    }


    //Mise à jour dans la base de données de quantité 

    public function updateQuantities(Request $request)
    {
        $quantities = $request->input('quantities');
    
        foreach ($quantities as $id => $quantity) {
            $medicaments = Pharmacie::find($id);
            if ($medicaments) {
                $medicaments->Quantite -= $quantity;
                $medicaments->save();
            }
        }
    
        return response()->json(['success' => true]);
    }
}
