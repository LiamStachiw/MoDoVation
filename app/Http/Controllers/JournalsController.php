<?php

namespace App\Http\Controllers;

use App\Journals;

class JournalsController extends Controller
{
    public function index()
    {
        $journals = Journals::latest()->get();

        return view('/Journals/journals', compact('journals'));
    }

    public function prompted()
    {
        return view('/Journals/promptedJournal');
    }

    public function unprompted()
    {
        return view('/Journals/unpromptedJournal');
    }

    public function journal(Journals $journal)
    {
        return view('/Journals/journal', compact('journal'));
    }

    //Store an unprompted journal entry to the database
    public function storeUnprompted()
    {

        $this->validate(request(), [

            'body' => 'required'
        ]);

        //send the request data for title and body to the database
        Journals::create(request(['body']));

        //redirect to the journals home page
        return redirect('/journals');
    }

    //Store a prompted journal entry to the database
    public function storePrompted()
    {

        $this->validate(request(), [

            'body' => 'required'
            
        ]);

        //send the request data for body & prompts to the database
        Journals::create(request(['body', 'prompt1', 'prompt2', 'prompt3', 'prompt4', 'prompt5']));

        //redirect to the journals home page
        return redirect('/journals');
    }
}
