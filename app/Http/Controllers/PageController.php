<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;
use App\Models\Image;

class PageController extends Controller
{
    public function tours($id){
        $image1= Image::where('id_tour',$id)->where('ordem',1)->first();
        $image2= Image::where('id_tour',$id)->where('ordem',2)->first();
        $galeria= Image::where('id_tour',$id)->where('ordem', '>', 2)->get();
        
        $tours= Tour::where('id',$id)->first();
        return view('tours', ['tours' => $tours, 'image1' => $image1, 'image2'=> $image2, 'galeria' => $galeria]);
    }
    
}
