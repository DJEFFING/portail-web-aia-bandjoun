<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Evernement;
use App\Models\EvernementPartenaire;
use App\Models\Partenaire;
use App\Models\RoleEvernement;
use App\Models\Type;
use App\Models\TypeEvernement;
use App\Models\User;
use App\Models\UserEvernement;
use Illuminate\Http\Request;

class EvernementController extends Controller
{
    public  function index()
    {
        $listEvernement = Evernement::latest()->get();;
        $listTypeEvernement = Type::latest()->get();;
        return view('admin.gestion-vernement.evernement.index',compact('listEvernement','listTypeEvernement'));
    }

    public function store(Request $request)
    {
        // dd($request);
        if($request->hasFile("media_url")){
            $newEvent =  Evernement::create([
                "titre" => $request->titre,
                "description_1"=> $request->description_1,
                "description_2" => $request->description_2,
                "media_url" => $request->file("media_url")->store("evernement","public"),
                "date" => $request->date,
                "ville" => $request->ville,
                "adress" => $request->adress,
            ]);
            $this->creationTypeEvent($request->typeEvent_id,$newEvent->id);
        }
        return redirect(route('admin.evernement.index'))->with('message',"evènement crée avec success!!");

    }

    public function showStore()
    {
        $listTypeEvernement = Type::all();
        return view('admin.gestion-vernement.evernement.create',compact('listTypeEvernement'));
    }

    public function showUpdate(Evernement $evernement)
    {

        // dd($evernement);
        $listTypeEvernement = Type::all();
        return view('admin.gestion-vernement.evernement.update',compact('evernement','listTypeEvernement'));
    }

    public function show(Evernement $evernement)
    {
        // dd($evernement);
        $listUsers = $this->getUser($evernement->id);
        $listPartenaire = $this->getPartenaire($evernement->id);
        $listeRoleEvernement = RoleEvernement::all();
        return view('admin.gestion-vernement.evernement.show',compact('evernement','listUsers','listeRoleEvernement','listPartenaire'));

    }

    public function update(Request $request,Evernement $evernement)
    {
        // dd($evernement);
        if($request->hasFile("media_url")){
            $evernement->update([
                "media_url" => $request->file("media_url")->store("evernement","public")
            ]);
        }

        $evernement->update([
            "titre" => $request->titre,
            "description_1"=> $request->description_1,
            "description_2" => $request->description_2,
            "date" => $request->date,
            "ville" => $request->ville,
            "adress" => $request->adress,
        ]);

        if($request->typeEvent_id){
           $lastType_id = $evernement->types->pluck("id");

           for($i=0;$i<count($lastType_id);$i++){
            TypeEvernement::where("evernement_id",$evernement->id)
            ->where("type_id",$lastType_id[$i])->delete();
           }
           $this->creationTypeEvent($request->typeEvent_id,$evernement->id);
        }

        return redirect(route('admin.evernement.index'))->with('message',"evènement modifier avec success!!");

    }

    public function isVisible(Evernement $evernement)
    {
        $evernement->update(["status" => !($evernement->status)]);
        $message = ($evernement->status == true) ? "l'Evènement est maintenant public" : "l'Evènement est n'est plus public !!";
        return redirect()->back()->with('message', $message);
    }

    public function delete(Evernement $evernement)
    {
        $evernement->delete();
        return redirect()->back()->with('message', "l'Evènement à été supprimer avec success !!");
    }

    public function creationTypeEvent($listTypeEvernement_id, $evernement_id)
    {
        for($i = 0; $i<count($listTypeEvernement_id);$i++)
        {
            TypeEvernement::create([
                "evernement_id"=>$evernement_id,
                "type_id" => $listTypeEvernement_id[$i],
            ]);
        }
        return;
    }

    public function addMembre(Request $request, Evernement $evernement)
    {
        // dd($request);
        UserEvernement::create([
            "user_id" => $request->user_id,
            "evernement_id" => $evernement->id,
            "role_evernement_id" => $request->role_evernement_id
        ]);
        return redirect()->back()->with('message',"membre ajouter avec success!!");
    }

    public function addPartenaire(Request $request,Evernement $evernement)
    {
        EvernementPartenaire::create(
        [
            "evernement_id" => $evernement->id,
            "partenaire_id" => $request->partenaire_id,
        ]);

        return redirect()->back()->with('message',"partenaire ajouter avec success !!");
    }

    public function getUser($evernement_id)
    {
        $users = User::all();
        $listUser = [];
        foreach($users as $user){
            if(!( UserEvernement::where("user_id",$user->id)
                    ->where("evernement_id",$evernement_id)
                    ->exists()
                ) ){
                $listUser [] =$user;
            }
        }
        return $listUser;
    }

    public function getPartenaire($evernement_id)
    {
        $paratenaires = Partenaire::all();
        $listPartenaire = [];
        foreach($paratenaires as $paratenaire)
        {
            if(!(EvernementPartenaire::where("partenaire_id",$paratenaire->id)
                ->where("evernement_id",$evernement_id)
                ->exists() )
            )
            {
              $listPartenaire [] = $paratenaire;
            }
        }

        return $listPartenaire;
    }
}
