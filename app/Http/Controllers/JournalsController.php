<?php

namespace App\Http\Controllers;

use App\Journals;

class JournalsController extends Controller
{
    public function index()
    {
        return view('/Journals/journals');
    }

    public function journal()
    {
        return view('/Journals/journal');
    }

    public function prompted()
    {
        return view('/Journals/promptedJournal');
    }

    public function unprompted()
    {
        return view('/Journals/unpromptedJournal');
    }

    //Store an unprompted journal entry to the database
    public function storeUnprompted()
    {

        //send the request data for title and body to the database
        Journals::create(request(['title', 'body']));

        //redirect to the journals home page
        return redirect('/journals');
    }
}
