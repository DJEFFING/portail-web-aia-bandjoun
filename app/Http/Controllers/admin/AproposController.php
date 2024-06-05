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
            $data_image=$request->file('media')->store('apropos','public');
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
