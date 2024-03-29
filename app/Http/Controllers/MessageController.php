<?php

namespace App\Http\Controllers;

use App\Models\actualite;
use App\Models\classe;
use App\Models\etudient;
use App\Models\filiere;
use App\Models\formateur;
use App\Models\message;
use App\Models\niveau;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use App\Models\classeFormMessage;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message.index', [

        "messages"=>message::all(),
        "formateurs"=>formateur::all(),
        "filieres"=>filiere::all(),
        "niveuax"=>niveau::all(),
        "classes"=>classe::all(),
        "etudients"=>etudient::all(),
        "actualites"=>actualite::all(),
        "classeFormMessage"=>classeFormMessage::all(),


            'utilisateurs' => utilisateur::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('message.index', [

            'messages' => message::all(),
            'etudients' => etudient::all(),

        ]);
    }





    public function store(Request $request)
    {
        $requestData = $request->except('_token'); // Exclude the CSRF token
        $requestData['id'] = auth()->id(); // Add the authenticated user's ID to the request data

        // Check if a file is present in the request
        if ($request->hasFile('file')) {
            $requestData['file'] = $request->file('file')->store('message', 'public');
        } else {
            $requestData['file'] = null; // Set file to null if no file is uploaded
        }
        if ($request->input('contenu') === null) {

            $requestData['contenu'] = "";
        }

        // Create the message
        message::create($requestData);

        // Redirect back to the message index page
        return redirect()->route('message.index');
    }








    public function download($filename)
    {
        $file = Storage::disk('public')->path($filename);
        return response()->download($file);
    }






    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function groupe($groupId)
    {
        return view('message.groupe', [
            'groupId' => $groupId,
            'etudients' => etudient::all(),
            'messages' => message::all(),

        ]);
    }
}








