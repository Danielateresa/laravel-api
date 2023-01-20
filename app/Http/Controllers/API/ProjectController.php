<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
   public function index()
   {
    //restituisce la lista dei progetti presenti nel database in formato json
    

        
       return response()->json([
            'success'=> true,
            'results'=> Project::with(['type','technologies'])->orderByDesc('id')->paginate(8)//8 elementi per pagina
        ]);
         //return Project::with(['type','technologies'])->orderByDesc('id')->paginate(8); 
   }
}