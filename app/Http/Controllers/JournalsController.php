<?php

namespace App\Http\Controllers;

use App\Journals;
use Auth;

class JournalsController extends Controller
{
    public function index()
    {
        if(Auth::check()){
        
            $journals = Journals::latest()->get();

            return view('/Journals/journals', compact('journals'));

        }else{
            return view('/auth/login');        
        }
    }

    public function prompted()
    {
        if(Auth::check()){

            return view('/Journals/promptedJournal');

        }else{
            return view('/auth/login');        
        }
    }

    public function unprompted()
    {
        if(Auth::check()){

            return view('/Journals/unpromptedJournal');

        }else{
            return view('/auth/login');        
        }
    }

    public function journal(Journals $journal)
    {
        if(Auth::check()){

            if($journal->user_id == Auth::id()){

                return view('/Journals/journal', compact('journal'));
            }else{
                $journals = Journals::latest()->get();

                return view('/Journals/journals', compact('journals'));
            }

        }else{
            index();        
        }
    }

    //Store an unprompted journal entry to the database
    public function storeUnprompted()
    {

        $this->validate(request(), [

            'body' => 'required'
        ]);

        //send the request data for title and body to the database
        Journals::create([
            'body' => request('body'),
            'user_id' => Auth::id()
        ]);

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
        Journals::create([
            'body' => request('body'),
            'user_id' => Auth::id(),
            'prompt1' => request('prompt1'),
            'prompt2' => request('prompt2'),
            'prompt3' => request('prompt3'),
            'prompt4' => request('prompt4'),
            'prompt5' => request('prompt5')
        ]);

        //redirect to the journals home page
        return redirect('/journals');
    }

    public function edit(Journals $journal)
    {
        if(Auth::check()){  

            return view('journals.edit', compact('journal'));

        }else{
            return view('/auth/login');        
        }
    }

    public function update(Journals $journal)
    {

        $this->validate(request(), [

            'body' => 'required'
            
        ]);

        $journal->update(request(['body', 'prompt1', 'prompt2', 'prompt3', 'prompt4', 'prompt5']));
        
        return redirect('/journals');

    }

    public function destroy(Journals $journal)
    {
        $journal->delete();

        return redirect('/journals');
    }
}
