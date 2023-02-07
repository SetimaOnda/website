<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;
use App\Models\Image;
use App\Models\Contacto;
use App\Models\Local;
use Location;

class PageController extends Controller
{
    public function tours($id){
        $image1= Image::where('id_tour',$id)->where('ordem',1)->first();
        $image2= Image::where('id_tour',$id)->where('ordem',2)->first();
        $galeria= Image::where('id_tour',$id)->where('ordem', '>', 2)->get();
        
        $tours= Tour::where('id',$id)->first();
        return view('tours', ['tours' => $tours, 'image1' => $image1, 'image2'=> $image2, 'galeria' => $galeria]);
    }
    public function estabelecimento(Request $request)
    {
        $ipy=Location::get($request->ip());
       if(!isset($ipy)){
        $userDe = Location::get($request->ip());
        $local = new Local;
        $local->ip = $userDe->ip;
        $local->countryName = $userDe->countryName;
        $local->regionName = $userDe->regionName;
        $local->cityName = $userDe->cityName;
        $local->zipCode = $userDe->zipCode;
        $local->latitude = $userDe->latitude;
        $local->longitude = $userDe->longitude;
        $local->save();
        return redirect('/');
    }else{
       
    }
    }
    public function contact(Request $request){
        $data = $request->input();
        try{
            $news = new Contacto;
            $news->first_name = $data['first_name'];
            $news->last_name = $data['last_name'];
            $news->email = $data['email'];
            $news->message = $data['assunto'];
            $news->save();

            return redirect('/contact')->with('success',"Contacto enviado com sucesso, aguarda uma resposta :)!");
        }

        catch(Exception $e){
            return redirect('/contact')->with('erro',"Registo Falhado :(");
        }
    }
    
}
