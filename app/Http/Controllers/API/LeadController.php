<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {   
        //recupero tutti i dati dalla request e li metto in $data
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);

        //se la validazione fallisce
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }


        //creo una nuova istanza della classe Lead
        $new_lead = new Lead;
        //assegno i valori catturati in $data
        $new_lead->fill($data);
        $new_lead->save();

        //con la facades Mail utilizzo i metodi per settare email e inviare il contatto
        Mail::to('admin@laravel.it')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true
        ]);
    }
}