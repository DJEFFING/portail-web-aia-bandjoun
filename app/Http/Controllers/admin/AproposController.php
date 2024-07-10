<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function index()
    {
        $listApropos = Apropos::all();
        return view('admin.appropos.index',compact('listApropos'));
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Apropos $apropos)
    {
        // dd($request);
        if($request->hasFile("media")){

            $originalName = $request->file('media')->getClientOriginalName();

            // pour sauvegader les fichiers en fonction de l'environement
            if (app()->environment(['local'])) {
                $data_image = $request->file('media')->storeAs('apropos', $originalName, 'public');
            } else {
                $data_image = $request->file('media')->storeAs('apropos', $originalName, 's3');
            }

            $apropos->update(["image_url" => $data_image ]);
        }

        $apropos->update([
            "titre" => $request->titre,
            "desription" => $request->desription,
        ]);

        return redirect()->back()->with('message','La section À propos a été modifiée avec succès !');
    }

    public function delete(Apropos $apropos)
    {

    }
}
