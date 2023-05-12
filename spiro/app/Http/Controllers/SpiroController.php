<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpiroController extends Controller
{
    public function index() {
        return view('home');
    }

    public function catalogue() {
        return view('catalogue');
    }

    public function inscription() {
        return view('inscription');
    }

    public function about() {
        return view('about');
    }

    public function inscriptionForm(Request $request){
        $erreurs = [];

        $nom_usager = $request->nom_usager;
        $courriel = $request->courriel;
        $mot_passe = $request->mot_de_passe;
        $prenom = $request->prenom;
        $nom = $request->nom;

        if (empty($nom_usager)) $erreurs['nom_usager'] = "Le nom d'usager est manquant";
        if (empty($courriel)) $erreurs['courriel'] = "Le courriel est manquant";
        if (empty($mot_passe)) $erreurs['mot_passe'] = "Le mot de passe est manquant";      
        if (empty($prenom)) $erreurs['prenom'] = "Le prénom est manquant";  
        if (empty($nom)) $erreurs['nom'] = "Le nom est manquant";  

        if (empty($erreurs)) {
            return view('confirmation', ['data' => $request]);
        }
        else {
            return view('inscription', ['data' => $request, 'erreurs' => $erreurs]);
        }


    }
}


