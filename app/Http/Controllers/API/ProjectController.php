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
        'success' => true,
        'data' => Project::with(['type','technologies'])->orderByDesc('id')->get()
    ]);
   }
}