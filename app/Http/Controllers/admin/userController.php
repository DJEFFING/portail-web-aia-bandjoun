<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleEvernement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('admin.user.profil',compact('user'));
    }

    public function index()
    {
        
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, User $user)
    {
        // dd($request->description);
        if($request->hasFile('profil_url')){
            $user->update([
                "profil_url"=>$request->file('profil_url')->store('profil','public')
            ]);
        }
        $user->update([
            'name' => $request->name,
            'email'=> $request->email,
            "prenom" => $request->prenom,
            "telephone" => $request->telephone,
            "description" => $request->description,
            "facebook_url" => $request->facebook_url ,
            "linkdin_url" =>$request->linkdin_url,
            "adress"=>$request->adress,
            "instagram_url" => $request->instagram_url,
            "twiter_url" => $request->twiter_url ,
            "web_url" => $request->web_url  ,
        ]);

        return redirect()->back()->with("message","les informations on été mise à jour.");

    }

    public function delete(User $user)
    {

    }

    public function changRole()
    {

    }

    public function addRole()
    {

    }


}
