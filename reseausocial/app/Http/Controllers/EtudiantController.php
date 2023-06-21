<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $etudiants = Etudiant::all(); //select * from etudiants
          $etudiants = Etudiant::select()
          ->join('users', 'users.id', '=','user_id')
          ->get();

        return view('college.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::selectVille();

        return view('college.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['required','confirmed','max:20', Password::min(2)
                ->letters()
                ->mixedCase()
                ->numbers()], 
            'adresse' => 'required',
            'telephone' => 'required',
            'date_naissance' => 'required|date',
            'ville_id' => 'required|integer|exists:villes,id'
        ]);

        
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        $newEtudiant = Etudiant::create([
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id,
            'user_id' => $user->id
        ]);

        return redirect(route('login'))->withSuccess(trans('lang.text_success_user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view ('college.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::selectVille();

        return view('college.edit', ['etudiant' => $etudiant, 'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]);

        return redirect(route('college.show', $etudiant));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect(route('college.index'));
    }
}
