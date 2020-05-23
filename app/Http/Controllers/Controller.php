<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function inscription()
    {
        return view('user.inscription');
    }

    public function soutien(){
        return view('user.soutien');
    }

    public function volontariat(){
        return view('user.volontariat');
    }
    public function partenaires(){
        return view('user.partenaires');
    }

    public function videos(){
        $videos=Video::orderByRaw('created_at DESC')->paginate(6);
        return view('user.videos',compact("videos"));
    }
    public function contact(){
        return view('user.contact');
    }




}
