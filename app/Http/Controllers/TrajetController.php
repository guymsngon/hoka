<?php

namespace App\Http\Controllers;

use App\Trajet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TrajetMail;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trajet = new Trajet();
        $user = Auth::user();
        if ($request->hasfile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('trajetPictures/', $filename);
            $trajet->images = 'trajetPictures/'. $filename;
        }
        $trajet->bateau = $request->bateau;
        $trajet->avion = $request->avion;
        $trajet->route = $request->route;
        $trajet->train = $request->train;
        $trajet->country_out = $request->country_out;
        $trajet->country_in = $request->country_in;
        $trajet->town_out = $request->town_out;
        $trajet->town_in = $request->town_in;
        $trajet->address_in = $request->address_in;
        $trajet->address_out = $request->address_out;
        $trajet->incorterm = $request->incorterm  ;
        $trajet->content_model = $request->content_model;
        $trajet->length = $request->length;
        $trajet->width = $request->width;
        $trajet->height = $request->height;
        $trajet->volume = $request->length * $request->width * $request->height;
        $trajet->weight_unity = $request->weight_unity;
        $trajet->weight = $request->weight;
        $trajet->assurance = $request->assurance;
        $trajet->detail_assurance = $request->detail_assurance;
        $trajet->danger_merchandise = $request->danger_merchandise;
        $trajet->classe_merchandise = $request->classe_merchandise;
        $trajet->nature_merchandise = $request->nature_merchandise;
        $trajet->tarif = $request->tarif;
        $trajet->unity_price = $request->unity_price;
        $trajet->date_out = $request->date_out;
        $trajet->id_user = $user->id;
        try {
            $trajet->save();
            $send_mail = new TrajetMail($trajet->id);
            Mail::to($user->email)->send($send_mail);
            return redirect()->back()->with(["success" => "Le trajet a bien été ajouté."]);
        } catch (Exception $e) {
            dd($e);
            return redirct()->back()->with(["error" => "Une erreur est survenue, veuillez réessayer s'il vous plait!"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function show(Trajet $trajet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function edit(Trajet $trajet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trajet $trajet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trajet $trajet)
    {
        //
    }

}
