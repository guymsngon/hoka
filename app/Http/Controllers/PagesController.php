<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Trajet;


class PagesController extends Controller
{
    public function index()
    {
        // $town_in = new Collection();
        // $town_out = new Collection();
        $trajets = Trajet::orderBy('id', 'desc')->take(6)->get();
        // $c;
        // $a;
        // foreach(Trajet::all() as $trajet){
        //     if($c != $trajet->town_out){
        //         $c = $trajet->town_out;
        //         $town_out->add($trajet->town_out);
        //     }
        // }
        // foreach(Trajet::all() as $trajet){
        //     if($a != $trajet->town_in){
        //         $a = $trajet->town_in;
        //         $town_in->add($trajet->town_in);
        //     }
        // }
        return view('visiteur.home',compact('trajets'));
    }

    public function search()
    {
        return view('visiteur.search');
    }

    public function trajet($id_trajet)
    {
        $trajet = Trajet::find($id_trajet);
        return view('visiteur.trajet', compact('trajet'));
    }

    public function givetrajet()
    {
        return view('visiteur.givetrajet'); 
    }

    public function detailtrajet($id_trajet)
    {
        $trajet = Trajet::find($id_trajet);
        return view('visiteur.detail_trajet', compact('trajet')); 
    }
    public function profilparam()
    {
        return view('visiteur.profilparam');
    }
    public function profilpaiement()
    {
        return view('visiteur.profilpaiement');
    }

    public function annonce()
    {
        return view('visiteur.annonce');
    }

    public function tchat($id)
    {
        $trajet = Trajet::find($id);
        return view('visiteur.tchat_transport', compact('trajet'));
    }

    public function listtrajet()
    {
        $trajets = Trajet::all();
        return view('visiteur.listtrajet', compact('trajets')); 
    }

    public function searchtrajet(Request $request)
    {
        $chaine = '';
        if($request->transport == 1){
            $chaine = 'bateau';
        }elseif($request->transport == 2){
            $chaine = 'route';
        }elseif($request->transport == 3){
            $chaine = 'train';
        }elseif($request->transport == 4){
            $chaine = 'avion';
        }
        $trajets = Trajet::where('town_out', $request->place_out)->orWhere('town_in', $request->place_in)
                    ->orWhere('date_out', $request->date_out)->orWhere($chaine,1)->get();
        if(count($trajets) > 0){
            dd(count($trajets));
            return view('visiteur.listtrajet', compact('trajets')); 
        }else{
            return redirect()->route('listtrajet')->with(['result' => 
                'Aucun mais là aucun resultat ne correspond a votre recherche vraiment. Voilà la liste complète de nos trajets disponible']);
        }
    }

    public function reservation()
    {
        return view('visiteur.reservation');
    }

    public function confirm($code,$id)
    {
        return view('visiteur.confirm', compact('code','id'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return articles pages
     */

    public function lefret()
    {
        return view('article.lefret');
    }
    public function ccassurance()
    {
        return view('article.ccassurance');
    }
    public function commentemballer()
    {
        return view('article.commentemballer');
    }
    public function difftransport()
    {
        return view('article.difftransport');
    }
    public function fretroutier()
    {
        return view('article.fretroutier');
    }
    public function isassurance()
    {
        return view('article.isassurance');
    }
    public function marchandisedanger()
    {
        return view('article.marchandisedanger');
    }
    public function mesuretel()
    {
        return view('article.mesuretel');
    }
    public function topappli()
    {
        return view('article.topappli');
    }


}
