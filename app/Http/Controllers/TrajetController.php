<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Trajet;
use App\Models\Camping;

class TrajetController extends Controller
{
    //
    public function north(){
        // $trajets = Trajet::latest()->paginate(4);
        $trajetsN = Trajet::where('type_trajet','N')->get();
        $trajetsE = Trajet::where('type_trajet','E')->get();
        $trajetsW = Trajet::where('type_trajet','W')->get();
        $trajetsS = Trajet::where('type_trajet','S')->get();
        $campings = Camping::all();
        return view('index', compact('trajetsN','trajetsE','trajetsW','trajetsS','campings'));
    }

    public function trajet(Request $request,$id){
        $trajets = Trajet::where('id',$id)->get();
        return view('trajet',['trajets'=>$trajets]);
    }
}
