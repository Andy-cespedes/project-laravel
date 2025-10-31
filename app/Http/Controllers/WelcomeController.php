<?php
namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {

        return view('welcome', [
            'course' => 'Laravel',
            'year' => 2025
        ]);
    }
}