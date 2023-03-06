<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::all();

        // Debug
        // dd($authors);

        // Routage vers la vue, avec la variable en paramètre
        return view("authors.authorslist", [
            "authors" => $authors
        ]);
    }
}
