<?php

namespace App\Http\Controllers\admin\authantification;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function loginPage()
    {
        if(auth()->check()){
            redirect(route('admin.index'));
        }
        return view('admin.authantification.login.login-page')->with('message',"connectez-vous !!");
    }

    public function login(LoginRequest $loginRequest)
    {
        // dd($loginRequest);
        $credentials = $loginRequest->getCredential();
        $remenber =  $loginRequest->get('remenber',false);

        if(!$remenber){
            $remenber = false;
        }

        if(!Auth::validate($credentials,$remenber)){
            Session::put('error');
            return redirect(route('login-page'))->with('error',"l'email ou le mot de passe est incorrect !!");
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user,$remenber);
        return $this->authanticated();
    }

    protected function authanticated()
    {
        $nom = auth()->user()->name;
        Session::forget('error');
        return redirect('admin/')->with('message','bienvenue '.$nom);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login-page'))->with('message','vous êtes déconnectez !!');
    }
}
