<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Tokoh;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function mulai()
    {
        return view('mulai');
    }
    public function index()
    {
        $kategoris = Kategori::all();
        $tokohs = Tokoh::all();

        return view('mulai', compact('kategoris', 'tokohs'));
    }

}