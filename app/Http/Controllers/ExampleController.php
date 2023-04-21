<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        // imagine we loaded data from the database
        $ourName = 'Paxton';
        $animals =['Meowsalot', 'Barksalot', 'Purrsalot']; 

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']); 
        }

    public function aboutPage() {
        return view('single-post'); 
    }
}
