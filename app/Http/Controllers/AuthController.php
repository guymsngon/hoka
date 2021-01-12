<?php

namespace App\Http\Controllers;


use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class AuthController extends Controller
{
    public function getlogin(){
        return view("auth.login");
    }

    public function logins(Request $request){
        $credentials = $request->only(["email","password"]);
        try{
            if(Auth::attempt($credentials)){
                return redirect()->route("index");
            }else{
                return back()->with([
                    "error" => "Adresse mail ou mot de passe incorrect."
                ]);
            }
        }catch(Exception $e){
            Log::error($e->getMessage());
            return back()->withErrors([
                "error" => "Une erreur est survenue, veuillez réessayer s'il vous plaît. "
            ]);
        }
    }

    public function getRegister(){
        return view("auth.register");
    }

    public function register(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->code_postal = $request->code_postal;
        $user->town = $request->town;
        $user->country = $request->country;
        $user->courrie = $request->courrie;
        $user->name_societe = $request->name_societe;
        $user->siret = $request->siret;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        try{
            $code = $this->confirm($user->email);  
            $user->save();
            return redirect()->route('confirm', [$code,$user->id]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            dd($e);
            return back()->with([
                "error"=>"Une erreur est survenue, car il existe déjà un utilisateur ayant cette adresse. "
            ]);
        }
    }

    public function confirm($email)
    {
        $code = random_int(1000,9999);
        $send_mail = new Email($code);
        Mail::to($email)->send($send_mail);
        return $code;
    }

    public function resend_mail($code,$id)
    {
        $user = User::find($id);
        $send_mail = new Email($code);
        Mail::to($user->email)->send($send_mail);
        return redirect()->route('confirm', [$code,$id]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postconfirm(Request $request, $code,$id){

        $user = User::find($id);
        if($request->code == $code){
            Auth::login($user);
            return redirect()->route("index");
        }else {
            return back()->with(['error' => 'Le code saisi n\'est pas valide']);
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route("index");
    }
}
