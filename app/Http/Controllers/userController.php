<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Hash;

class userController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('paramprofil', compact('user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if(request()->has('imgcni')){
            $imgcniuploaded = request()->file('imgcni');
            $imgcniname = time() . '.' .$imgcniuploaded->getClientOriginalExtension();
            $imgcnipath = 'cniimages/';
            $imgcniuploaded->move($imgcnipath, $imgcniname);
        }
        if(request()->has('imgcni2')){
            $imgcni2uploaded = request()->file('imgcni2');
            $imgcni2name = time() . '.' .$imgcni2uploaded->getClientOriginalExtension();
            $imgcni2path = 'cniimages/';
            $imgcni2uploaded->move($imgcni2path, $imgcni2name);
        }
        if(request()->has('imagesoc')){
            $imagesocuploaded = request()->file('imagesoc');
            $imagesocname = time() . '.' .$imagesocuploaded->getClientOriginalExtension();
            $imagesocpath = 'societeimages/';
            $imagesocuploaded->move($imagesocpath, $imagesocname);
        }

        $user=Auth::user();

            $user->borndate= $request['borndate'];
            $user->cni= $request['cni'];
            $user->phone2= $request['phone2'];
            $user->imgcni= $imgcnipath.$imgcniname;
            $user->imgcni2= $imgcni2path.$imgcni2name;
            $user->name_societe= $request['name_societe'];
            $user->siret= $request['siret'];
            $user->townsoc= $request['townsoc'];
            $user->countrysoc= $request['countrysoc'];
            $user->phonesoc= $request['phonesoc'];
            $user->phonesoc2= $request['phonesoc2'];
            $user->imagesoc= $imagesocpath.$imagesocname;
            $user->address_soc= $request['address_soc'];

        $user->save();
        return back();




//        $updateData = $request->validate([
//            'name'=>'',
//            'last_name'=>'',
//            'borndate'=>'',
//            'cni'=>'',
//            'code_postal'=>'',
//            'email'=>'',
//            'phone'=>'',
//            'phone2'=>'',
//            'town'=>'',
//            'country'=>'',
//            'profilimage'=>'',
//            'courrie'=>'',
//            'imgcni'=>['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:2000' ],
//            'imgcni2'=>['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:2000' ],
//            'name_societe'=>'',
//            'siret'=>'',
//            'townsoc'=>'',
//            'countrysoc'=>'',
//            'phonesoc'=>'',
//            'phonesoc2'=>'',
//            'imagesoc'=>['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:2000' ],
//            'address_soc'=>'',
//            'password'=>'',
//
//        ]);
//
//
//        User::whereId($id)->update($updateData);
//        return redirect('/profilparam')->with('completed', 'Donnees utilisateur mis a jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
