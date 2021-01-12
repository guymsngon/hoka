<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Trajet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReserveMail;
use Illuminate\Http\Request;

class ReservationController extends Controller
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
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trajet = Trajet::findOrFail($id);
        $reservation = new Reservation();
        $trajet->volume -= $request->tot_volume;
        $trajet->save();
        $user = Auth::user();
        if ($request->hasfile('images1')) {
            $file = $request->file('images1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('colisPictures/', $filename);
            $reservation->images1 = 'colisPictures/'. $filename;
        }
        if ($request->hasfile('images2')) {
            $file = $request->file('images2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('colisPictures/', $filename);
            $reservation->images2 = 'colisPictures/'. $filename;
        }
        if ($request->hasfile('images3')) {
            $file = $request->file('images3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('colisPictures/', $filename);
            $reservation->images3 = 'colisPictures/'. $filename;
        }
        if ($request->hasfile('images4')) {
            $file = $request->file('images4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('colisPictures/', $filename);
            $reservation->images4 = 'colisPictures/'. $filename;
        }
        if ($request->hasfile('images5')) {
            $file = $request->file('images5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('colisPictures/', $filename);
            $reservation->images5 = 'colisPictures/'. $filename;
        }
        $reservation->length1 = $request->length1;
        $reservation->width1 = $request->width1;
        $reservation->height1 = $request->height1;
        $reservation->volume1 = $request->volume1;
        $reservation->weight1 = $request->weight1;
        $reservation->length2 = $request->length2;
        $reservation->width2 = $request->width2;
        $reservation->height2 = $request->height2;
        $reservation->volume2 = $request->volume2;
        $reservation->weight2 = $request->weight2;
        $reservation->length3 = $request->length3;
        $reservation->width3 = $request->width3;
        $reservation->height3 = $request->height3;
        $reservation->volume3 = $request->volume3;
        $reservation->weight3 = $request->weight3;
        $reservation->length4 = $request->length4;
        $reservation->width4 = $request->width4;
        $reservation->height4 = $request->height4;
        $reservation->volume4 = $request->volume4;
        $reservation->weight4 = $request->weight4;
        $reservation->length5 = $request->length5;
        $reservation->width5  = $request->width5;
        $reservation->height5 = $request->height5;
        $reservation->volume5 = $request->volume5;
        $reservation->weight5 = $request->weight5;
        $reservation->tot_volume = $request->tot_volume;
        $reservation->tot_weight = $request->tot_weight;
        $reservation->id_user = $user->id;
        $reservation->id_trajet = $trajet->id;
        $reservation->danger_merchandise = $request->danger_merchandise;
        $reservation->type_paiement = $request->type_paiement;
        $reservation->info_sup = $request->info_sup;
        $reservation->assurance = $request->assurance;
        try {
            $reservation->save();
            $send_mail = new ReserveMail($reservation->id);
            Mail::to($user->email)->send($send_mail);
            return redirect()->back()->with(["success" => "La reservation a bien été faite un mail vous sera envoyez."]);
        } catch (Exception $e) {
            dd($e);
            return redirct()->back()->with(["error" => "Une erreur est survenue, veuillez réessayer s'il vous plait!"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
