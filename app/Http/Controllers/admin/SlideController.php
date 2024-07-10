<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::latest()->get();
        return view('admin.slide.index',compact('slides'));
    }

    public function store(Slide $slide)
    {

    }

    public function update(Request $request, Slide $slide)
    {
        // dd($request);
        // $data = $request->except('_token','photo');

        // if ($request->hasFile('media')) {
        //     foreach($request->media as $item){
        //     $media[]= $item->store('media', 'public');
        //     }
        //     $data['media']=json_encode($media);
        // }


        if($request->hasFile("media")){
            $data_image = [];
            foreach($request->media as $media)
            {

                $originalName = $request->file('media_url')->getClientOriginalName();

                // pour sauvegader les fichiers en fonction de l'environement
                if (app()->environment(['local'])) {
                    $data_image [ ]= $request->file('media_url')->storeAs('slide', $originalName, 'public');
                } else {
                    $data_image [] = $request->file('media_url')->storeAs('slide', $originalName, 's3');
                }

            }

            $slide->update(["image_url"=>json_encode($data_image)]);
        }

        $slide->update([
            "titre" => $request->titre,
            "desription" => $request->desription,
        ]);

        return redirect()->back()->with('message','Les slides ont été modifiés avec succès !');
    }



    public function delete(Slide $slide)
    {

    }
}
