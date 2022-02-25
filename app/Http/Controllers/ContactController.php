<?php

namespace App\Http\Controllers;

use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = User::paginate();

        return view('contacts.index', compact('contacts'));
    }
}
