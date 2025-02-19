<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourtType;

class CourtTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $types = CourtType::all();
        return view('mcourt_type', compact('types'));
        //return $types;
        //return view('mcourt_type');
    }

    public function store ()
    {
        
    }
}
