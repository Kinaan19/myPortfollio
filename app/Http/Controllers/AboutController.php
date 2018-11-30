<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention;
use Storage;
use App\About;

class AboutController extends Controller
{
    public function edit()
    {
        $abouts = About::find(1);
        return view('editAbout', compact('abouts'));
    }

    public function update(Request $request)
    {   
        $this->validate($request, [
            'sectionTitle' => 'required|max:50',
            'contentTitle' => 'required',
            'contentText' => 'required',
        ]);
        $abouts = About::find(1);
        $abouts->aboutTitle = $request->sectionTitle;        
        if($request->sectionImg){
            $resize = Intervention::make($request->sectionImg)->resize(500, 700);
            $resize->save();
            $filename = 'portrait.jpg';
            Storage::put('public/images/'.$filename, $resize);
        };
        $abouts->contentTitle = $request->contentTitle;
        $abouts->contentText = $request->contentText;
        $abouts->save();
        return redirect('/home');
    }
}
