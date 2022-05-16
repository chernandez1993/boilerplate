<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('character.index', [
            'characters' => $characters
        ]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {
        $character = Character::find($id);
        return view('character.edit', [
            'character' => $character
        ]);
    }

    public function update(Request $request, $id)
    {
        //Useful Links
        // https://laravel.com/docs/9.x/requests#retrieving-input
        // https://laravel.com/docs/9.x/eloquent#updates

        //For frontend if your interested in writing simple web pages
        //For simple sites, I typically use bootstrap for different components such as card, form inputs, etc
        //Example I copy alot of html from the card page https://getbootstrap.com/docs/5.2/components/card/

        //TODO
        //dd will output the data and stop the script
        dd($request); //Click on request to see the payload that came from your form

        //Bonus - Add server validation to prevent empty input 
        //https://laravel.com/docs/9.x/validation


        //After update return user to main character screen with status message
        // https://laravel.com/docs/9.x/responses#redirecting-named-routes
        $characters = Character::all();
        return redirect()->route('character.index')
                         ->with('status', 'TODO No Data Saved - Successfully Updated Character.');
    }

    public function destroy($id)
    {

    }
}
